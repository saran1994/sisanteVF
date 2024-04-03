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

       // $empid=$_SESSION['eid'];
        

        
        
        $job=$_POST['job'];
         $type=$_POST['type'];
          $domaine=$_POST['domaine'];

          $debut=$_POST['debut'];
       

          
        $department=$_POST['department'];
        $section=$_POST['section'];
        $description=$_POST['description'];

        $person=$_POST['person'];
        

        $extra=$_POST['extra'];
        
        $valeur=$_POST['valeur']; 
         

        $sql="INSERT INTO vlf (
        job,type,domaine,debut,department,section,description,person,extra,valeur) VALUES(:job,:type,:domaine,:debut,:department,:section,:description,:person,:extra,:valeur)";
        $query = $dbh->prepare($sql);        
        $query->bindParam(':job',$job,PDO::PARAM_STR);
        $query->bindParam(':type',$type,PDO::PARAM_STR);
        $query->bindParam(':department',$department,PDO::PARAM_STR);
        $query->bindParam(':section',$section,PDO::PARAM_STR);

        $query->bindParam(':description',$description,PDO::PARAM_STR);
        $query->bindParam(':domaine',$domaine,PDO::PARAM_STR);
        $query->bindParam(':debut',$debut,PDO::PARAM_STR);
        $query->bindParam(':person',$person,PDO::PARAM_STR);
        $query->bindParam(':valeur',$valeur,PDO::PARAM_STR);
        $query->bindParam(':extra',$extra,PDO::PARAM_STR);

        //$query->bindParam(':empid',$empid,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();

        if($lastInsertId)
        {
             $msg="bravo!! vlf ajouter avec succes.";
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

                            <li class="#">>
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

                            <li class="active">
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
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
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
                                        <h4 class="header-title">Fiche vfl </h4>
                                        <p class="text-muted font-14 mb-4">Veuillez remplir le formulaire ci-dessous.</p>

                                   
                                         <div class="form-group" >
                                            <label for="example-date-input" size="20px;" class="col-form-label">type vfl</label>
                                            <select class="custom-select" name="type" autocomplete="off">
                                                <option value="">Choisir..</option>
                                                <option value="Intervention">Intervention</option>
                                                <option value="Interaction">Interaction</option>
                                                
                                            </select>
                                        </div>


                                         <div class="form-group" >
                                            <label for="example-date-input" class="col-form-label">domaine</label>
                                            <select class="custom-select" name="domaine" autocomplete="off">
                                                <option value=""> Choisir ...</option>
                                                <option value="Attitude">Attitude</option>
                                                <option value="Environnement">Environnement</option>
                                                <option value="Equipement">Equipement</option>
                                                <option value="Material">Material</option>
                                                <option value="Housekeeping">Housekeeping</option>
                                                <option value="People">People</option>
                                                <option value="Ppe">Ppe</option>
                                                <option value="Process">Process</option>
                                                <option value="Sop">Sop</option>
                                                <option value="Tools">Tools</option>
                                                
                                            </select>
                                        </div>


                                        

                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">date vlf </label>
                                            <input class="form-control" type="date"   id="debut" name="debut" required>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-form-label"> Infos-Employees</label>
                                            <select class="custom-select" name="person" autocomplete="off">
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

                                                <?php echo htmlentities($result->Department);?> -

                                                <?php echo htmlentities($result->EmailId." ".$result->Phonenumber);?>

                                                ">

                                              <?php echo htmlentities($result->idagent);?>
                                                    

                                                </option>
                                                <?php }
                                            } ?>
                                            </select>
                                        </div>
                                        


                                        

                                        <div class="form-group">
                                            <label class="col-form-label"> departement </label>
    <select id="department" onchange="random_function()" class="custom-select" name="department" autocomplete="on">
            <option>choisir..</option>
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
        </select><br><br>
<div class="form-group">
                                            <label for="example-date-input" class="col-form-label">section </label>
           <select id="section" onchange="random_function1()" class="custom-select" name="section" autocomplete="on">
           </select><br><br>
        </div>  
                        </div>

    <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">valeur recap </label>
                                            <input class="form-control" type="number" min="0" max="1"   id="valeur" name="valeur" required>
                                        </div>

                                        

                                        <div class="form-group">

                                            <label for="example-date-input" class="col-form-label">extra location </label>
                                            <input class="form-control" type="text"   id="extra" name="extra" required>
                                        </div>
                                              <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">liste des poste </label>
                                            <select class="custom-select" name="job" autocomplete="off">
                                        <option value="">Choisir..</option>
                                        <option value="CHEF SECTION">CHEF SECTION</option>
                                        <option value="COMPTABLE">COMPTABLE</option>
                                        <option value="CONTREMAITRE">CONTREMAITRE</option>
                                        <option value="COORDINATEUR DES VOYAGES">COORDINATEUR DES VOYAGES</option>
<option value="DIRECTEUR ">DIRECTEUR </option>
<option value="INGENIEUR">INGENIEUR</option>
<option value="OFFICIER">OFFICIER</option>
<option value="SUPERVISEUR">SUPERVISEUR</option>
<option value="SURINTENDANT">SURINTENDANT</option>
<option value="A. P. S">A. P. S</option>
<option value="ACHETEUR">ACHETEUR</option>
<option value="ADMINISTRATEUR">ADMINISTRATEUR</option>
<option value="ANALYSTE">ANALYSTE</option>                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Descriptions</label>
                                            <textarea class="form-control" name="description" type="text" name="description" length="400" id="example-text-input" rows="5"></textarea>
                                        </div>




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
                }else if(a==="Clinic")
                {
                    var arr=["non disponible"];
                }else if(a==="Security")
                {
                    var arr=["non disponible"];
                }else if(a==="Community")
                {
                    var arr=["non disponible"];
                }else if(a==="Environment")
                {
                    var arr=["non disponible"];
                }else if(a==="Finance")
                {
                    var arr=["non disponible"];
                }else if(a==="Administration")
                {
                    var arr=["non disponible"];
                }else if(a==="Laboratory")
                {
                    var arr=["non disponible"];
                }else if(a==="Human Resources")
                {
                    var arr=["non disponible"];
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("section").innerHTML=string;
            }
        </script>


          
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