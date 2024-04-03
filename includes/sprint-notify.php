<link rel="stylesheet" href="../assets/css/styles.css">

<?php 
    include 'dbconn.php';
    $hazar="A";
    $sql = "SELECT idsprint from sprint where hazar=:hazar";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':hazar',$hazar,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $unreadcount=$query->rowCount();

?>
    
    <li class="dropdown">
        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
            <span><?php echo htmlentities($unreadcount);?></span>
            </i>
            <div class="dropdown-menu bell-notify-box notify-box">
            <span class="notify-title">vous avez <?php echo htmlentities($unreadcount);?>  notifications! <b>non lus</b></span>

            <div class="notify-list">
            <?php 
                $hazar="A";
                
                $sql = "SELECT * from sprint where hazar=:hazar ";
                $query = $dbh -> prepare($sql);
                $query->bindParam(':hazar',$hazar,PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {               ?>  
                    
                     
                     <a href="../admin/sprint.php?idsprint=<?php echo htmlentities($result->idsprint);?>" class="notify-item">
                       <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                       <div class="notify-text">

                        <td> <?php 
                                             

                                             
                       if($hazar="A")  { ?>

                                                <span style="color: red">rappel venant de </span>

                                                

                                                 <?php } ?>

                                            <?php  
                                              $username=$_SESSION['alogin'];
    $sql = "SELECT fullname,username,poste from  admin where username=:username";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
  
    
        foreach($results as $result)
    {    ?>
         <b> <p style="color:gold;"><?php echo htmlentities($result->fullname);?></p></b>
         <b><?php echo htmlentities($result->poste); ?></b>
            

<?php }

                                              ?>
                                            <br><br><br>
                        </div>
                      </a>
                                        
                      <?php }} ?> 
                     </div>
                            
                     
                     
                      </div>
                      
     </li>