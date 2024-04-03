
     <?php 
    
    $isread=0;
    $sql = "SELECT idp from program where isread=:isread";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':isread',$isread,PDO::PARAM_STR);
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
                $isread=0;
                $sql = "SELECT program.idp as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.EmpId,program.creationdate from program join tblemployees on program.empid=tblemployees.id where program.isread=:isread";
                $query = $dbh -> prepare($sql);
                $query->bindParam(':isread',$isread,PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {               ?>  
                    
                     
                     <a href="stimulation-details.php?idp=<?php echo htmlentities($result->lid);?>" class="notify-item">
                       <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                       <div class="notify-text">
                       <p><b><?php echo htmlentities($result->FirstName." ".$result->LastName);?>
                                            <br />(<?php echo htmlentities($result->EmpId);?>)
                                            </b> vous a envoyer un message.</p>
                            <span>le <?php echo htmlentities($result->creationdate);?></b></span>
                        </div>
                      </a>
                                        
                      <?php }} ?> 
                     </div>
                            
                     
                     
                      </div>
                      
     </li>