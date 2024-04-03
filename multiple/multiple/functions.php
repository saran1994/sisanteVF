<?php

$db= mysqli_connect('localhost','root','','employeeLeave') or die($db);

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $lang=$_POST['languages'];

    foreach($lang as $i){
        $lang=$i;
        $sql= "INSERT INTO users SET name='$name', languages='$lang'";
        mysqli_query($db,$sql);
    }
    echo 'a new user successfully been added';
    header('refresh:3; url=index.php');
}





















?>