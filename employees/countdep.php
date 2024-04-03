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
  
  <th class="caption" colspan="14" style="text-align: center;"><b> VFL RECAP <span style="color: red"> <?php echo $type; ?> </span>CASES YTD</b></th>
  
  <colgroup>

<col style="width:100px">

<col>

<col>

</colgroup>

<tr> <th class="entete" rowspan="2">Domaine</th> 
     <th class="entete" colspan="13">Departement</th> 
      
</tr>

<tr> 
    <td class="corps" style="background-color:#007bff; color: white;">Mining</td> 
    <td class="corps" style="background-color:#007bff; color: white;">Metal</td> 
    <td class="corps" style="background-color:#007bff; color: white; ">Engin</td>
    <td class="corps" style="background-color:#007bff; color: white;">Proc</td> 
    <td class="corps" style="background-color:#007bff; color: white;">Secur</td> 
    <td class="corps" style="background-color:#007bff; color: white;">Com</td> 
    <td class="corps" style="background-color:#007bff; color: white;">Envir</td> 
    <td class="corps" style="background-color:#007bff; color: white;">Clin</td> 
    <td class="corps" style="background-color:#007bff; color: white;">Fin</td>
    <td class="corps" style="background-color:#007bff; color: white;">Admin</td> 
    <td class="corps" style="background-color:#007bff; color: white;">Labo</td> 
    <td class="corps" style="background-color:#007bff; color: white;">RH</td>
    <td class="corps" style="background-color:#007bff; color: white;">Explor</td>

</tr>

<tr> <td class="corps">Attitude</td>
     <td class="corps">
        <?php  
          $sql = "SELECT *,SUM(valeur) as SOMME from vlf  WHERE department='Mining' AND domaine='Attitude' AND type='$type'  AND CreationDate BETWEEN '$from_date' AND  '$to_date' ";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);    
            foreach($results as $result)
            {  
            echo htmlentities($result->SOMME);
            }
            ?>
                                          
     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Metallurgy' AND domaine = 'Attitude' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Engineering' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Procurement' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Security' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Community' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Environnement' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date'  AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Clinic' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Finance' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Administration' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Laboratory' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Human Resources' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Exploration' AND domaine = 'Attitude' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>



<tr> 
    <td class="corps">Envir</td> 
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Mining' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Metallurgy' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Engineering' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Procurement' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Security' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?>
                                         
                                     </td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Community' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Environnement' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Clinic' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Finance' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Administration' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Laboratory' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Human Resources' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Exploration' AND domaine = 'Environnement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

<tr> <td class="corps">Equip</td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Mining' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Metallurgy' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
       <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Engineering' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Procurement' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Security' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Community' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Environnement' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Clinic' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Finance' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Administration' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Laboratory' AND domaine = 'Equipement'  AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Human Resources' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Exploration' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>


<tr> <td class="corps">Material</td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Mining' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Metallurgy' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
       <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Engineering' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Procurement' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Security' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date' ";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Community' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Environnement' AND domaine = 'Equipement' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Clinic' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Finance' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Administration' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Laboratory' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Human Resources' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT * ,SUM(valeur) AS SOMME from vlf where  department = 'Exploration' AND domaine = 'Material' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

<tr> <td class="corps">Housek</td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Mining' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Metallurgy' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
       <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Engineering' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Procurement' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Security' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Community' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Environnement' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Clinic' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Finance' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Administration' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Laboratory' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Human Resources' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Exploration' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

<tr> <td class="corps">People</td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Mining' AND domaine = 'People' AND type='$type' AND  CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Metallurgy' AND domaine = 'People'  AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
       <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Engineering' AND domaine = 'People' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Procurement' AND domaine = 'Housekeeping' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Security' AND domaine = 'People' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Community' AND domaine = 'People' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Environnement' AND domaine = 'People' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Clinic' AND domaine = 'People' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Finance' AND domaine = 'People' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Administration' AND domaine = 'People' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Laboratory' AND domaine = 'People' AND type='$type' AND  CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Human Resources' AND domaine = 'People' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Exploration' AND domaine = 'People' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

<tr> <td class="corps">Ppe</td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Mining' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Metallurgy' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
       <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Engineering' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Procurement' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Security' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Community' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Environnement' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Clinic' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Finance' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Administration' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Laboratory' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Human Resources' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Exploration' AND domaine = 'Ppe' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

<tr> <td class="corps">Process</td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Mining' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Metallurgy' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
       <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Engineering' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Procurement' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Security' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Community' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Environnement' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Clinic' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Finance' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Administration' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Laboratory' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Human Resources' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Exploration' AND domaine = 'Process' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

<tr> <td class="corps">Sop</td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Mining' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Metallurgy' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
       <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Engineering' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Procurement' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Security' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Community' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Environnement' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Clinic' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Finance' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Administration' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Laboratory' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Human Resources' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Exploration' AND domaine = 'Sop' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

<tr> <td class="corps">Tools</td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Mining' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Metallurgy' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
       <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Engineering' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Procurement' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                                        $query = $dbh -> prepare($sql);
                                        
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       
                                        
                                        foreach($results as $result)
                                        {  ?>                                    
                                       <?php echo htmlentities($result->valeur);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Security' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Community' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Environnement' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps">
         <?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Clinic' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?>
     </td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Finance' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Administration' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Laboratory' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
    <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Human Resources' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td> 
     <td class="corps"><?php  
          $sql = "SELECT *,SUM(valeur) AS SOMME from vlf where  department = 'Exploration' AND domaine = 'Tools' AND type='$type' AND CreationDate BETWEEN '$from_date' AND  '$to_date'";
                $query = $dbh -> prepare($sql);            
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                foreach($results as $result)
                {  ?>              
                    <?php echo htmlentities($result->SOMME);
                                     }?></td>
</tr>

</table>

