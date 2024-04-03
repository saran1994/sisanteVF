<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['emplogin'])==0)
        {   
    header('location:../index.php');
    }   else    {
        

        if(isset($_POST['update'])){
        
        $empid=$_SESSION['eid'];
        $did=intval($_GET['lid']);
        $lieu=$_POST['lieu'];
        $operation=$_POST['operation'];
        $department=$_POST['department'];
        $cause=$_POST['cause'];
        $file=$_POST['file'];
        $info=$_POST['info'];
        $pays=$_POST['pays'];
        $learn=$_POST['learn']; 
        $ToDate=$_POST['ToDate'];
        $heure=$_POST['heure'];
        $image=$_POST['image'];
        $img=$_POST['img'];

        $FromDate=$_POST['FromDate'];   
        $immediate=$_POST['immediate'];
        $Description=$_POST['Description'];
        $status=0;
        $isread=0;

        $sql="UPDATE tblleaves set lieu=:lieu,info=:info,pays=:pays,learn=:learn,immediate=:immediate,Description=:Description,ToDate=:ToDate,heure=:heure,FromDate=:FromDate,cause=:cause,operation=:operation,image=:image,img=:img,department=:department,file=:file,Status=:Status,IsRead=:IsRead,empid=:empid where id=:did";
        $query = $dbh->prepare($sql);

        $query->bindParam(':lieu',$lieu,PDO::PARAM_STR);
        $query->bindParam(':empid',$empid,PDO::PARAM_STR);
        $query->bindParam(':info',$info,PDO::PARAM_STR);
        $query->bindParam(':pays',$pays,PDO::PARAM_STR);
        $query->bindParam(':Status',$Status,PDO::PARAM_STR);
        $query->bindParam(':IsRead',$IsRead,PDO::PARAM_STR);
        $query->bindParam(':operation',$operation,PDO::PARAM_STR);
        $query->bindParam(':image',$image,PDO::PARAM_STR);
        $query->bindParam(':img',$img,PDO::PARAM_STR);
        $query->bindParam(':cause',$cause,PDO::PARAM_STR);
        $query->bindParam(':file',$file,PDO::PARAM_STR);
        $query->bindParam(':department',$department,PDO::PARAM_STR);


        $query->bindParam(':learn',$learn,PDO::PARAM_STR);
        $query->bindParam(':immediate',$immediate,PDO::PARAM_STR);
        $query->bindParam(':Description',$Description,PDO::PARAM_STR);
        $query->bindParam(':ToDate',$ToDate,PDO::PARAM_STR);
        $query->bindParam(':heure',$heure,PDO::PARAM_STR);
        $query->bindParam(':FromDate',$FromDate,PDO::PARAM_STR); 
        

        $query->bindParam(':did',$did,PDO::PARAM_STR);
        $query->execute();
        $msg="bravo !! votre fiche incident a ete re-envoyer";
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
               
                <li class="#"><a href="program.php"><i class="fa fa-check"></i> Programme de simulation</a></li>
                
                <li class=""><a href="formul.php"><i class="fa fa-check"></i> Formulaire d'inspection</a></li>
            </ul>
            
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
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            
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
                                        <p class="text-muted font-14 mb-4">visualiser la fiche</p>
                                            <?php 
                                            $did=intval($_GET['lid']);
                                            $sql = "SELECT * from tblleaves WHERE id=:did";
                                            $query = $dbh -> prepare($sql);
                                            $query->bindParam(':did',$did,PDO::PARAM_STR);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {               ?>

                                <div class="form-group" >
                                            <label for="example-date-input" class="col-form-label">Operation</label>
                                            <select class="custom-select" name="operation" autocomplete="off" required>
                                                <option value="<?php echo htmlentities($result->operation);?>"> <?php echo htmlentities($result->operation);?></option>
                                                <option value="SADIOLA">SADIOLA</option>
                                                <option value="SEMOS">SEMOS</option>
                                                <option value="BONIKORO">BONIKORO</option>
                                                <option value="AGBAWOU">AGBAWOU</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-form-label"> Departement</label>
                                            <select class="custom-select" name="department" autocomplete="off" required>
                                                <option value="<?php echo htmlentities($result->department);?>"> <?php echo htmlentities($result->department);?></option>
                                                <?php $sqld = "SELECT DepartmentName from tbldepartments";
                                                $queryd = $dbh -> prepare($sqld);
                                                $queryd->execute();
                                                $resultsd=$queryd->fetchAll(PDO::FETCH_OBJ);
                                                $cnt=1;
                                                if($queryd->rowCount() > 0){
                                                foreach($resultsd as $resultd)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($resultd->DepartmentName);?>"><?php echo htmlentities($resultd->DepartmentName);?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>

                                <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Date incident</label>
                                            <input class="form-control" name="ToDate" type="date" required id="example-text-input" value="<?php echo htmlentities($result->ToDate);?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">heure</label>
                                            <input class="form-control" name="heure" type="time" required id="example-text-input" value="<?php echo htmlentities($result->heure);?>">
                                        </div>

                                    <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Date enreg</label>
                                            <input class="form-control" name="FromDate" type="date" required id="example-text-input" value="<?php echo htmlentities($result->FromDate);?>">
                                        </div> 



                                     <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">lieu</label>
                                            <input class="form-control" name="lieu" type="text" required id="example-text-input" value="<?php echo htmlentities($result->lieu);?>">
                                        </div>

                                    <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Categorie incident</label>
                                            <select class="custom-select" name="cause" autocomplete="off" required>
                                                <option value="<?php echo htmlentities($result->cause);?>"> <?php echo htmlentities($result->cause);?></option>
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
                                            
                                            <select class="custom-select" name="info" autocomplete="off">
                                                
                                               <option value="<?php echo htmlentities($result->info);?>"> <?php echo htmlentities($result->info);?></option>
                                                <?php $sqli = "SELECT * from agent where status=1 ";
                                                    $queryi = $dbh -> prepare($sqli);
                                                    $queryi->execute();
                                                    $resultsi=$queryi->fetchAll(PDO::FETCH_OBJ);
                                                    
                                                    if($queryi->rowCount() > 0) {
                                                        foreach($resultsi as $resulti)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($resulti->idagent);?> -
                                                <?php echo htmlentities($resulti->FirstName." ".$result->LastName);?> -

                                                <?php echo htmlentities($resulti->Department);?> -

                                                <?php echo htmlentities($resulti->EmailId." ".$resulti->Phonenumber);?>

                                                ">

                                              <?php echo htmlentities($resulti->idagent);?>
                                                    

                                                </option>
                                    <?php }
                                    } ?>
                                            </select>
                                        </div>

    <div class="form-group" >
                                            <label for="example-date-input" size="20px;" class="col-form-label">Pays</label>
                                            <select class="custom-select" name="pays" autocomplete="off"  >
                                               <option value="<?php echo htmlentities($result->pays);?>"> <?php echo htmlentities($result->pays);?></option>
                                                <?php $sqla = "SELECT * from countries";
                                                $querya = $dbh -> prepare($sqla);
                                                $querya->execute();
                                                $resultsa=$querya->fetchAll(PDO::FETCH_OBJ);
                                                $cnt=1;
                                                if($querya->rowCount() > 0){
                                                foreach($resultsa as $resulta)
                                                {   ?>

                                                   
                                                <option value="<?php echo htmlentities($resulta->name);?>"><?php echo htmlentities($resulta->name);?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">learning</label>
                                            <textarea class="form-control"  type="text" name="learn" length="400" id="example-text-input" rows="5"  required><?php echo htmlentities($result->learn);?></textarea>
                                        </div>

                                   <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Actions immediate</label>
                                            <textarea class="form-control"  type="text" name="immediate" length="400" id="example-text-input" rows="5"  required><?php echo htmlentities($result->immediate);?></textarea>
                                        </div> 

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Description</label>
                                            <textarea class="form-control"  type="text" name="Description" length="400" id="example-text-input" rows="5"  required><?php echo htmlentities($result->Description);?></textarea>
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
   
    <div ><input type="file"  accept="image/*" name="file" id="file"  onchange="loadFile(event)"   style="display: none; " align="right"  ><button class="btn btn-sm btn-primary" type="button" style="" onclick="document.getElementById('file').click()">Choisir image 1</button>
         <br><br>
       <input type="file"  accept="image/*" name="image" id="image"  onchange="lireFile(event)" style="display: none;" >
   <button class="btn btn-sm btn-primary" style="position: relative;" type="button" onclick="document.getElementById('image').click()">Choisir image 2</button>

   <br><br>
       <input type="file"  accept="image/*" name="img" id="img"  onchange="retourFile(event)" style="display: none;" >
   <button class="btn btn-sm btn-primary" style="float:left;" type="button" onclick="document.getElementById('img').click()">Choisir image 3</button>
   
   </div>
 <br><br> <br>
<p style="border:1px solid #000; height:180px; width:520px; padding:25px; float:left; ">
    <img src="<?php echo htmlentities($result->file);?>" id="output" width="100" />    <img src="<?php echo htmlentities($result->image);?>" id="sortir" width="100" /> <img src="<?php echo htmlentities($result->img);?>" id="retour" width="100" /></p>
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



                               
                                    
                                

 <td ><b> <h6> cause rejet  : </b></td>
                                    <td><?php
                                    
                                    echo htmlentities($result->AdminRemark )    ;
                                    
                                    ?></td></h6><br>

                                <td ><h6><b>signer par  : </b></td>
                                    <td><?php
                                    
                                    echo htmlentities( $result->AdminRemarkDate );
                                           $result->adminlog =
                                            $username=$_SESSION['alogin'];
    $sql = "SELECT fullname,username,poste from  admin where username=:username";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
  
    
        foreach($results as $result)
    {    ?>
         <b> <p style="color:gold; float: center"><?php echo htmlentities($result->fullname);?></p></b>
         <b><?php echo htmlentities($result->poste); ?></b>
            

<?php } 
                                    
                                    ?></td></h6>

                                        
                        <?php }
                                    } ?>                

                                      <br><br><br> 

                                        <button class="btn btn-primary" name="update" id="update" type="submit">Enregistrer</button>
                                        
                                        
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