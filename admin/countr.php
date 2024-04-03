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

<tr> <th class="th">PERSONAL FACTORS</th>
     <th class="th">Nbre</th> 
     
 </tr>

<tr> <td class="td">Lack of knowledge/skills</td> 
     <td class="td"><?php
    

    $sql = "SELECT * from rapporte where  factor = 'Lack of knowledge/skills' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>



<tr> <td class="td">Improper motivation/attitude
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  factor = 'Improper motivation/attitude' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>


<tr> <td class="td">Tacking shortcut
</td> 
     <td class="td"><?php
    
$sql = "SELECT idrap from rapporte where  factor = 'Tacking shortcut' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">Alcohol/drugs abuse
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  factor = 'Alcohol/drugs abuse' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>


<tr> <td class="td">failure to comply with rules/standart/procedures
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  factor = 'failure to comply with rules/standart/procedures' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 


     
</tr>

<tr> <td class="td">Other
</td> 
     <td class="td"><?php
    

    $sql = "SELECT idrap from rapporte where  factor = 'Other' ";
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
    

    $sql = "SELECT idrap from rapporte where  factor = '#NOM?' ";
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

