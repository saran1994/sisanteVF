<style type="text/css">
                    .tablee, .cap, .th, .td {

border: 2px solid skyblue;
  border-collapse: collapse;

}
.cap, .th, .td {

padding: 8px;

}

.cap {

background-color: lightgrey;

}

.th {

background-color: lightgrey;

}

.td {

background-color: white;

}
                </style>
                <table class="tablee" style="float: left;">
  
  <th class="cap" colspan="2" style="text-align: center;">Departement</th>
  
  <colgroup>

<col style="width:200px">

<col>

<col>

</colgroup>

<tr> <th class="th">Dept</th>
     <th class="th">Nbre</th> 
     
 </tr>

<tr> <td class="td">Mining</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Mining' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">Metallurgy</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Metallurgy' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Engineering</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Engineering' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Procurement</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Procurement' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Security</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Security' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Community</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Community' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Environment</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Environment' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Clinic</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Clinic' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Finance</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Finance' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Administration</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Administration' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Laboratory</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Laboratory' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Human Resources</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Human Resources' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Exploration</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  department = 'Exploration' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td" style="background-color: lightgrey;"><b> total </b></td> 
     <td class="td"><b> <?php
    

    $sql = "SELECT idvlf from vlf  ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></b></td> 
     
</tr>

</table>



<style type="text/css">
                    .tablee, .cap, .th, .td {

border: 2px solid skyblue;
  border-collapse: collapse;

}
.cap, .th, .td {

padding: 8px;

}

.cap {

background-color: lightgrey;

}

.th {

background-color: lightgrey;

}

.td {

background-color: white;

}
                </style>
                <table class="tablee" style="float: left;">
  
  <th class="cap" colspan="2" style="text-align: center;">Domaine</th>
  
  <colgroup>

<col style="width:200px">

<col>

<col>

</colgroup>

<tr> <th class="th">Dept</th>
     <th class="th">Nbre</th> 
     
 </tr>

<tr> <td class="td">Attitude</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  domaine = 'Attitude' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Environnement</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  domaine = 'Environnement' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Equipement</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  domaine = 'Equipement' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Material</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  domaine = 'Material' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Housekeeping</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  domaine = 'Housekeeping' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">People</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  domaine = 'People' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Ppe</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  domaine = 'Ppe' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Process</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  domaine = 'Process' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Sop</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  domaine = 'Sop' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Tools</td> 
     <td class="td"><?php
    

    $sql = "SELECT idvlf from vlf where  domaine = 'Tools' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td" > null </td> 
     <td class="td">0</td> 
     
</tr>
<tr> <td class="td" > null </td> 
     <td class="td">0</td> 
     
</tr>
<tr> <td class="td" > null </td> 
     <td class="td">0</td> 
     
</tr>

<tr> <td class="td" style="background-color: lightgrey;"><b> total </b></td> 
     <td class="td"><b> <?php
    

    $sql = "SELECT idvlf from vlf  ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></b></td> 
     
</tr>

</table>


