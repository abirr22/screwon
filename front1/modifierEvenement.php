<?php
    include_once '../Model/Evenement.php';
    include_once '../Controller/EvenementC.php';

    $error = "";

    // create Evenement
    $Evenement = null;

    // create an Etance of the controller
    $EvenementC = new EvenementC();
    if (
        isset($_POST["nomEvenement"]) &&	
        isset($_POST["descriptionEvenement"]) &&
		isset($_POST["prix"]) && 
        isset($_POST["temps"]) && 
        isset($_POST["dateE"])
    ) {
        if (
            !empty($_POST["nomEvenement"]) && 
            !empty($_POST["descriptionEvenement"]) && 
			!empty($_POST["prix"]) && 
            !empty($_POST["temps"]) && 
            !empty($_POST["dateE"])
        ) {
            $Evenement = new Evenement(
                $_POST['nomEvenement'],
                $_POST['descriptionEvenement'], 
				$_POST['prix'],
                $_POST['temps'],
                $_POST['dateE']
            );
            $EvenementC->modifierEvenement($Evenement, $_POST["nomEvenement"]);
            header('Location:afficherListeEvenements.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeEvenements.php">Retour à la liste des événements</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['nomEvenement'])){
				$Evenement = $EvenementC->recupererEvenement($_POST['nomEvenement']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="nomEvenement">Nom de l'événement:
                        </label>
                    </td>
                    <td><input type="text" name="nomEvenement" id="nomEvenement" value="<?php echo $Evenement['nomEvenement']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="descriptionEvenement">Description de l'événement:
                        </label>
                    </td>
                    <td><input type="text" name="descriptionEvenement" id="descriptionEvenement" value="<?php echo $Evenement['descriptionEvenement']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prix" value="<?php echo $Evenement['prix']; ?>" id="prix">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="temps">temps:
                        </label>
                    </td>
                    <td>
                        <input type="temps" name="temps" id="temps" value="<?php echo $Evenement['temps']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Date de l'événement:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dateE" id="dateE" value="<?php echo $Evenement['DateEvenement']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>