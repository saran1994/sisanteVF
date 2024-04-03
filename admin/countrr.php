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

<tr> <th class="th">RECURENCE  RATE</th>
     <th class="th">Nbre</th> 
     
 </tr>

<tr> <td class="td">Rare</td> 
     <td class="td"><?php
    

    $sql = "SELECT * from rapporte where  rate = 'Rare' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>



<tr> <td class="td">occasional
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  rate = 'occasional' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>


<tr> <td class="td">frequent
</td> 
     <td class="td"><?php
    
$sql = "SELECT idrap from rapporte where  rate = 'frequent' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">#NOM?
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  rate = '#NOM?' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>



<tr> <td class="td" style="background-color: lightgrey;"><b> Total </b></td> 
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


