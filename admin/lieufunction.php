<?php

$db= mysqli_connect('localhost','root','','employeeLeave') or die($db);

if(isset($_POST['add'])){
    
    $dat=$_POST['dat'];
    $eur=$_POST['eur'];
    
    $department=$_POST['department'];
    $person=$_POST['person'];

    foreach($person as $i){
        $person=$i;
        $sql= "INSERT INTO lieu SET dat='$dat', eur='$eur',  department='$department', person='$person' ";
        mysqli_query($db,$sql);
    }
    header('location:../admin/lieu.php');
}

?>