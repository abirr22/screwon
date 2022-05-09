<?php
include '../Controller/ParticipantC.php';
$ParticipantC=new ParticipantC();
$listeParticipants=$ParticipantC->afficherParticipants(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title> Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Participants</h2>
      <table class="table table-bordered print">
        <thead>
        <tr>
				<th>Nom du participant</th>
				<th>Email</th>
				<th>numTel</th>
				<th>adresse</th>
				<th>genre</th>
			</tr>
            </thead>
        <tbody>
          <?php
          foreach($listeParticipants as $Participant){
			?>
			<tr>
				<td><?php echo $Participant['nomParticipant']; ?></td>
				<td><?php echo $Participant['email']; ?></td>
				<td><?php echo $Participant['numTel']; ?></td>
				<td><?php echo $Participant['adresse']; ?></td>
				<td><?php echo $Participant['genre']; ?></td>
                </tr>
			<?php
				}
			?>
             </tbody>
      </table>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
