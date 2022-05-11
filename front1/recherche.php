<?php
	include '../Controller/EvenementC.php';
	$EvenementC=new EvenementC();
	$Evenements=$EvenementC->afficherEvenements(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tayarni eCommerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/logo.gif">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.gif">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
 

    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">Tayarni@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:50-454-935">50454935</a>
                </div>
                <div>
                    <a class="text-light" href="https://facebook.com/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <img class ="logo" src="./assets/img/logo.gif" alt="">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Tayarni
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Boutique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Equipement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="forum.html">forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="evenements.php">Evenement</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="recherche.php" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <?php
  require_once '../config.php';
$config=config::getConnexion();
$evenement= $config->prepare("SELECT * FROM evenement ");


if (isset($_GET['q']) AND !empty($_GET['q'])) 
   {
    $recherche = htmlspecialchars($_GET['q']);
    $evenement = $config->prepare('SELECT * FROM evenement WHERE nomEvenement LIKE "%'.$recherche.'%"');
    }
  ?>
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search evenement ..">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
            <section class="afficher_evenement">
 <?php
    if($evenement->rowCount() >0)
  {
    while($even= $evenement->fetch()){
        ?>
                          <div class="col-md-4">
                              <div class="card mb-4 product-wap rounded-0">
                                  <div class="card rounded-0">
                                     <img
                          class="card-img rounded-0 img-fluid"
                          src="assets/img/<?php echo $Evenement->img; ?>"   />
                    
                                     <!--  <img class="card-img rounded-0 img-fluid" src="assets/img/tayara (2).png">    -->
                                      <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                          <ul class="list-unstyled">
                                              <li><a class="btn btn-success text-white" href="detail_evenement.php?idEvenement=<?php echo $Evenement->idEvenement; ?>">
                                              <i class="far fa-heart"></i> </a> </li> 
                                              <li><a class="btn btn-success text-white mt-2"  href="detail_evenement.php?idEvenement=<?php echo $Evenement->idEvenement; ?>">
                                              <i class="far fa-eye"></i> </a></li>
                  
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                      <a href="detail_evenement.php" style="color:rgb(61, 118, 192)" class="h3 text-decoration-none"><?php echo $Evenement->nomEvenement; ?> </a>
                                      <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                          <li>Tayarni vous présente "le lancement" son premier événement...</li>
                                          <li class="pt-2">
                                              <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                              <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                              <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                              <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                              <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                          </li>
                                      </ul>
                          
                                  </div>
                              </div>
                          </div>
                          <?php 
          }
        }
   
        ?>
  