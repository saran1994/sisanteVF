<?php
//upload.php
if($_FILES["file"]["name"] != '')
{
 

$filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"]; 
    $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

    if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif')
      {
        $msg = "";
        $folder = "../employees/".$filename;
        

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


