<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['emplogin'])==0)
        {   
    header('location:../index.php');
    }   else    {
        if(isset($_POST['apply']))
        {

        $empid=$_SESSION['eid'];
        

        $leavetype=$_POST['leavetype']; 
        
        $info=$_POST['info'];
        
        

        $file=$_POST['file'];
        $image=$_POST['image'];
        $img=$_POST['img'];
        $actuel=$_POST['actuel'];
        $pot=$_POST['pot'];
        $lieu=$_POST['lieu'];
        $cause=$_POST['cause'];
        $learn=$_POST['learn'];
        $pays=$_POST['pays'];
        $operation=$_POST['operation'];
        $immediate=$_POST['immediate'];
        $department=$_POST['department'];
        $fromdate=$_POST['fromdate'];  
        $heure=$_POST['heure']; 
        $todate=$_POST['todate'];
        $description=$_POST['description'];  
        $status=0;
        $isread=0;

        if($fromdate > $todate){
            $error=" Veuillez saisir des informations correctes pour les dates !
 ";
            }

         

        $sql="INSERT INTO tblleaves(
        LeaveType,info,actuel,pot,file,image,img,lieu,cause,learn,pays,operation,immediate,department,ToDate,heure,FromDate,Description,Status,IsRead,empid) VALUES(:leavetype,:info,:actuel,:pot,:file,:image,:img,:lieu,:cause,:learn,:pays,:operation,:immediate,:department,:fromdate,:heure,:todate,:description,:status,:isread,:empid)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':leavetype',$leavetype,PDO::PARAM_STR);        
        $query->bindParam(':info',$info,PDO::PARAM_STR);
        $query->bindParam(':actuel',$actuel,PDO::PARAM_STR);
        $query->bindParam(':pot',$pot,PDO::PARAM_STR);
        $query->bindParam(':file',$file,PDO::PARAM_STR);
        $query->bindParam(':image',$image,PDO::PARAM_STR);
        $query->bindParam(':img',$img,PDO::PARAM_STR);
        $query->bindParam(':lieu',$lieu,PDO::PARAM_STR);
        $query->bindParam(':cause',$cause,PDO::PARAM_STR);
        $query->bindParam(':learn',$learn,PDO::PARAM_STR);
        $query->bindParam(':pays',$pays,PDO::PARAM_STR);
        $query->bindParam(':operation',$operation,PDO::PARAM_STR);
        $query->bindParam(':immediate',$immediate,PDO::PARAM_STR);
        $query->bindParam(':department',$department,PDO::PARAM_STR);
  
        $query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
        $query->bindParam(':heure',$heure,PDO::PARAM_STR);
        $query->bindParam(':todate',$todate,PDO::PARAM_STR);

        $query->bindParam(':description',$description,PDO::PARAM_STR);
        $query->bindParam(':status',$status,PDO::PARAM_STR);
        $query->bindParam(':isread',$isread,PDO::PARAM_STR);
        $query->bindParam(':empid',$empid,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();

        if($lastInsertId)
        {
             $msg="bravo!! fiche incident ajouter avec succes.";
        }   else    {
            $error="une erreur est survenu.";
        }
    }
    ?>


<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style type="text/css">
.img-avatar{
        width:45px;
        height:45px;
        object-fit:cover;
        object-position:left;
        

    }

    </style>

</head>



<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="leave.php"><img src="logo.png" alt="logo">SI-SANTE</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">

                            <li class="active">
                                <a href="leave.php" aria-expanded="true"><i class="ti-user"></i><span>Fiche incident
                                    </span></a>
                            </li>

                            <li class="#">
                                <a href="leave-history.php" aria-expanded="true"><i class="ti-agenda"></i><span> Gestion incident
                                    </span></a>
                            </li>


                            <li class="#">
                                <a href="liste.php" aria-expanded="true"><i class="ti-agenda"></i><span>Voir incident 
                                    </span></a>
                            </li>

                            <li class="#">
                                <a href="vlf.php" aria-expanded="true"><i class="ti-agenda"></i><span>VFL 
                                    </span></a>
                            </li>

                            <li class="#">
                                <a href="vlf-history.php" aria-expanded="true"><i class="ti-agenda"></i><span>VFL-history
                                    </span></a>
                            </li>

<li class="<?php if($page=='program') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span> Simulation</span></a>

            <ul class="collapse">
               
                <li ><a href="program.php"><i class="fa fa-check"></i> Programme de simulation</a></li>
                <li ><a href="rap.php"><i class="fa fa-check"></i> Rapport de simulation</a></li>
                <li ><a href="formul.php"><i class="fa fa-check"></i> Formulaire d'inspection</a></li>
            </ul>
            
        </li>
<li class="#">
                                <a href="medical.php" aria-expanded="true"><i class="ti-agenda"></i><span>medical 
                                    </span></a>
                            </li>
                             <li class="#">
                                <a href="aide.php" aria-expanded="true"><i class="ti-agenda"></i><span>Aide 
                                    </span></a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i>

                            </li>
                            <?php include '../includes/emp-notify.php'?>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <br>
                            <ul class="breadcrumbs pull-left">
                                
                                <li><span><h4> SI-SANTE <small> Cas de la mine de sadiola</small></h4></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                            
                            <?php include '../includes/employee-profile-section.php'?>

                    </div>
                </div>
            </div>



            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                            <?php if($error){?><div class="alert alert-danger alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($error); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            
                             </div><?php } 
                                 else if($msg){?><div class="alert alert-success alert-dismissible fade show"><strong>Info: </strong><?php echo htmlentities($msg); ?> 
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                 </div><?php }?>




                                <div class="card">
                                <form name="addemp" method="POST">


 

     




                                     <div class="card-body">
                                        <h4 class="header-title">Fiche incident </h4>
                                        <p class="text-muted font-14 mb-4">Veuillez remplir le formulaire ci-dessous.</p>

                                       
                                         <div class="form-group" style="float: left;">
                                            <label for="example-date-input" size="20px;" class="col-form-label">Pays</label>
                                            <select class="custom-select" name="pays" autocomplete="off" required>
                                                <option value="">Choisir..</option>
                                                <?php $sql = "SELECT * from countries";
                                                $query = $dbh -> prepare($sql);
                                                $query->execute();
                                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt=1;
                                                if($query->rowCount() > 0){
                                                foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->name);?>"><?php echo htmlentities($result->name);?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>


                                         <div class="form-group" style="float: right;">
                                            <label for="example-date-input" class="col-form-label">Operation</label>
                                            <select class="custom-select" name="operation" autocomplete="off" required>
                                                <option value=""> Choisir ...</option>
                                                <option value="SADIOLA">SADIOLA</option>
                                                <option value="SEMOS">SEMOS</option>
                                                <option value="BONIKORO">BONIKORO</option>
                                                <option value="AGBAWOU">AGBAWOU</option>
                                            </select>
                                        </div>
                                        <br><br><br><br><br>
                                        <div class="form-group">
                                            <label class="col-form-label"> Departement</label>
                                            <select class="custom-select" name="department" autocomplete="off" required>
                                                <option value="">Choisir..</option>
                                                <?php $sql = "SELECT DepartmentName from tbldepartments";
                                                $query = $dbh -> prepare($sql);
                                                $query->execute();
                                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt=1;
                                                if($query->rowCount() > 0){
                                                foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->DepartmentName);?>"><?php echo htmlentities($result->DepartmentName);?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Date incident</label>
                                            <input class="form-control" type="date"   id="fromdate" name="fromdate" required>
                                           
                                        </div>

                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Heure incident</label>
                                            
                                            <input class="form-control" type="time" id="heure" name="heure" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Date enreg</label>
                                            <input class="form-control" type="date"   required id="todate" name="todate">
                                        </div>


                                         <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Lieu incident</label>
                                            <input class="form-control" type="text"   id="lieu" name="lieu" required>
                                        </div>


                                         <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Categorie incident</label>
                                            <select class="custom-select" name="cause" autocomplete="off" required>
                                                <option value=""> Choisir ...</option>
                                                <option value="Health and safety">Health and safety</option>
                                                <option value="Environement">Environement</option>
                                                <option value="Community/Reputation">Community/Reputation</option>
                                                <option value="Compliance/Regulatory">Compliance/Regulatory</option>
                                                <option value="Production or financial loss or business interruption">Production or financial loss or business interruption</option>
                                                <option value="Security">Security</option>


                                                
                                            </select>
                                        </div>


                                         <div class="form-group">
                                            <label class="col-form-label"> Infos-Employees</label>
                                            <select class="custom-select" name="info" autocomplete="off" required>
                                                <option value=""> Choisir ...</option>

                                                <?php $sql = "SELECT * from agent where status=1 ";
                                                    $query = $dbh -> prepare($sql);
                                                    $query->execute();
                                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                    
                                                    if($query->rowCount() > 0) {
                                                        foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->idagent);?> -
                                                <?php echo htmlentities($result->FirstName." ".$result->LastName);?> -

                                                

                                                <?php echo htmlentities($result->EmailId." ".$result->Phonenumber);?>

                                                ">

                                              <?php echo htmlentities($result->idagent);?>
                                                    

                                                </option>
                                                <?php }
                                            } ?>
                                            </select>
                                        </div>
<!--
                                        <div class="form-group">
                                            <label class="col-form-label"> Type incident</label>
                                            <select class="custom-select" name="leavetype" autocomplete="off">
                                                <option value=""> choisir ...</option>

                                                <?php $sql = "SELECT LeaveType from tblleavetype";
                                                    $query = $dbh -> prepare($sql);
                                                    $query->execute();
                                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt=1;
                                                    if($query->rowCount() > 0) {
                                                        foreach($results as $result)
                                                {   ?>

                                                <option value="<?php echo htmlentities($result->LeaveType);?>"><?php echo htmlentities($result->LeaveType);?></option>
                                                <?php }
                                            } ?>
                                            </select>
                                        </div>
                                        
-->


                                        

                                       <div class="form-group">
                                            <label class="col-form-label"> Type incident </label>
   <select id="leavetype" class="custom-select" name="leavetype" required>
    <option>Choisir...</option>
    </select>
    
    <label class="col-form-label"> Actuel Impact </label>
    <select id="actuel" name="actuel" class="custom-select" required>
        <option value="" selected="selected">Choisir...</option>
      </select>

    <label class="col-form-label"> Potentiel Impact </label>
    <select id="pot" name="pot" class="custom-select" required>
        <option value="" selected="selected">Choisir...</option>
      </select>

    </select>   

                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Descriptions</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="400" id="example-text-input" rows="5" required></textarea>
                                        </div>

                                        

<div >
                                       

                                         <div class="form-group " >
            
<!DOCTYPE html>
<html>
 <head>
  <title>si-sante</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 
 <body>
 

<h6 align="left"><small> Veuillez choisir au minimum une image </small></h6><br>
  <div  style="width:50px;">
   
    <div ><input type="file"  accept="image/*" name="file" id="file"  onchange="loadFile(event)"   style="display: none; " align="right" required="required" ><button class="btn btn-sm btn-primary" type="button" style="" onclick="document.getElementById('file').click()">Choisir image 1</button>
         <br><br>
       <input type="file"  accept="image/*" name="image" id="image"  onchange="lireFile(event)" style="display: none;" >
   <button class="btn btn-sm btn-primary" style="position: relative;" type="button" onclick="document.getElementById('image').click()">Choisir image 2</button>

   <br><br>
       <input type="file"  accept="image/*" name="img" id="img"  onchange="retourFile(event)" style="display: none;" >
   <button class="btn btn-sm btn-primary" style="float:left;" type="button" onclick="document.getElementById('img').click()">Choisir image 3</button>
   
   </div>
 <br><br> <br>
<p style="border:1px solid #000; height:180px; width:520px; padding:25px; float:left; ">
    <img id="output" width="100" />    <img id="sortir" width="100" /> <img id="retour" width="100" /></p>
<p style="color: white;">c</p>  



<script>
var loadFile = function(event) {
    var file = document.getElementById('output');
    file.src = URL.createObjectURL(event.target.files[0]);
};


var lireFile = function(event) {
    var image = document.getElementById('sortir');
    image.src = URL.createObjectURL(event.target.files[0]);
};

var retourFile = function(event) {
    var img = document.getElementById('retour');
    img.src = URL.createObjectURL(event.target.files[0]);
};
</script>
   <br />
   <span id="uploaded_image"> </span>
    <span id="down_image"> </span>
    <span id="retour_image"> </span>
  </div>






  


 </body>
</html>
<script type="text/javascript">
 // Todo: Create a function that loads the country, state, city, zip

const countryStateInfo = {
  Mineur: {
    Faible: {
      "Faible": ["92093", "92101"], 
      "Mineur": ["90001", "90002", "90003", "90004"],
      //"Majeur": ["92093", "92101"],
      //"Moderer": ["92093", "92101"],
      //"Elever": ["92093", "92101"],
    },
    Mineur: {
      "Faible": ["92093", "92101"], 
      "Mineur": ["90001", "90002", "90003", "90004"],
      //"Majeur": ["92093", "92101"],
      //"Moderer": ["92093", "92101"],
      //"Elever": ["92093", "92101"],
    },
  },
  Majeur: {
    Faible: {
      Moderer: ["80331", "80333", "80335", "80336"],
      Majeur: ["90402", "90403", "90404", "90405"],
      Elever: ["90402", "90403", "90404", "90405"],
    },

    Mineur: {
       Moderer: ["80331", "80333", "80335", "80336"],
      Majeur: ["90402", "90403", "90404", "90405"],
      Elever: ["90402", "90403", "90404", "90405"],
    },

    Moderer: {
      Moderer: ["80331", "80333", "80335", "80336"],
      Majeur: ["90402", "90403", "90404", "90405"],
      Elever: ["90402", "90403", "90404", "90405"],
    },

    Majeur: {
       Moderer: ["80331", "80333", "80335", "80336"],
      Majeur: ["90402", "90403", "90404", "90405"],
      Elever: ["90402", "90403", "90404", "90405"],
    },

    Elever: {
       Moderer: ["80331", "80333", "80335", "80336"],
      Majeur: ["90402", "90403", "90404", "90405"],
      Elever: ["90402", "90403", "90404", "90405"],
    },

    

    
    
  },
};

window.onload = function () {
  //todo: Get all input html elements from the DOM

  const countrySelection = document.querySelector("#leavetype"),
    stateSelection = document.querySelector("#actuel"),
    citySelection = document.querySelector("#pot"),
    zipSelection = document.querySelector("#Zip");


// todo: Disable all  Selection by setting disabled to false
  stateSelection.disabled = true; // remove all options bar first
  citySelection.disabled = true; // remove all options bar first
  
   
   stateSelection.length = 1;
   citySelection.length = 1; // remove all options bar first
   

for (let leavetype in countryStateInfo) {
    countrySelection.options[countrySelection.options.length] = new Option(
      leavetype,
      leavetype
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
    for (let actuel in countryStateInfo[e.target.value]) {
      stateSelection.options[stateSelection.options.length] = new Option(
        actuel,
        actuel
      );
    }
  };

  //todo: State Changed
  stateSelection.onchange = (e) => {
    citySelection.disabled = false;

    citySelection.length = 1; // remove all options bar first
 
    for (let pot in countryStateInfo[countrySelection.value][e.target.value]) {
      citySelection.options[citySelection.options.length] = new Option(
        pot,
        pot
      );
    }
  };


   };

  
</script>



<script>

$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"uplo.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,

    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>patientez...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,

    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>patientez...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});




$(document).ready(function(){
 $(document).on('change', '#image', function(){
  var name = document.getElementById("image").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("image").files[0]);
  var f = document.getElementById("image").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("image", document.getElementById('image').files[0]);
   $.ajax({
    url:"uplo1.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,

    beforeSend:function(){
     $('#down_image').html("<label class='text-success'>Patientez...</label>");
    },   
    success:function(data)
    {
     $('#down_image').html(data);
    }
   });
  }
 });
});

$(document).ready(function(){
 $(document).on('change', '#image', function(){
  var name = document.getElementById("image").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("image").files[0]);
  var f = document.getElementById("image").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("image", document.getElementById('image').files[0]);
   $.ajax({
    url:"upload1.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,

    beforeSend:function(){
     $('#down_image').html("<label class='text-success'>Patientez...</label>");
    },   
    success:function(data)
    {
     $('#down_image').html(data);
    }
   });
  }
 });
});


$(document).ready(function(){
 $(document).on('change', '#img', function(){
  var name = document.getElementById("img").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("img").files[0]);
  var f = document.getElementById("img").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("img", document.getElementById('img').files[0]);
   $.ajax({
    url:"uplo2.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,

    beforeSend:function(){
     $('#retour_image').html("<label class='text-success'>Patientez...</label>");
    },   
    success:function(data)
    {
     $('#retour_image').html(data);
    }
   });
  }
 });
});


$(document).ready(function(){
 $(document).on('change', '#img', function(){
  var name = document.getElementById("img").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("img").files[0]);
  var f = document.getElementById("img").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("img", document.getElementById('img').files[0]);
   $.ajax({
    url:"upload2.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,

    beforeSend:function(){
     $('#retour_image').html("<label class='text-success'>Patientez...</label>");
    },   
    success:function(data)
    {
     $('#retour_image').html(data);
    }
   });
  }
 });
});
</script>

          </div>



<div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Learning</label>
                                            <textarea class="form-control" name="learn" type="text" name="learn" length="400" id="example-text-input" rows="5" required></textarea>
                                        </div>

                                        

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Actions immediate</label>
                                            <textarea class="form-control" name="immediate" type="text" name="immediate" length="400" id="example-text-input" rows="5" required></textarea>
                                        </div>

                                        
   






 



</div>                                  

          
<script type="text/javascript">
 //condition sur le calendrier, cacher une partie du clendrier 
  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("fromdate").setAttribute("max", today);

//condition 2 to date

  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("todate").setAttribute("max", today);

</script>


          <script>
    function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}

</script>


                                        <button class="btn btn-primary" name="apply" id="apply" type="submit">Enregistrer</button>
                                        
                                    </div>
                                </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <?php include '../includes/footer.php' ?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        
        
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>

<?php } ?> 