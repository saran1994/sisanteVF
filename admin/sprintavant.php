<?php
//upload.php
if($_FILES["avant"]["name"] != '')
{
 

$filename = $_FILES["avant"]["name"];
    $tempname = $_FILES["avant"]["tmp_name"]; 
    $extension = pathinfo($_FILES["avant"]["name"], PATHINFO_EXTENSION);

    if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif')
      {
        $msg = "";
        $folder = "../admin/".$filename;
        

        $db = mysqli_connect("localhost", "root", "", "employeeleave");
        $sql = "INSERT INTO image (filename) VALUES ('$filename')";
        mysqli_query($db, $sql);       
          
          if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image importer avec succes";
            }else{
            $msg = "erreur!! format invalide";
            }
      }
    else
    {
      $msg = "veuillez choisir une image";
    } 
}

$result = "erreur!! format invalide";




?>


