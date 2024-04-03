


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
UNSAFE CONDITIONA</th>
     <th class="th">Nbre</th> 
     
 </tr>

<tr> <td class="td">Inadequate guards</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  insafe = 'Inadequate guards'";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>


<tr> <td class="td">Poor visibity</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  insafe = 'Poor visibity' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Defetive tools or equipment</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  insafe ='Defetive tools or equipment'";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Dangerous work arragement</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  insafe = 'Dangerous work arragement' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Foreigne body</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  insafe = 'Foreigne body' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>


<tr> <td class="td">Poor ventilation</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  insafe = 'Poor ventilation' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Inadequate protective equipment</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  insafe = 'Inadequate protective equipment' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Poor housekeeping</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  insafe = 'Poor housekeeping' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>


<tr> <td class="td">Tripping/sliping hazards</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  insafe ='Tripping/sliping hazards'";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>




<tr> <td class="td">#NOM?</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  insafe = '#NOM?' ";
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

