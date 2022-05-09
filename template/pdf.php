

<?php include '../avionC.php'; 
	$avionC=new AvionC();
	$listeavion=$avionC->afficherAvions(); ?>

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

               
                

            
            </tr>
            <?php } ?>
         
        </tbody>
    </table>
  
</div>
</div>

</body>




