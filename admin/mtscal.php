<!--  tableau matrix recap vfl -->

<style type="text/css">
    .tbl, .caption, .entete, .corps {

border: 2px solid skyblue;
  border-collapse: collapse;

}
.caption, .entete, .corps {

padding: 8px;

}

.tbl, .caption, .entete, .corps {

border: 2px solid skyblue;
  border-collapse: collapse;

}
.caption, .entete, .corps {

padding: 8px;

}

.entete {

background-color: #007bff;

}

</style>
<table class="tbl" id="dataTable">
  
  <th class="caption" colspan="32" style="text-align: center;"><b>MONTHLY LEADING INDICATOR REPORT</b></th>
  
  <colgroup>

<col style="width:100px">

<col>

<col>

</colgroup>


<tr> 
    <td class="corps" style="background-color:#007bff; color: white;"> </td>
    <td class="corps" style="background-color:#007bff; color: white;" colspan="3">Supervisory Workplace Visits / Inspections</td>
    <td class="corps" style="background-color:#007bff; color: white;" colspan="3">Senior Management Workplace Visits</td>
    <td class="corps" style="background-color:#007bff; color: white;" colspan="3">Scheduled Training </td> 
    <td class="corps" style="background-color:#007bff; color: white;" colspan="3">Planned Task Observations</td> 
    <td class="corps"  style="background-color:#007bff; color: white; " colspan="3">Scheduled Meetings Attended & Conducted</td>
    <td class="corps"  style="background-color:#007bff; color: white;" colspan="3">Hazard & Risk Management</td> 
    <td class="corps"  style="background-color:#007bff; color: white;" colspan="3">Hazards Reported</td> 
    <td class="corps"   style="background-color:#007bff; color: white;" colspan="3">Caught In the Act/ VFL</td> 
    <td class="corps"  style="background-color:#007bff; color: white;" colspan="3">Critical Control Monitoring</td> 
    <td class="corps"  style="background-color:#007bff; color: white;" colspan="3">Corrective Action Closure</td> 
    
</tr>
<tr ><td class="corps" ></td>
     <td class="corps" >Taret</td>
     <td class="corps" >Actuel</td>
     <td class="corps" >%</td>

     <td class="corps" >Taret</td>
     <td class="corps" >Actuel</td>
     <td class="corps" >%</td>
 
 <td class="corps" >Taret</td>
     <td class="corps" >Actuel</td>
     <td class="corps" >%</td>

     <td class="corps" >Taret</td>
     <td class="corps" >Actuel</td>
     <td class="corps" >%</td>


    <td class="corps" >Taret</td>
     <td class="corps" >Actuel</td>
     <td class="corps" >%</td>

     <td class="corps" >Taret</td>
     <td class="corps" >Actuel</td>
     <td class="corps" >%</td>

    <td class="corps" >Taret</td>
     <td class="corps" >Actuel</td>
     <td class="corps" >%</td>

     <td class="corps" >Taret</td>
     <td class="corps" >Actuel</td>
     <td class="corps" >%</td>
<td class="corps" >Taret</td>
     <td class="corps" >Actuel</td>
     <td class="corps" >%</td>

     <td class="corps" >Taret</td>
     <td class="corps" >Actuel</td>
     <td class="corps" >%</td>


     
    

<tr > <td class="corps" >janv-23</td>

     
     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-01-01' AND  '2023-01-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>

</tr>



<tr> 
    <td class="corps">fevr-23</td>


<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-02-01' AND  '2023-02-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td> 
    

</tr>


<tr> <td class="corps">mars-23</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-03-01' AND  '2023-03-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
       
</tr>

<tr> <td class="corps">avr-23</td>
   
   <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>

        
</tr>



<tr> <td class="corps">mai-23</td> 
     
     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31' ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-04-01' AND  '2023-04-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-05-01' AND  '2023-05-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>          
</tr>

<tr> <td class="corps">juin-23</td> 
       <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30' ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-06-01' AND  '2023-06-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
   
</tr>

<tr> <td class="corps">juil-23</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31' ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-07-01' AND  '2023-07-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
           
</tr>

<tr> <td class="corps">aout-23</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30' ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30' ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30' ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-08-01' AND  '2023-08-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
        
</tr>

<tr> <td class="corps">sept-23</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);
            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-09-01' AND  '2023-09-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
        
</tr>

<tr> <td class="corps">oct-23</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31' ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-10-01' AND  '2023-10-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
        
</tr>

<tr> <td class="corps">nov-23</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30' ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-11-01' AND  '2023-11-30'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
        
</tr>

<tr> <td class="corps">dec-23</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(supe) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(super) AS somme, SUM(supe) as sup from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(senior) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31' ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(seniorr) AS somme, SUM(senior) as sup from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>


    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trai) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(trair) AS somme, SUM(trai) as sup from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(task) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(taskk) AS somme, SUM(task) as sup from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
    <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meet) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(meett) AS somme, SUM(meet) as sup from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(risk) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(riskk) AS somme, SUM(risk) as sup from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(repor) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(reporr) AS somme, SUM(repor) as sup from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
            $sql = "SELECT *, SUM(act) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(acte) AS somme, SUM(act) as sup from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(crit) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(critt) AS somme, SUM(crit) as sup from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
<td class="corps">
        <?php  
          $sql = "SELECT *, SUM(clo) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>
                                          
     </td> 

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->somme);

            }
            ?>   
                                          
     </td>

     <td class="corps">
        <?php  
          $sql = "SELECT *, SUM(cloo) AS somme, SUM(clo) as sup from mts where dat BETWEEN '2023-12-01' AND  '2023-12-31'  ";
            $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->sup > 0){ 


                                       echo htmlentities( round( (( $result->somme)*100) / ($result->sup) ) 
                                   ) ; ?>%<?php
                                     }else {
                                        echo "0"; 
                                     }}  ?></td>
         
       
</tr>

<tr> <td class="corps">annee</td> 
      <td class="corps"></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(supe) AS SOMME from mts    ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

    
</tr>



</table>

