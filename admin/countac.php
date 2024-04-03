

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

<tr> <th class="th"> 
UNSAFE ACT</th>
     <th class="th">Nbre</th> 
     
 </tr>

 
                                
<tr> <td class="td">Operating without authority</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'Operating without authority' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>


<tr> <td class="td">Stationery equipment</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'Failure to warn/secure' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Operating at unsafe speed</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'Operating at unsafe speed' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">using defective equipment</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'using defective equipment' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Unsafe use of equipment</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'Unsafe use of equipment' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>


<tr> <td class="td">Improper position</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'Improper position' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Unsafe loading/placing</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'Unsafe loading/placing' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Animals /Insects</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'Horseplay/Teaching' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>


<tr> <td class="td">Fire/Explosion</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'Alcohol/Drugs' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>


<tr> <td class="td">Lifting or carrying</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'Lifting or carrying' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">failure to lock out</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'failure to lock out' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>


<tr> <td class="td">failure to use protective equipment</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'failure to use protective equipment' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Incorrect use of tools/equipment</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  act = 'Incorrect use of tools/equipment' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Other</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where act = 'Other'  ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
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

</table>


