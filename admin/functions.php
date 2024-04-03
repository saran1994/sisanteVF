<?php

$db= mysqli_connect('localhost','root','','employeeLeave') or die($db);

if(isset($_POST['add'])){
    
    $name=$_POST['name'];
    $hazar=$_POST['hazar'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $avant=$_POST['avant'];
    $apres=$_POST['apres'];
    $fol=$_POST['fol'];
    $appr=$_POST['appr'];
    $com=$_POST['com'];
    date_default_timezone_set('Africa/bamako');
    $CreationDate=date('Y-m-d  ', strtotime("now"));

    foreach($email as $i){
        $email=$i;
        $sql= "INSERT INTO sprint SET name='$name', hazar='$hazar', subject='$subject', email='$email',fol='$fol', appr='$appr', com='$com', avant='$avant', apres='$apres', message='$message', CreationDate='$CreationDate' ";
        mysqli_query($db,$sql);
    }
    header('location:../admin/sprint.php');
}





















?>