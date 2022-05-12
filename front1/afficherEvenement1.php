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


if (isset($_GET['q']) && !empty($_GET['q'])) {
    $recherche = htmlspecialchars($_GET['q']);
    $evenement = $config->prepare("SELECT * FROM evenement WHERE nomEvenement LIKE '%".$recherche."%'");
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
                    <input type="text"  class="form-control" id="inputModalSearch" name="q" placeholder="Search evenement ..">
                    <button type="submit" class="input-group-text bg-success text-light" href="recherche.php">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>

        </div>

    </div>
 



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            

            <div class="col-lg-9">
                <div class="row">
                  
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>tous les événements</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                <center> <a style="margin-left:2100;" href="affichertrier.php"  class="btn btn-primary">trier</a></center>
             
                <?php
    require_once '../config.php';
$config=config::getConnexion();


if (isset($_POST["submit"])) {
    $str = $_POST["search"];

    $sth = $config->prepare("SELECT * FROM evenement limit $start_from ,$num_per_page WHERE nomEvenement = '$str'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($Evenement = $sth->fetch())
    {
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


        else{
            echo "Name Does not exist";
        }
    }
   
    ?>


<?php

                    $i=0;
                        foreach ($Evenements as $Evenement) {
                            if ($Evenement['idEvenement'] <3) {
                         $i++;

                ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                               <img
                    class="card-img rounded-0 img-fluid"
                    src="assets/img/<?php echo $Evenement['img']; ?>"   />
              
                               <!--  <img class="card-img rounded-0 img-fluid" src="assets/img/tayara (2).png">    -->
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="detail_evenement.php?idEvenement=<?php echo $Evenement['idEvenement']; ?>">
                                        <i class="far fa-heart"></i> </a> </li> 
                                        <li><a class="btn btn-success text-white mt-2"  href="detail_evenement.php?idEvenement=<?php echo $Evenement['idEvenement']; ?>">
                                        <i class="far fa-eye"></i> </a></li>
            
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                             <center>   <a href="detail_evenement.php?idEvenement=<?php echo $Evenement['idEvenement']; ?>" style="color:rgb(61, 118, 192)" class="h3 text-decoration-none"><?php echo $Evenement['nomEvenement']; ?> </a> </center>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                               <h1> <small> <small> <small> <small> <small> <small>  Date: <?php echo $Evenement['dateEvenement']; ?></small> </small></small></small></small> </small></h1>
                               <h2>             </h2>
                                    
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-1">
                            
                                <h3>  <small> <small> <small> <small> <small>  Prix: <?php echo $Evenement['prix']; ?> dt  </small></small></small></small> </small></h3>
                                    <li class="pt-3">
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

                                
                </div>
                <br>

                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="afficherEvenement1.php" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="afficherEvenement2.php">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="afficherEvenement3.php">3</a>
                        </li>
                    </ul>
                </div> 
            </div>

        </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                       

                    

                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->





    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">TAYARNI</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            53 Tunis cie ghazela
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:50-454-935">50454935</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:tayarni@gmail.com">tayarni@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Produits</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Jet privé </a></li>
                        <li><a class="text-decoration-none" href="#">Equipage</a></li>
                        <li><a class="text-decoration-none" href="#">eve$Evenement luxair</a></li>
                        <li><a class="text-decoration-none" href="#">Le Boeing 737</a></li>
                        <li><a class="text-decoration-none" href="#">Le Boeing 777</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Informations</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Acceuil</a></li>
                        <li><a class="text-decoration-none" href="#">Location</a></li>
                        <li><a class="text-decoration-none" href="#">Equipage</a></li>
                        <li><a class="text-decoration-none" href="#">Boutique</a></li>
                        <li><a class="text-decoration-none" href="#">Forum</a></li>
                        <li><a class="text-decoration-none" href="#">Evenement</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 TAYARNI </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>