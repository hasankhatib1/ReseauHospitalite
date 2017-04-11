<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Réseau Hospitalité</title>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= $this->assetUrl('css/business-casual.css')?>">

    <!--  CSS BLOG-->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/owl.transitions.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/animate.min.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/lightbox.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/preloader.css')?>">

    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!! ATTENTION !!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!! ATTENTION !!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <!-- Au 10/04 ce fichier css ne sert à rien tant qu'on n'a aucune balise
         avec la class scrollUp -->
    <!-- <link rel="stylesheet" href="<?= $this->assetUrl('css/image.css')?>"> -->
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!! ATTENTION !!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!! ATTENTION !!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->


    <link rel="stylesheet" href="<?= $this->assetUrl('css/icon.css')?>">
<!--     <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css')?>"> -->
    <link rel="stylesheet" href="<?= $this->assetUrl('css/responsive.css')?>">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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

</head>


<body>
    <!-- <div class="container"> -->
        <header id="header">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="logo"><img src="<?= $this->assetUrl('img/LogoReseauHospitalite.png')?>"> </div>
                    <div class="title-head" ><h1>Réseau Hospitalité</h1></div>
                    <div class="address-bar">marseille</div>
                    <div class="tel-bar">Tel : 04 07 25 78 89 </div>
                </div>
            </div>
        </header>

        <?php
            // include "02_nav.php";
            $this->insert("partials/02_nav");
        ?>

        <main>