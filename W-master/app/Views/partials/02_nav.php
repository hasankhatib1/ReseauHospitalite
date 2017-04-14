
<!--modifié par rachida 11-04 -->

<nav class="navbar navbar-default " role="navigation">
    <div class="container col-md-12 col-md-offset-3 ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="<?= $this->url('default_accueil')?>">Réseau Hospitalité</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a href="<?= $this->url('default_accueil')?>">Accueil</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nous connaître <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $this->url('default_valeurs')?>">Nos valeurs</a></li>
                        <li><a href="<?= $this->url('default_carte')?>">Carte interactive</a></li>
                        <li><a href="<?= $this->url('default_rencontres')?>">Nos rencontres</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actions de groupes <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $this->url('default_heberger')?>">Héberger</a></li>
                        <li><a href="<?= $this->url('default_sensibiliser')?>">Sensibiliser</a></li>
                        <li><a href="<?= $this->url('default_langue')?>">Accompagner à la langue</a></li>
                        <li><a href="<?= $this->url('default_guider')?>">Guider</a></li>
                        <li><a href="<?= $this->url('default_juridique')?>">Le juridique</a></li>
                        <li><a href="<?= $this->url('default_sante')?>">La santé</a></li>
                        <li><a href="<?= $this->url('default_economie')?>">Activités économiques</a></li>
                        <li><a href="<?= $this->url('default_social')?>">Vie sociale</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">S'informer <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $this->url('default_ideesrecues')?>">Combattre les idées reçues</a></li>
                        <li><a href="<?= $this->url('default_actualites')?>">Actualités</a></li>
                        <li><a href="<?= $this->url('default_agenda')?>">Agenda</a></li>
                        <li><a href="<?= $this->url('default_outils')?>">Outils pédagogiques/bonnes pratiques</a></li>
                        <li><a href="<?= $this->url('default_faq')?>">FAQ</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agir et interpeller <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $this->url('default_benevole')?>">S’engager comme bénévole</a></li>
                        <li><a href="<?= $this->url('default_propose')?>">Je propose</a></li>
                        <li><a href="<?= $this->url('default_adresses')?>">Adresses utiles</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Outils <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $this->url('default_annuaire')?>">Annuaire adhérents</a></li>
                        <li><a href="<?= $this->url('default_forum')?>">Forum</a></li>
                    </ul>
                </li>

            </ul>
        </div>

    </div>
</nav>
