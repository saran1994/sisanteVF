<?php
/* exporter vers excel */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EmployeeLeave";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}                
$query = "SELECT * FROM admin ";
$result = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
$records = array();
while( $rows = mysqli_fetch_assoc($result) ) {
  $records[] = $rows;
} 
if(isset($_POST["export_csv_data"])) {  
  $csv_file = "exporter_".date('Ymd') . ".csv";      
  header("Content-Type: text/csv");
  header("Content-Disposition: attachment; filename=\"$csv_file\"");  
  $fh = fopen( 'php://output' , 'w' );
  $is_coloumn = true;
  if(!empty($records)) {
    foreach($records as $record) {
    if($is_coloumn) {         
     // fputcsv($fh, array_keys($record));
      $is_coloumn = false;
    }   
    fputcsv($fh, array_values($record));
    }
     fclose($fh);
  }
  exit;  
}


?>
 <!-- exporter vers excel -->
    <div class="btn-group pull-right">  
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">         
        <button type="submit" id="export_csv_data" name='export_csv_data' value="Export to CSV" class="btn btn-info" >Exporter vers excel</button>
      </form>
    

    </div>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Simulateur bulletin Bac 2021</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
//DÃ©clarer et initialiser les listes des coefficient et matiÃ¨re
$option=['Option LCA','Option 2','Option 3'];
$coefOption=[3,1,1];
$matiere=['FranÃ§ais Ã©crit','FranÃ§ais oral','Philosophie','Grand oral','SpÃ©cialitÃ© 1','SpÃ©cialitÃ© 2','Histoire-GÃ©ographie','Langue vivante A','Langue vivante B','Enseignement scientifique','EPS','SpÃ©cialitÃ© 1re','Bulletins moyens'];
 $coeff=[5,5,8,10,16,16,5,5,5,5,5,5,10]; 
 //initialiser la variable s qui reprÃ©sentera la somme   
$s=0;
//Calculer la somme des notes avec les pondÃ©rations
if(isset($_POST['note']))
{
  for ($i=0; $i <=12 ; $i++)
  { 
    $s = $s + $coeff[$i]* $_POST['note'][$i];
  }
  $t=0;
}
?>    
</head>
<body>
<div class="container-fluid">
  <h1>Simulateur bulletin Bac 2021</h1>
  <div class="row">
    <div class="col-md-9 bg-info">
<!--***************************************************************************************************************
//formulaire d'envois des notes      -->
<form action="#" method="POST">
  <table  class="table table-bordered table-responsive">
  <thead>
    <tr>
    <th>MatiÃ¨re</th>
    <th>Note</th>
    <th>Coefficient</th>
    <th>total</th>
    </tr>
   </thead>
   <theed> 
  <?php
// boucle d'affichage des lignes des matiÃ¨res principales        
  for ($key=0; $key <= 12; $key++) 
  { 
     echo
    '<tr>'.
    '<td>'.$matiere[$key].'</td>'.
    '<td><input type="text" class="form-control" value="'.((isset($_POST['note']))? $_POST['note'][$key]:'').'" size="5" name="note[]"  required></td>'.
    '<td>'.$coeff[$key].'</td>'.
    '<td>'.(isset($_POST['note'])? $_POST['note'][$key]*$coeff[$key]:'').'</td></tr>';
  }
  ?>
<!------------------Ligne total sans options--------------------------------------->
  <tr>
  <td>Total sans options</td>
  <td ></td>
  <td></td>
  <td ><?php    echo $s; ?></td>
  </tr>
 <!------------------les lignes des options---------------------------------------> 
<?php
  for ($key=0; $key <= 2; $key++)
  {
      if ( isset($_POST['option'][$key]))
      {
          if($_POST['option'][$key] <=10 )
        {
           $NoteOption1 =0 ;
           $NoteOption=$_POST['option'][$key];
        }
        else
        {
           $NoteOption1 =$_POST['option'][$key]-10 ;
           $NoteOption=$_POST['option'][$key];
        }
      }
      echo
      '<tr>'.
      '<td>'.$option[$key].'</td>'.
      '<td><input type="text" class="form-control" value="'.$NoteOption.'" size="5" name="option[]"  ></td>'.
      '<td>'.$coefOption[$key].'</td>'.
      '<td>'.$NoteOption1*$coefOption[$key].'</td></tr>';
      // la somme des points des options selon les rÃ©gles du calculs en vigueurs 
      $t=$t+$NoteOption1*$coefOption[$key];
}
?>
<tr>
    <td >Grand total</td>
    <td ><strong>
    <?php 
    $total=(int) $s+$t;  echo $total.'<br>';
    if($total<1000) echo 'Non admis.e';
    elseif($total<=1200 && $total >=1000) echo 'mention Passable';
    elseif($total<=1400 && $total >=1200) echo 'mention Assez-bien';
    elseif($total<=1600 && $total >=1400) echo 'mention Bien';
    elseif($total<=1800 && $total >=1600) echo 'mention TrÃ¨s Bien';
    elseif($total >=1800) echo 'mention Honorable';
    ?>
    </strong></td>
  <td ><strong><input type="submit" name="Envoyer" value="Calculer" class="btn btn-primary"></strong></td>
</tr>
</theed> 
</table>
    </div>
    <div class="ol-md-3 bg-info">
    </div>
  </div>
</div>

</body>
</html>



<html>
    <head>
        <script>
            function random_function()
            {
                var a=document.getElementById("department").value;
                if(a==="Mining")
                {
var arr=["MTS","PW","Geo-drill","Dewatering","Grade Control","SFTP","SMS","Rom-pad","Pit"];
                }
                else if(a==="Metallurgy")
                {
                    var arr=["Plant","TSF"," Slam Dan"];
                }else if(a==="Engineering")
                {
                    var arr=["Work-shop","Garage","Outside maintenace"];
                }else if(a==="Procurement")
                {
                    var arr=["Scrap yard"];
                }else if(a==="Exploration")
                {
                    var arr=["CAPITAL"];
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("section").innerHTML=string;
            }
        </script>
    </head>
    <body>
        <select id="department" onchange="random_function()">
            <option>select option</option>
            <option>Mining</option>
            <option>Metallurgy</option>
            <option>Engineering</option>
            <option>Procurement</option>
            <option>Security</option>
            <option>Community</option>
            <option>Environment</option>
            <option>Clinic</option>
            <option>Finance</option>
            <option>Administration</option>
            <option>Laboratory</option>
            <option>Human Resources</option>
            <option>Exploration</option>
        </select>
        <div>
           <select id="section" onchange="random_function1()">
        </div>
    </body>
</html>





<!--
<br><br><br><br><br><br>

    <form class="dropdown-group">
      <select id="" size="1">
        <option value="" selected="selected">-- Select Country --</option>
      </select>

      <select id="State" size="1">
        <option value="" selected="selected">-- Select State --</option>
      </select>

      <select id="City" size="1">
        <option value="" selected="selected">-- Select City --</option>
      </select>

<input type="hidden" name="zip" id="Zip">
      
    </form>

<script type="text/javascript">
  // Todo: Create a function that loads the country, state, city, zip

const countryStateInfo = {
  USA: {
    California: {
      "Los Angeles": ["90001", "90002", "90003", "90004"],
      "San Diego": ["92093", "92101"],
    },
    Texas: {
      Dallas: ["75201", "75202"],
      Austin: ["73301", "73344"],
    },
  },
  Germany: {
    Bavaria: {
      Munich: ["80331", "80333", "80335", "80336"],
      Nuremberg: ["90402", "90403", "90404", "90405"],
    },
    
  },
};

window.onload = function () {
  //todo: Get all input html elements from the DOM

  const countrySelection = document.querySelector("#Country"),
    stateSelection = document.querySelector("#State"),
    citySelection = document.querySelector("#City"),
    zipSelection = document.querySelector("#Zip");


// todo: Disable all  Selection by setting disabled to false
  stateSelection.disabled = true; // remove all options bar first
  citySelection.disabled = true; // remove all options bar first
  
   
   stateSelection.length = 1;
   citySelection.length = 1; // remove all options bar first
   

for (let country in countryStateInfo) {
    countrySelection.options[countrySelection.options.length] = new Option(
      country,
      country
    );
  }

  //todo: country Changed
  countrySelection.onchange = (e) => {
    stateSelection.disabled = false;
    // todo: Clear all options from State Selection
    stateSelection.length = 1; // remove all options bar first
    citySelection.length = 1; // remove all options bar first
   

    // if (e.target.selectedIndex < 1) return; // done

    // todo: Load states by looping over countryStateInfo
    for (let state in countryStateInfo[e.target.value]) {
      stateSelection.options[stateSelection.options.length] = new Option(
        state,
        state
      );
    }
  };

  //todo: State Changed
  stateSelection.onchange = (e) => {
    citySelection.disabled = false;

    citySelection.length = 1; // remove all options bar first
 
    for (let city in countryStateInfo[countrySelection.value][e.target.value]) {
      citySelection.options[citySelection.options.length] = new Option(
        city,
        city
      );
    }
  };


   };

  
</script>

    