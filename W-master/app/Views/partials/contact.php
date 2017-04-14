
<?php
$titrePage="Contact - Réseau hospitalité";
include "includes/header.php";
?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Food and Food </strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.2417234948593!2d5.596704015690794!3d43.20441908935169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9a570d3ae320f%3A0x6d3b9e11356e3adf!2sfoot+and+food!5e0!3m2!1sen!2sfr!4v1490014325697" ></iframe>
                </div>
                <div class="col-md-4">
                    <p>Télephone:
                        <strong>04 42 01 24 24</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">foot-and-food@orange.fr</a></strong>
                    </p>
                    <p>Adresse:
                        <strong>Avenue du Jujubier
                            <br>La Ciotat 13600</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Contactez-nous</strong>
                    </h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                    <!--<form method="post" role="form" action="chaabani.mjs@gmail.com">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nom</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email </label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Téléphone</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Envoyer</button>
                            </div>
                        </div>
                    </form>-->
                    <form method="post" action="mail.php">
          <label for="name">Nom:</label>
          <input type="text" name="Subject" id="name" required placeholder="Nom" />
          <label for="name">Objet Du Message:</label>
          <input type="text" name="Sujet" id="subject" required placeholder="Sujet" />
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required placeholder="email@exemple.com" />
          <label for="message">Message:</label>
          <textarea name="message" id="message" required></textarea>
          <input type="submit" value="Envoyer Mon Message" />
        </form>
                </div>
            </div>
        </div>

    </div>
   

    <?php
   include "includes/footer.php";
   ?>
</body>

</html>
