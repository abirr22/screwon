<?php

include 'avionC.php';
	$avionC=new AvionC();
	$listeavion=$avionC->afficherAvions();


 
    foreach($listeavion as $a){ //foreach tamml lop
?>
<tr>
    <td><?php echo $a['idavion']; ?></td>
    <td><?php echo $a['nomavion']; ?></td>
    
    
</tr>
<?php
    }
?>




