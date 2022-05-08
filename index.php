<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tayarni Shop - Product Listing Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/logo.gif"
    />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/templatemo.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />

    <!-- Load fonts style after rendering the layout styles -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"
    />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />

<form methode="post" enctype="multipart/form-data">
          <input type = "file" name="uploaded_file" /> <br/>
            <input type ="submit" name="submit"/>

</head>

  <body>




<?php

if (isset($_POST['submit']))
{
$maxSize=50000;
$validExt=array('.jpg','.jpeg','.gif','.png');

if($_FILES['uploaded_file']['error']>0)
{
echo "une erreur est survenue lors du transfert";
die;

}

$fileSize=$_FILES['uploaded_file']['size'];
if($filesize > $maxSize)
{
  echo "le fichier est trop gros";
  die;
}

$fileName= $_FILES['uploaded_file']['name'];
$fileExt="." . strtolower(substr(strrchr($fileName, '.'),1));
if(!in_array($fileExt, $validExt))
{
  echo "le fichier n'est pas une image";
  die;

}

$tmpName= $_FILES['uploaded_file']['tmp_name'];
$uniqueName= md5(uniqid(rand(), true));
$fileName = "upload/" .$uniqueName . $fileExt;
$resultat = move_uploaded_file($tmpName, $fileName);

if($resultat)
{
  echo "transfert terminé";
}
}