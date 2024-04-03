<?php
    include '../includes/dbconn.php';
    $username=$_SESSION['alogin'];
    $sql = "SELECT fullname,username from  admin where username=:username";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    

    
        foreach($results as $result)
    {    ?>
         <b> <p style="color:gold;"><?php echo htmlentities($result->fullname);?></p></b>
            <span><?php echo htmlentities($result->username)?></span>
<?php }
   

        
?>


                             
