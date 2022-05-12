<?php

require_once     '../Controller/reservationC.php';
require_once '../Model/reservation.php' ;




if (isset($_POST['nom'] ) && isset($_POST['prenom'] )&& isset($_POST['email'] )&& isset($_POST['cin'] )&& isset($_POST['num'] )&& isset($_POST['poste'] )&& isset($_POST['destination'] )&& isset($_POST['depart'] )&& isset($_POST['retour'] )&& isset($_POST['staff'] )&& isset($_POST['id'] )) 
{
        $reservation = new reservation(NULL , $_POST['nom'] , $_POST['prenom'] , $_POST['email'], $_POST['cin'] , $_POST['num'], $_POST['poste'], $_POST['destination'], $_POST['depart'], $_POST['retour'], $_POST['staff'], $_POST['id']);
        $reservationC = new reservationC();
        $reservationC->ajouterreservation($reservation);
        header('Location:afficherreservation.php');
}



?>
<html lang="en">

<head>
    <title>Tayarni</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
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
<style>
  .bouger {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #FE1B00;} /* rouge */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

</style>
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
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
                            <a class="nav-link" href="evenement.html">Evenement</a>
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

   
     <!-- close header --> 

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



    <section class="bg-success py-3">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Reservation</h1>
                    
                </div>
                <div class="col-md-4" >
                    <img style="border-radius: 50%;" src="assets/img/avion.jpg" width="300px" height="400px" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    
	<section style="display:flex;border-radius: 25px;border: 2px solid #73AD21;padding: 20px; margin-left:20px;margin-right:20px;margin-bottom:40px;margin-top:40px;">
	<div style="display:grid;gap:70px;">
	



        <form  action="" method="POST" onsubmit="return verif();" >
            <table  style="display:flex;   width: 50%; border: 3px solid green;padding: 10px;margin-left:600px;"> 
                                
            <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="nom">nom:
                                            </label>
                                        </td>
                                        <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                                    </tr>
                            
    
                      <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="prenom">prenom:
                                            </label>
                                        </td>
                                        <td><input type="text" name="prenom" id="prenom" maxlength="20" required></td>
                                    </tr>
                            
    
                      <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="email">email:
                                            </label>
                                        </td>
                                        <td><input type="text" name="email" id="email"  required></td>
                                    </tr>
    
    
                    <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="cin">cin:
                                            </label>
                                        </td>
                                        <td><input type="number" name="cin" id="cin" maxlength="20" required></td>
                                    </tr>
    
                    <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="num">numero telephone:
                                            </label>
                                        </td>
                                        <td><input type="number"  name="num" id="num" maxlength='8' required ></td>
                                    </tr>
    
                    <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="poste">adresse postal:
                                            </label>
                                        </td>
                                        <td><input type="text" name="poste" id="poste" maxlength="20" required></td>
                                    </tr>
                    <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="destination">destianation:
                                            </label>
                                        </td>
                                        <td><input type="text" name="destination" id="destination" maxlength="20" required></td>
                                    </tr>
                    <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="depart">date depart:
                                            </label>
                                        </td>
                                        <td><input type="date" name="depart" id="depart" maxlength="20" required></td>
                                    </tr>
                    <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="retour">date retour:
                                            </label>
                                        </td>
                                        <td><input type="date" name="retour" id="retour" maxlength="20" required></td>
                                    </tr>
                    <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="staff">staff:
                                            </label>
                                        </td>
                                        <td><input type="text" name="staff" id="staff" required></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label style="color:green;font-family:verdana;font-size:30px" for="id">id:
                                            </label>
                                        </td>
                                        <td><input type="text" name="id" id="id" required></td>
                                    </tr>
    
    
                                    <tr>
                                        <td>
    
                      
                        
                                            <input class="button button1" type="submit" value="Envoyer"> 
                                        </td>
                                        <td>
                                            <input class="button button2" type="reset" value="Annuler" >
                                        </td>
                                    </tr>
                                </table> </form>




                           

                                <div  style="display: block;margin-left: auto;margin-right: auto;margin-top: 15%;">
	  <h1 style="text-align:center;margin-left:600;">Réserver aujourd'hui et voler demain </h1>
	  <h5 style="text-align:center;margin-left:600;">Tayarni vous assure un vol confortable avec un staff hautement qualifié</h5>
	  <div style="margin-top:30px">
	  <a style="margin-left:900;" href="afficherreservation.php"  class="button button3">Retour</a>
	  <div>
	</div>
    </section>
	
	

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<h2 style="text-align:center;">Equipage</h2>
	<div style="display:flex;">
	<div>
	<h5 style="color:green;font-family:verdana">PNT:</h5>
	<label for="huey">oui</label>
	<input type="radio" id="pnt" name="drone" value="oui" checked>
	<label for="non">non</label>
	<input type="radio" id="pnt" name="drone" value="non" >
	</div>
	</div>
	
    <p>si non veuillez nous envoyer par mail la certification de vos pilotes</p>
	<h5 style="color:green;font-family:verdana">PNC:</h5>
	<label>
	<input type="checkbox" name="speci" value="chef Cabine" >
	chef cabine
	</label>
	
	<label>
	<input type="checkbox" name="speci" value="hotesses et steward" >
	steward
	</label>
	
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h1 class="h1 text-success border-bottom pb-3 border-light logo">Tayarni</h1>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            1,2 Rue André Ampere-2083- Techno pole Ghazela
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:+216-70-250-000">+216-70-250-000</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:contact@tayarni.tn">contact@tayarni.tn</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Location</a></li>
                        <li><a class="text-decoration-none" href="#">Achat</a></li>
                        <li><a class="text-decoration-none" href="#">Boutique</a></li>
                        <li><a class="text-decoration-none" href="#">Nos Staff</a></li>
                        <li><a class="text-decoration-none" href="#">About us</a></li>
                        <li><a class="text-decoration-none" href="#">commentaires</a></li>
                        <li><a class="text-decoration-none" href="#"> forum</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Location</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
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
                            <a rel="nofollow" class="text-light text-decoration-none" target="_blank" href="http://fb.com/templatemo"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
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
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">sign up</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2022 Tayarni 
                            | Designed by <a rel="sponsored" href="https://templatemo.com/page/1" target="_blank">ScrewOn</a>
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
    <script src="java.js"></script>
    <!-- End Script -->
</body>

</html>