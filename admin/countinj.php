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
  
  
  <colgroup>

<col style="width:200px">

<col>

<col>

</colgroup>

<tr> <th class="th">INCIDENT TYPE</th>
     <th class="th">Nbre</th> 
     
 </tr>

<tr> <td class="td">Vehicle Accident</td> 
     <td class="td"><?php
    

    $sql = "SELECT * from injur where  typee = 'Vehicle Accident' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>



<tr> <td class="td">Damage to property/equipment
</td> 
     <td class="td"><?php
    

    $sql = "SELECT * from injur where  typee = 'Damage to property/equipment' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>


<tr> <td class="td">Production delay
</td> 
     <td class="td"><?php
    
$sql = "SELECT idinjur from injur where  typee = 'Production delay' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">waste
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'waste' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>


<tr> <td class="td">fire
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'fire' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">flood
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'flood' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>


<tr> <td class="td">Breakdown
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'Breakdown' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>


<tr> <td class="td">Near-miss
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'Near-miss' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">Missuse of company property
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'Missuse of company property' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>


<tr> <td class="td">fell to below
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'fell to below' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>
<tr> <td class="td">Willful damage
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'Willful damage' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">Normal wear and tear
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'Normal wear and tear' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">Hazchem spillage
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'Hazchem spillage' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">Theft
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  typee = 'Theft' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td" style="background-color: lightgrey;"><b> Total </b></td> 
     <td class="td"><b> <?php
    

    $sql = "SELECT idinjur from injur  ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?></b></td> 
     
</tr>

</table>

