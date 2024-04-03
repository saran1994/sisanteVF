<link rel="stylesheet" href="../assets/css/styles.css">

<?php 
    include 'dbconn.php';
    $status=2;
    $sql = "SELECT id from tblleaves where status=:status";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $unreadcount=$query->rowCount();

?>
    
    <li class="dropdown">Incident
        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
            <span><?php echo htmlentities($unreadcount);?></span>
            </i>
            <div class="dropdown-menu bell-notify-box notify-box">
            <span class="notify-title">vous avez <?php echo htmlentities($unreadcount);?>  notifications! <b>non lus</b></span>

            <div class="notify-list">
            <?php 
                $status=2;
                
                $sql = "SELECT * from tblleaves where status=:status ";
                $query = $dbh -> prepare($sql);
                $query->bindParam(':status',$status,PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {               ?>  
                    
                     
                     <a href="edit-rejet.php?lid=<?php echo htmlentities($result->id);?>" class="notify-item">
                       <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                       <div class="notify-text">

                        <td> <?php $stats=$result->Status;
                                             

                                             
                       if($stats==2)  { ?>

                                                <span style="color: red">Rejeter</span>

                                                

                                                 <?php } ?>

                                            <br /><?php
                                              $username=$_SESSION['alogin'];
    $sql = "SELECT fullname,username,poste from  admin where username=:username";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
  
    
        foreach($results as $result)
    {    ?>
         <b> <p ><?php echo htmlentities($result->fullname);?>-<?php echo htmlentities($result->poste); ?></b>
            

<?php }

                                              ?>
                                            </b> a rejeter votre fiche incident.</p>
                            <span> <?php echo htmlentities($result->PostingDate);?></b></span> <small> voir details</small>
                        </div>
                      </a>
                                        
                      <?php }} ?> 
                     </div>
                            
                     
                     
                      </div>
                      
     </li>



<?php 
    
    $status=2;
    $sql = "SELECT idmedical from medical where status=:status";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $unreadcount=$query->rowCount();

?>
    
    <li class="dropdown">medical
        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
            <span><?php echo htmlentities($unreadcount);?></span>
            </i>
            <div class="dropdown-menu bell-notify-box notify-box">
            <span class="notify-title">vous avez <?php echo htmlentities($unreadcount);?>  notifications! <b>non lus</b></span>

            <div class="notify-list">
            <?php 
                $status=2;
                
                $sql = "SELECT * from medical where status=:status ";
                $query = $dbh -> prepare($sql);
                $query->bindParam(':status',$status,PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {               ?>  
                    
                     
                     <a href="rejet-med.php?lid=<?php echo htmlentities($result->idmedical);?>" class="notify-item">
                       <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                       <div class="notify-text">

                        <td> <?php $stats=$result->status;
                                             

                                             
                       if($stats==2)  { ?>

                                                <span style="color: red">Rejeter</span>

                                                

                                                 <?php } ?>

                                            <br /><?php
                                              $username=$_SESSION['alogin'];
    $sql = "SELECT fullname,username,poste from  admin where username=:username";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
  
    
        foreach($results as $result)
    {    ?>
         <b> <p ><?php echo htmlentities($result->fullname);?>-<?php echo htmlentities($result->poste); ?></b>
            

<?php }

                                              ?>
                                            </b> a rejeter votre fiche medical.</p>
                            <span> <?php echo htmlentities($result->datpost);?></b></span> <small> voir details</small>
                        </div>
                      </a>
                                        
                      <?php }} ?> 
                     </div>
                            
                     
                     
                      </div>
                      
     </li>



<?php 
    
    $status=2;
    $sql = "SELECT idp from program where status=:status";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $unreadcount=$query->rowCount();

?>
    
    <li class="dropdown">Simulation
        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
            <span><?php echo htmlentities($unreadcount);?></span>
            </i>
            <div class="dropdown-menu bell-notify-box notify-box">
            <span class="notify-title">vous avez <?php echo htmlentities($unreadcount);?>  notifications! <b>non lus</b></span>

            <div class="notify-list">
            <?php 
                $status=2;
                
                $sql = "SELECT * from program where status=:status ";
                $query = $dbh -> prepare($sql);
                $query->bindParam(':status',$status,PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {               ?>  
                    
                     
                     <a href="edit-pro.php?lid=<?php echo htmlentities($result->idp);?>" class="notify-item">
                       <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                       <div class="notify-text">

                        <td> <?php $stats=$result->status;
                                             

                                             
                       if($stats==2)  { ?>

                                                <span style="color: red">Rejeter</span>

                                                

                                                 <?php } ?>

                                            <br /><?php  
                                              $username=$_SESSION['alogin'];
    $sql = "SELECT fullname,username,poste from  admin where username=:username";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
  
    
        foreach($results as $result)
    {    ?>
         <b> <p ><?php echo htmlentities($result->fullname);?>-<?php echo htmlentities($result->poste); ?></b>
            

<?php }

                                              ?>
                                            </b> a rejeter votre fiche .</p>
                            <span> <?php echo htmlentities($result->creationdate);?></b></span> <small> voir details</small>
                        </div>
                      </a>
                                        
                      <?php }} ?> 
                     </div>
                            
                     
                     
                      </div>
                      
     </li>


<?php 
    
    $status=2;
    $sql = "SELECT idformul from formul where status=:status";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $unreadcount=$query->rowCount();

?>
    
    <li class="dropdown">Formulaire
        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
            <span><?php echo htmlentities($unreadcount);?></span>
            </i>
            <div class="dropdown-menu bell-notify-box notify-box">
            <span class="notify-title">vous avez <?php echo htmlentities($unreadcount);?>  notifications! <b>non lus</b></span>

            <div class="notify-list">
            <?php 
                $status=2;
                
                $sql = "SELECT * from formul where status=:status ";
                $query = $dbh -> prepare($sql);
                $query->bindParam(':status',$status,PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {               ?>  
                    
                     
                     <a href="edit-formul.php?lid=<?php echo htmlentities($result->idformul);?>" class="notify-item">
                       <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                       <div class="notify-text">

                        <td> <?php $stats=$result->status;
                                             

                                             
                       if($stats==2)  { ?>

                                                <span style="color: red">Rejeter</span>

                                                

                                                 <?php } ?>

                                            <br /><?php  
                                              $username=$_SESSION['alogin'];
    $sql = "SELECT fullname,username,poste from  admin where username=:username";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
  
    
        foreach($results as $result)
    {    ?>
         <b> <p ><?php echo htmlentities($result->fullname);?>-<?php echo htmlentities($result->poste); ?></b>
            

<?php } ?>
                                            </b> a rejeter votre fiche.</p>
                            <span> <?php echo htmlentities($result->CreationDate);?></b></span> <small> voir details</small>
                        </div>
                      </a>
                                        
                      <?php }} ?> 
                     </div>
                            
                     
                     
                      </div>
                      
     </li>





     
               





     
               



     
               