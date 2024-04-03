<?php

$db= mysqli_connect('localhost','root','','employeeLeave') or die($db);

if(isset($_POST['add'])){
    
    $datee=$_POST['datee'];
    $task=$_POST['task'];
    $res=$_POST['res'];

    foreach($res as $i){
        $res=$i;
        $sql= "INSERT INTO vehicle SET datee='$datee', task='$task', res='$res' ";
        mysqli_query($db,$sql);
    }
    header('location:../admin/vehicle.php');
}

?>