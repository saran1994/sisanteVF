<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
    } else {
    if(isset($_POST['add'])){

    
    $name=$_POST['name'];
    $hazar=$_POST['hazar'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $plan=$_POST['plan'];
    $message=$_POST['message'];
    $avant=$_POST['avant'];
    $apres=$_POST['apres'];
    $fol=$_POST['fol'];
    $appr=$_POST['appr'];

    $com=$_POST['com'];
    date_default_timezone_set('Africa/bamako');
    $CreationDate=date('Y-m-d  ', strtotime("now"));

    $sql="INSERT INTO sprint (name,hazar,email,message,subject,avant,apres,fol,appr,com,CreationDate) VALUES(:name,:hazar,:subject,:email,:message,:avant,:apres,:fol,:appr,:com,:CreationDate)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':hazar',$hazar,PDO::PARAM_STR);
    $query->bindParam(':subject',$subject,PDO::PARAM_STR);
    $query->bindParam(':message',$message,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':CreationDate',$CreationDate,PDO::PARAM_STR);
    
    $query->bindParam(':avant',$avant,PDO::PARAM_STR);
    $query->bindParam(':apres',$apres,PDO::PARAM_STR);
    $query->bindParam(':fol',$fol,PDO::PARAM_STR);
    $query->bindParam(':appr',$appr,PDO::PARAM_STR);
    $query->bindParam(':com',$com,PDO::PARAM_STR);
    
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();

    if($lastInsertId){
    $msg="sprint Cree avec succes!!";
    } else {
    $error="erreur!!";
    }

}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SI-SANTE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <link rel="stylesheet" href="choices.min.css" />

  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script defer src="https://kit.fontawesome.com/1e8d61f212.js"></script>
    <script src="choices.min.js"></script>
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="sprint.php"><img src="logo.png" alt="logo">SI-SANTE</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <?php
                        $page='sprint';
                        include '../includes/admin-sidebar.php';
                    ?>
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

                            <!-- Notification bell -->
                            <?php include '../includes/admin-notification.php'?>

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
                            <h4 class="page-title pull-left">Rapport d'inspection  </h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="">Rapport d'inspection </a></li>
                                <li><span>Ajouter</span></li>
                                
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="../assets/images/admin.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">ADMIN <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="logout.php">Deconnexion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                
                
                <!-- row area start -->
                <div class="row">
                    <!-- Dark table start -->
                    <div class="col-12 mt-5">
                    
                        <div class="card">
                        

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
                                
                                <form method="POST" action="functions.php">
                                 <div class="card-body">
                                        
                                        <p class="text-muted font-14 mb-4">Veuillez remplir le formulaire afin d'ajouter un nouveau </p>
                                        

                                       
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">date of inspection</label>

                                            <input class="form-control" name="name" type="date"  required id="example-text-input" >
                                        </div>

                                        <div class="form-group" >
                                            <label for="example-text-input" class="col-form-label"> </label>Hazard Classification (A,B,C)
<select class="custom-select" name="hazar" autocomplete="off">
                                                <option value="">Choisir..</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                            </select>
                                        </div>


                                       

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Non-conformance\Sub Std\Deviation
 from SOP, rule, Std etc. </label>

                                            <input class="form-control" name="subject" type="text" required id="example-text-input" >
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Remedial Action to be taken </label>

                                            <input class="form-control" name="message" type="text" required id="example-text-input" >
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Responsible
Person </label>

                                            <select class="custom-select" name="email[]" id="choices-text-remove-button" autocomplete="off" multiple>
                                                <option value="">Choisir..</option>
                                                <?php $sql = "SELECT * from tblemployees where Status=1";
                                                $query = $dbh -> prepare($sql);
                                                $query->execute();
                                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt=1;
                                                if($query->rowCount() > 0){
                                                foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->EmailId ." &  ". $result->Department);?>"><?php echo htmlentities($result->EmailId);?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>

                                        

<script>
     
        var textRemove = new Choices(
          document.getElementById('choices-text-remove-button'),
          {
            delimiter: ',',
            editItems: true,
            maxItemCount: 5,
            removeItemButton: true,
          }
        );

    </script>


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
   
    <div ><input type="file"  accept="image/*" name="avant" id="avant"  onchange="loadFile(event)"   style="display: none; "  align="right" required="required" ><button class="btn btn-sm btn-primary" type="button" style="width: 100px;" onclick="document.getElementById('avant').click()">image avant</button>
         <br><br>
       <input type="file"  accept="image/*" name="apres" id="apres"  onchange="lireFile(event)" style="display: none;" >
   <button class="btn btn-sm btn-primary" style="position: relative; width: 100px;" type="button" onclick="document.getElementById('apres').click()">image apres</button>

   
   
   
   </div>
 <br><br> <br>
<p style="border:1px solid #000; height:180px; width:400px; padding:25px; float:left; ">
    <img id="output" width="100" />    <img id="sortir" width="100" />
<p style="color: white;">c</p>  



<script>
var loadFile = function(event) {
    var avant = document.getElementById('output');
    avant.src = URL.createObjectURL(event.target.files[0]);
};


var lireFile = function(event) {
    var apres = document.getElementById('sortir');
    apres.src = URL.createObjectURL(event.target.files[0]);
};


</script>
   <br />
   <span id="uploaded_image"> </span>
    <span id="down_image"> </span>
    
  </div>

</body></html>


<script>

$(document).ready(function(){
 $(document).on('change', '#avant', function(){
  var name = document.getElementById("avant").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("avant").files[0]);
  var f = document.getElementById("avant").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("avant", document.getElementById('avant').files[0]);
   $.ajax({
    url:"sprintavant.php",
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
 $(document).on('change', '#apres', function(){
  var name = document.getElementById("apres").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("apres").files[0]);
  var f = document.getElementById("apres").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("apres", document.getElementById('apres').files[0]);
   $.ajax({
    url:"sprintapres.php",
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
</script>



                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Follow up investigation finding </label>

                                            <input class="form-control" name="fol" type="text" required id="example-text-input" >
                                        </div>

                                       <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Appreciation </label>
                                        <select class="custom-select" name="appr" autocomplete="off">
                                                <option value="">Choisir..</option>
                                                <option value="good">good</option >
                                                <option value="no-good">no-good</option>
                                                
                                            </select>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Commentaire </label>
                                            <textarea class="form-control" name="com" type="text" required id="example-text-input"></textarea>
                                            
                                        </div>

                                        

                                        <button class="btn btn-primary" style="width: 100px; " name="add" id="add" type="submit">Enregistrer</button>
                                        
                                    </div>
                                    </form>
                        </div> 
                    </div>
                    <!-- Dark table end -->
                    
                </div>
                <!-- row area end -->
                
                </div>
                <!-- row area start-->
            </div>

    

        
            <?php include '../includes/footer.php' ?>
        <!-- footer area end-->
        </div>
        <!-- main content area end -->

        
    </div>
    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>

        <!-- Start datatable js -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>

<?php } ?>