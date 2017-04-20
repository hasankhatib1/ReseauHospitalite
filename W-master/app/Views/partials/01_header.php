<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Réseau Hospitalité</title>


    <link href="https://fonts.googleapis.com/css?family=Graduate" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= $this->assetUrl('css/main.css')?>">

    <!--  CSS BLOG-->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/owl.transitions.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/animate.min.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/lightbox.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/preloader.css')?>">


    <link rel="stylesheet" href="<?= $this->assetUrl('css/icon.css')?>">
<!--     <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css')?>"> -->
    <link rel="stylesheet" href="<?= $this->assetUrl('css/responsive.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/main2.css')?>">
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <!-- jQuery -->
    <script src="<?= $this->assetUrl('js/jquery.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= $this->assetUrl('js/bootstrap.min.js')?>"></script>




<!-- ////////// 1- ajouté par Hasan ////////////// -->

    <?php 
        if(isset($insertHtml))
            echo ($insertHtml) ;
    ?> 

</head>


<body id="body">
   

 <!-- ////////// 2- modifié par Hasan ////////////// -->

    <header  id="header">
        <div class="entete">
            <?php if (isset($w_user['role'])) { ?>
                <li> <a href="<?php echo $this->url('admin_users_logout') ?>" class ="identifBar"> Se déconnecter </a> 
            <?php 
                } 
                else { 
            ?>
                <li> <a href="#" class ="identifBar" data-toggle="modal" data-target="#myModal">S'identifier</a></li>
            <?php } ?>

            <li><a href="<?= $this->url('default_contact')?>" class="identifBar">Nous contacter</a></li>
            <li> <input type="text" placeholder="Rechercher"> <a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
            <?php 
                if (isset($w_user['role'])) 
                { 
                   echo "<li class=' text-center' id='idBienvenu'> Bienvenue <strong>". $w_user['username']."</strong> </li>" ;
                    
                }
            ?>
        </div>


<!-- ////////// 3- modifié par Hasan ////////////// -->

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Connexion</h4>
                    </div>
                    <form action="<?= $this->url('admin_users_login')?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="usernameEmail">Identiant ou adresse mail</label>
                                <input type="text" name="usernameEmail"  class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" class="form-control" required/>
                            </div>
                            <p class="text-center">
                                <a href="#"> Mot du passe perdu </a>
                            </p>
                        </div>
                        <div class="modal-footer">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success" >Valider</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                            <input type="hidden" name="operation" value="login">  <!-- info pour préciser l'action que l'admin veut réaliser -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
</header>

        <?php
            // include "02_nav.php";
            $this->insert("partials/02_nav");
        ?>

<main>