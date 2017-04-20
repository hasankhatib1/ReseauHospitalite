
<section>
<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
        <!-- <form id="contact-form" method="post" action="section-contact.php" role="form"> -->
<!--         HVA : VERIFIER pourquoi est-ce qu'on a cet id contact-form utilisé uniquement dans responsive.css
        Autrement dit : c'est quoi ce responsive.css ?
 -->        <form id="contact-form" method="post" role="form">

            <div class="messages"></div>

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Nom *</label>
                            <input id="form_name" type="text" name="name" class="form-control obligatoire"  data-error="Firstname is required.">
        
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Prénom *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control obligatoire"  data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control obligatoire" 
                            . data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_phone">Télephone</label>
                            <input id="form_phone" type="tel" name="phone" class="form-control obligatoire" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message </label>
                            <textarea id="form_message" name="message" class="form-control "  rows="4"  data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send" name="btn-send" value="Envoyer">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted"><strong>*</strong> Ces champs sont obligatoires</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
 </form>



    <!-- On créé nos propres fonctionnements en javascript ici : -->
    <script>
        // 1) Pour gérer la soumission d'un formulaire on utilise l'événement submit du formulaire
        // 2) Le formulaire se soumet si la fonction appelée retourne "vrai" (true), si la fonction retourn "faux" (false), le formulaire refuse de se soumettre !
        $('#contact-form').submit(function(){
            console.log('submit du frm');
            // Je veux interroger chaque input qui est obligatoire (qui a la classe css obligatoire)
            var inputs = $('input.obligatoire');
            var erreurs = 0;

            // Pour chaque input qui est obligatoire, je veux faire la même chose :
            inputs.each(function(index, input){
                // 1) Je dois savoir qui est l'input pour en déduire ensuite qui est son message d'erreur
                var id = input.id;
                // 2) Je dois déduire l'id du message d'erreur grâce à l'id de l'input
                // EXEMPLE : si l'identifiant de l'input est "nom" alors je sais que l'id du message est "nom-erreur" et je sais que pour le sélectionner avec jQuery je dois faire $('#nom-erreur')
                var idMessage = '#' + id + '-erreur'; // #prenom-erreur
                console.log('idMessage = ' + idMessage);
                // 3) Je dois récupérer ce que l'utilisateur a mis dans l'input grâce au super pouvoir .val() de jQuery (je dois donc donner à input l'armure jQuery !)
                var contenu = $(input).val();

                // 4) Si le contenu est vide, il y a erreur
                if(contenu.length === 0){
                    // On augmente les erreurs
                    erreurs++;
                    // On affiche le message d'erreur
                    $(idMessage).removeClass('hidden'); 
                    // On ajoute la classe "invalid" à l'input
                    $(input).addClass('invalid');
                    // On enlève la classe "valid" à l'input
                    $(input).removeClass('valid');
                } else {
                    // Sinon on cache le message d'erreur
                    $(idMessage).addClass('hidden');
                    // On ajoute à l'input la classe valid et on enlève la classe invalid
                    $(input).addClass('valid').removeClass('invalid');
                }
            });

            // Si il y a des erreurs, on ne soumet pas le formulaire
            if(erreurs > 0){
                return false;
            }

            // A la fin, si tout s'est bien passé, on soumet le formulaire  
            return true;
        })
    </script>
 </section>

 