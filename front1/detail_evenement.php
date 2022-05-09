<?php
include_once '../Controller/EvenementC.php';
include_once '../Controller/ParticipantC.php';
include_once '../Model/Evenement.php';


  $ParticipantC=new ParticipantC();
  
  $listeParticipants=$ParticipantC->afficheridev($_GET['idEvenement']); 

	

  
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
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">50454935</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
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
                            <a class="nav-link" href="contact.html">Commandes</a>
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
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
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

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
  
    <!-- Open Content -->
    <?php
    
    require_once '../config.php';

    $EvenementC=new EvenementC();
	$Evenements=$EvenementC->afficherEvenements(); 
  
    $config=config::getConnexion();
    
    if (isset($_POST["submit"])) {
        $str = $_POST["search"];
        $sth = $config->prepare("SELECT * FROM evenement WHERE nomEvenement = '$str'");
    
        $sth->setFetchMode(PDO:: FETCH_OBJ);
        $sth -> execute();
    
        if($Evenement = $sth->fetch())
        {
        
           
    
    ?>
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                    <img
                class="card-img img-fluid"
                src="assets/img/<?php echo $Evenement->img; ?>" alt="Product Image " />
                    </div>
                    
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                        <h1 class="h2"><?php echo $Evenement->nomEvenement; ?></h1>
                            
                            <p class="py-2">
                            
                                <span class="list-inline-item text-dark">20 Commentaires</span>
                            </p>

                            <h6>Description:</h6>
                            <h1 class="h2"><?php echo $Evenement->descriptionEvenement; ?></h1>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Date:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $Evenement->dateEvenement; ?></strong></p>
                                </li>
                            </ul>
                            dateEvenement
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Temps:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $Evenement->temps; ?></strong></p>
                                </li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Lieu:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>hôtel</strong></p>
                                </li>
                            </ul>
            

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                       <!-- <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Participer</button> -->
                                        <button><a href="ajouterParticipant.php">Participer</a></button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Intéréser</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }


        else{
            echo "Name Does not exist";
        }
    } 
    $i=0;
    foreach ($Evenements as $Evenement) {
     $i++;
                        
                         ?> 

<section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                    <img
                class="card-img img-fluid"
                src="assets/img/<?php echo $Evenement['img']; ?>" alt="Product Image " />
                    </div>
                    
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                        <h1 class="h2"><?php echo $Evenement['nomEvenement']; ?></h1>
                            
                            <p class="py-2">
                            
                                <span class="list-inline-item text-dark">20 Commentaires</span>
                            </p>

                            <h6>Description:</h6>
                            <h1 class="h2"><?php echo $Evenement['descriptionEvenement']; ?></h1>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Date:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $Evenement['dateEvenement']; ?></strong></p>
                                </li>
                            </ul>
                            dateEvenement
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Temps:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $Evenement['temps']; ?></strong></p>
                                </li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Lieu:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>hôtel</strong></p>
                                </li>
                            </ul>
            

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                       <!-- <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Participer</button> -->
                                        <button><a href="ajouterParticipant.php">Participer</a></button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Intéréser</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php } ?>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
           

            <!--Start Carousel Wrapper-->
            


        </div>
    </section>
    <!-- End Article -->


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
                        <li><a class="text-decoration-none" href="#">Evenement luxair</a></li>
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

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>