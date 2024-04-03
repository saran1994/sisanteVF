

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
JOB FACTORS</th>
     <th class="th">Nbre</th> 
     
 </tr>
                                
                                
<tr> <td class="td">Improper planning</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  jobe = 'Improper planning' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>


<tr> <td class="td">poor environmental condition</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  jobe = 'poor environmental condition' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Poor maitenance</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  jobe = 'Poor maitenance' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">poor supervision</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  jobe = 'poor supervision' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">poor quality of equipment</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  jobe = 'poor quality of equipment' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>


<tr> <td class="td">No rules standards or procedures</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  jobe = 'No rules standards or procedures' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">Other</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  jobe = 'Other' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>

<tr> <td class="td">#NOM?</td> 
     <td class="td"><?php
    

    $sql = "SELECT idinjur from injur where  jobe = '#NOM?' ";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
    $dptcount=$query->rowCount();

    echo htmlentities($dptcount);
?> </td> 
     
</tr>



<tr> <td class="td" style="background-color: lightgrey;"><b> total </b></td> 
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


