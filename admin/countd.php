
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

<tr> <th class="th">Departement</th>
     <th class="th">Nbre</th> 
     
 </tr>

<tr> <td class="td">Mining</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Mining' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">Metallurgy</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Metallurgy' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Engineering</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Engineering' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Procurement</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Procurement' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Security</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Security' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Community</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Community' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Environment</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Environment' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Clinic</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Clinic' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Finance</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Finance' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Administration</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Administration' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Laboratory</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Laboratory' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Human Resources</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Human Resources' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td">Exploration</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  department = 'Exploration' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></td> 
     
</tr>

<tr> <td class="td" style="background-color: lightgrey;"><b> total </b></td> 
     <td class="td"><b> <?php
    

    $sql = "SELECT idrap from rapporte  ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></b></td> 
     
</tr>
