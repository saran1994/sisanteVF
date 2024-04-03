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
  
  <th class="caption" colspan="16" style="text-align: center;"><b>SAFETY STATISTICS</b></th>
  
  <colgroup>

<col style="width:100px">

<col>

<col>

</colgroup>


<tr> 
    <td class="corps" style="background-color:#007bff; color: white;">DEPARTMENT</td> 
    <td class="corps" style="background-color:#007bff; color: white;">DATE OF LAST LOST TIME INJURY</td> 
    <td class="corps" colspan="2" style="background-color:#007bff; color: white; ">EMPLOYEE HOURS</td>
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">LOST TIME INJURIES</td> 
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">LOLOST TIME INJURY HOURS LOST</td> 
    <td class="corps"   style="background-color:#007bff; color: white;">2022
LTIFR </td> 
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">Medical treatment Injuries </td> 
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">FIRST AID CASES</td> 
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">INJURY COSTS (US$)</td>
    <td class="corps" style="background-color:#007bff; color: white;">2022
MTIFR</td> 
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">All INJURIES YTD RATE (No First Aid)</td> 
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">VEHICLE & MACHINE ACCIDENTS</td>
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">VEHICLE & MACHINE ACCIDENTS</td>
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">OTHER ACCIDENT/ INCIDENTS / NEAR MISSES</td>
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">OTHER ACCIDENT/ INCIDENT / NEAR MISS COSTS (US$)</td>
    <td class="corps" colspan="2" style="background-color:#007bff; color: white;">FATALITY</td>

</tr>
<tr ><td class="corps" colspan="2"></td>
    <td class="corps" >M</td>
     <td class="corps" >P</td>

     <td class="corps" >M</td>
     <td class="corps" >P</td>
     <td class="corps" >M</td>
     <td class="corps">P</td> 
     <td class="corps" rowspan="1"></td>
     <td class="corps">M</td> 
     <td class="corps">P</td>
     <td class="corps" >M</td>
     <td class="corps" >P</td>
     <td class="corps">M</td> 
     <td class="corps">P</td>
     
     <td class="corps" rowspan="2"></td> 
     <td class="corps" rowspan="2"></td>
     
<tr > <td class="corps" >Mining</td>

     
     <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Mining'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

                                     <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Mining' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Mining' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>



<tr> 
    <td class="corps">Metallurgy</td> 
    <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Metallurgy'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 

     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '$from_date' AND  '$to_date'   ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '2023-01-01' AND  '2023-06-30'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>


                         <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                                     <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Mining' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Metallurgy' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

<tr> <td class="corps">Engineering</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Engineering'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

        <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Engineering' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Engineering' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                                 </tr>


<tr> <td class="corps">Procurement</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Procurement'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
       <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Procurement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Procurement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                                 </tr>

<tr> <td class="corps">Security</td>
<td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Security'     ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 

        <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '$from_date' AND  '$to_date'   ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

     <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Security' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>

<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Security' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                                 </tr>

<tr> <td class="corps">Community</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Community'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 

     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Community' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
            <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Community' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Community' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                                 </tr>

<tr> <td class="corps">Environnement</td>

<td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Environnement'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

    <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Environnement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
     
<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Environnement' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                                 </tr>

<tr> <td class="corps">Clinic</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Clinic'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

    <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
   <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
          <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
   <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Clinic' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Clinic' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                                 </tr>

<tr> <td class="corps">Finance</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Finance'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                     
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 

    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
            <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Finance' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Finance' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                                 </tr>

<tr> <td class="corps">Administration</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Administration'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

    <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
<td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Administration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Administration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                                 </tr>

<tr> <td class="corps">Laboratory</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Laboratory'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 



     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

<td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Laboratory' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Laboratory' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Laboratory' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

<tr> <td class="corps">Human Resources</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Human Resources'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

  <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
 <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Human Resources' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Human Resources' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td></tr>

<tr> <td class="corps">Exploration</td> 
     <td class="corps">
        <?php  
          $sql = "SELECT * from hours  WHERE department='Exploration'   ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->dat);

            }
            ?>
                                          
     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
       <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME, SUM(emp) AS SOM from hours where  department = 'Exploration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ); 
                                        
                                        foreach($results as $result)
                                        {  ?>                                       
                                       <?php if($result->SOMME > 0){ 

                                       echo htmlentities( number_format( (( $result->SOMME)*1000000) / ($result->SOM),2 ) 
                                   );
                                     }else {
                                        echo "0.00"; 
                                     }}  ?></td>
<td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(medical) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(first) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
                    <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '$from_date' AND  '$to_date'  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(cost) AS SOMME from hours where  department = 'Exploration' AND dat BETWEEN '2023-01-01' AND  '2023-05-31' ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td></tr>

<tr> <td class="corps">sub total</td> 
      <td class="corps"></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours    ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>

    <td class="corps"><?php  
          $sql = "SELECT *,SUM(emp) AS SOMME from hours ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours   ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(tim) AS SOMME from hours  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(lost) AS SOMME from hours  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
        <td class="corps"><?php  
          $sql = "SELECT *,SUM(ltif) AS SOMME from hours  ";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);   
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

</table>
