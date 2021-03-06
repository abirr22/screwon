<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Tayarni </title>

    
</head>

<body>
<div class = "Graphe">
    <?php 
    echo "< img src=' ./graph.php' />"
    ?>

</div>
   <?php include '../avionC.php'; 
	$avionC=new AvionC();
	$listeavion=$avionC->afficherAvions(); 
    $list1avion=$avionC->affichertrier();
    ?>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Tayarni</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                       
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Abir khelifi</span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Abir khelifi </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">

   

                </style>
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>gestion de vente <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            
                                        </li>
                                       
                                        
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Vente</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Location</a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Staff</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Evenements</a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forum</a>
                                
                            </li>
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content "> 
                    
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <form action="ajouter_avion.php" method="POST" >  <!-- ... action : where to send the form-data/  post: envoie des donn??es au serveur -->.
                                    
                                <div class="form-group">
                                    <label>id</label>
                                    <input type="text" name="id" class="form-control" id="input-id">

                                    <small id="input-id-error" class="form-text text-danger d-none">veuillez entrer votre Id</small>
                                </div>
                                <div class="form-group">
                                    <label>nom</label>
                                    <input type="text" name="nom" class="form-control" id="input-nom">
                                    <small id="input-nom-error" class="form-text text-danger d-none">veuillez entrer votre nom</small>
                                </div>
                                <div class="form-group">
                                    <label>prix</label>
                                    <input type="text" name="prix" class="form-control" id="input-prix">
                                </div>
                                <div class="form-group">
                                    <label>etat</label>
                                    <input type="text"name="etat" class="form-control" id="input-etat">
                                </div>
                                <div class="form-group">
                                    <label>choix</label>
                                    <input type="text" name="choix" class="form-control" id="input-choix">
                                </div>
                                <div class="form-group">
                                    <label>km</label>
                                    <input type="text" name="km" class="form-control" id="input-km">
                                </div>
                                <div class="form-group">
                                    <label>img1</label>
                                    <input type="text" name="img1"  class="form-control" id="input-img1">
                                </div>
                                <div class="form-group">
                                    <label>img2</label>
                                    <input type="file" name="img2" class="form-control" id="input-img2">
                                </div>
                                <div class="form-group">
                                    <label>img3</label>
                                    <input type="file" name="img3" class="form-control" id="input-img3">
                                </div>
                                <div class="form-group">
                                    <label>img4</label>
                                    <input type="file" name="img4" class="form-control" id="input-img4">
                                </div>


                                <button id="btn-submit"type="submit" class="btn btn-primary" disabled >enregistrer</button>   
                                </form>
                            </div>
                            <div class="modal-footer">
                                
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
     </div>
</div>
</div>
</div>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
 <a  type="text" id="myInput" href="afficher_trier.php"  class="btn btn-primary" title="trier">trier</a> 
 <a  type="text" id="myInput" href="graph.php"  class="btn btn-primary" title="trier">statistique</a>

  
                    <div class="card">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModa2">
                           Ajouter Avion
                          </button>  
                       
                          <form id="myInput" name="bouton" method="post" action="afficher_email.php" class="btn btn-secondary" >
                             <p><input type="submit" name="bouton"> envoyer un email </p>
                               </form>

                        <form action="pdf.php" method="post">
                         
                     <div class="card-body">
                            <table id="myTable">  <!-- .. lezem nhot nafes id mtee tableau bch yaarf li howa yekhdem al tableau adheka . -->.
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">nom</th>
                                        <th scope="col">prix</th>
                                        <th scope="col">etat</th>
                                        <th scope="col">choix</th>
                                        <th scope="col">km</th>
                                        <th scope="col">img1</th>
                                        <th scope="col">img2</th>
                                        <th scope="col">img3</th>
                                        <th scope="col">img4</th>
                                        
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php  foreach($listeavion as $avion){ //boucle for bch tparcouri tableau o yaffichili a chaque fois les donnes li fih  ?>  
                                    <tr>
                                        
                                        <td> <?php echo $avion['id']; ?> </td>
                                        <td><?php echo $avion['nom']; ?></td>
                                        <td><?php echo $avion['prix']; ?></td>
                                        <td><?php echo $avion['etat']; ?></td>
                                        <td><?php echo $avion['choix']; ?></td>
                                        <td><?php echo $avion['km']; ?></td>
                                        <td><?php echo $avion['img1']; ?></td>
                                        <td><?php echo $avion['img2']; ?></td>
                                        <td><?php echo $avion['img3']; ?></td>
                                        <td><?php echo $avion['img4']; ?></td>
                                      
                                       
                                        <td>
                                        
                                            <button onClick="select_avion('<?php echo $avion['id'] ?>','<?php echo $avion['nom'] ?>','<?php echo $avion['prix'] ?>','<?php echo $avion['etat'] ?>','<?php echo $avion['choix'] ?>','<?php echo $avion['km'] ?>','<?php echo $avion['img1'] ?>','<?php echo $avion['img2'] ?>','<?php echo $avion['img3'] ?>','<?php echo $avion['img4'] ?>')" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal1">
                                                 Modifier 
                                            </button>  
                                        
                                        <a href="supprimer_avion.php?id=<?php echo $avion['id']; ?>" onclick="return(confirm('Etes-vous s??r de vouloir supprimer cette entr??e?'));" class="btn btn-danger">Supprimer</a>
                                    </td>

                                    
                                    </tr>
                           
                                    <?php } ?>
                                    <a style="margin-left:1100;"   value="Create PDF" id="btPrint" onclick="createPDF()" class="btn btn-danger">pdf </a>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    
                        </div>
                    </div>
                </div>
            </div>
            <style>
            .pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
}
</style>

<div class="pagination">
  <a href="afficherback.php">&laquo;</a>
  <a class="active" href="afficherback.php">1</a>
  <a   href="afficherback1.php">2</a>
  <a href="afficherback2.php">3</a>
  <a href="afficherback2.php">&raquo;</a>
</div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright ?? 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
    <script>

function select_avion(id,nom,prix,etat,choix,km,img1,img2,img3,img4) //les champs mtee3 formulaire kaada nhot f les valeurs mtehom 
{
    $('#input-1id').val(id);
    $('#input-1nom').val(nom);
    $('#input-1prix').val(prix);
    $('#input-1etat').val(etat);
    $('#input-1choix').val(choix);
    $('#input-1km').val(km);
    $('#input-1img1').val(img1);
    $('#input-1img2').val(img2);
    $('#input-1img3').val(img3);
    $('#input-1img4').val(img4);

    console.log(id+nom+prix+etat+choix+km+img1+img2+img3+img4)
}
$( document ).ready(function() {  //fonction trecuperi valeur fi west champs id o amalt test est ce que le champs adheka vide wale 
   
  
    $('#input-id').on('change',function onInputIdChange()
    { 
         var inputId= $('#input-id').val();
        
        
        if (inputId!=''&& parseInt(inputId)>0)
        {  
            
            document.getElementById('input-id-error').classList.add('d-none')
            $('#btn-submit').attr('disabled',false); //bloukit l boutton 
        }
        else
         {
            $('#btn-submit').attr('disabled',true);
            document.getElementById('input-id-error').classList.remove('d-none')
            
        }
    })  


    $('#input-nom').on('change',function onInputNomChange()
    { 
         var inputNom= $('#input-nom').val();
        
        
        if (inputNom!=''&& inputNom.length<10)
        {  
            
            document.getElementById('input-nom-error').classList.add('d-none')
            $('#btn-submit').attr('disabled',false); //bloukit l boutton 
        }
        else
         {
            $('#btn-submit').attr('disabled',true);
            document.getElementById('input-nom-error').classList.remove('d-none')
            
        }
    })  

});




</script>
  <!-- ... un deuxieme form lel modifier  -->.
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <form action="modifier_avion.php" method="POST" >
                                    
                                <div class="form-group">
                                    <label>id</label>
                                    <input type="text" name="id" class="form-control"  id="input-1id">

                                    <small id="input-id-error" class="form-text text-danger d-none">veuillez entrer votre Id</small> 
                                </div>
                                <div class="form-group">
                                    <label>nom</label>
                                    <input type="text" name="nom" class="form-control" id="input-1nom">
                                    <small id="input-nom-error" class="form-text text-danger d-none">veuillez entrer votre nom</small>
                                </div>
                                <div class="form-group">
                                    <label>prix</label>
                                    <input type="text" name="prix" class="form-control" id="input-1prix">
                                </div>
                                <div class="form-group">
                                    <label>etat</label>
                                    <input type="text"name="etat" class="form-control" id="input-1etat">
                                </div>
                                <div class="form-group">
                                    <label>choix</label>
                                    <input type="text" name="choix" class="form-control" id="input-1choix">
                                </div>
                                <div class="form-group">
                                    <label>km</label>
                                    <input type="text" name="km" class="form-control" id="input-1km">
                                </div>
                                <div class="form-group">
                                    <label>img1</label>
                                    <input type="text" name="img1"  class="form-control" id="input-1img1">
                                </div>
                                <div class="form-group">
                                    <label>img2</label>
                                    <input type="text" name="img2" class="form-control" id="input-1img2">
                                </div>
                                <div class="form-group">
                                    <label>img3</label>
                                    <input type="text" name="img3" class="form-control" id="input-1img3">
                                </div>
                                <div class="form-group">
                                    <label>img4</label>
                                    <input type="text" name="img4" class="form-control" id="input-1img4">
                                </div>


                                <button id="btn-submit"type="submit" class="btn btn-primary"  >enregistrer</button>   
                                </form>
                            </div>
                            <div class="modal-footer">
                                
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
     </div>
    




<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput"); //bch l recherche taref li heya tekhdem al id 
  filter = input.value.toUpperCase(); // ki ndakhlou maj wla mini yaaml l recherche 
  table = document.getElementById("myTable"); //bch yaare l table l nekhdem aleha
  tr = table.getElementsByTagName("tr"); //bch yekhou ligne 
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0]; 
    if (td) {
      txtValue = td.textContent || td.innerText; // 
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


<script>
    function createPDF() {
        var Table = document.getElementById('myTable').innerHTML; //jebna l'id mtee table b getelement par id 

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>listeavion</title>');   // <title> FOR PDF HEADER.
         win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('</body>');
        win.document.write('<table>');
        
        win.document.write(Table);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close();   // CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
   
    }
</script>


</script>




    



</body>
 
</html>