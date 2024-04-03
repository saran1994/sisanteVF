<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
    } else {
    if(isset($_POST['add'])){

    $incident=$_POST['incident'];
    $srce=$_POST['srce'];
    $department=$_POST['department'];
    $insafe=$_POST['insafe'];
    $type=$_POST['type'];
    $act=$_POST['act'];
    $factor=$_POST['factor'];
    $resp=$_POST['resp'];
    $job=$_POST['job'];
    $rate=$_POST['rate'];
    $sever=$_POST['sever'];
    

    $sql="INSERT INTO rapporte (incident,srce,insafe,type,act,factor,resp,job,rate,sever,department) VALUES(:incident,:srce,:insafe,:type,:act,:factor,:resp,:job,:rate,:sever,:department)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':incident',$incident,PDO::PARAM_STR);
    $query->bindParam(':srce',$srce,PDO::PARAM_STR);
     $query->bindParam(':department',$department,PDO::PARAM_STR);
    $query->bindParam(':insafe',$insafe,PDO::PARAM_STR);
    $query->bindParam(':type',$type,PDO::PARAM_STR);
    $query->bindParam(':act',$act,PDO::PARAM_STR);
    $query->bindParam(':factor',$factor,PDO::PARAM_STR);
    $query->bindParam(':job',$job,PDO::PARAM_STR);
    $query->bindParam(':resp',$resp,PDO::PARAM_STR);
    $query->bindParam(':rate',$rate,PDO::PARAM_STR);
    $query->bindParam(':sever',$sever,PDO::PARAM_STR);


    $query->execute();
    $lastInsertId = $dbh->lastInsertId();

    if($lastInsertId){
    $msg=" Cree avec succes!!";
    } else {
    $error="Something went wrong. Please try again";
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
    <!-- modernizr css -->
    <link rel="stylesheet" href="choices.min.css" />
    <script src="choices.min.js"></script>
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
                    <a href="rapporte.php"><img src="logo.png" alt="logo">SI-SANTE</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <?php
                        $page='rapporte';
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
                            <h4 class="page-title pull-left">Gestion rapport incident </h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="rapporte.php">rapport incident</a></li>
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
                                
                                <form method="POST" >
                                 <div class="card-body">
                                        
                                        <p class="text-muted font-14 mb-4">Veuillez remplir le formulaire afin d'ajouter </p>

<div class="form-group" style="float: left;">
                                            <label for="example-text-input" class="col-form-label">responsable </label>
<select class="custom-select" name="resp" autocomplete="off">
                                <option value="">Choisir..</option>
                                <?php $sql = "SELECT * from agent where Status=1";
                                $query = $dbh -> prepare($sql);
                                $query->execute();
                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                $cnt=1;
                                if($query->rowCount() > 0){
                                foreach($results as $result)
                                {   ?> 
                                <option value="<?php echo htmlentities($result->FirstName." ".$result->LastName);?>

                                "><?php echo htmlentities($result->idagent);?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>


                                        <div class="form-group" style="float: left;">
                                            <label for="example-text-input" class="col-form-label">N°Incident </label>
<select class="custom-select" name="incident" autocomplete="off">
                                <option value="">Choisir..</option>
                                <?php $sql = "SELECT * from tblleaves where Status=1";
                                $query = $dbh -> prepare($sql);
                                $query->execute();
                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                $cnt=1;
                                if($query->rowCount() > 0){
                                foreach($results as $result)
                                {   ?> 
                                <option value="<?php echo htmlentities($result->id);?>

                                ">N°00<?php echo htmlentities($result->id);?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>
                                        <div class="form-group" style="float: left;">
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
<br><br><br><br><br>


                                        <div class="form-group" style="float: left;">
                                            <label for="example-text-input" class="col-form-label">INCIDENT TYPE </label>
                                            <select class="custom-select" name="type" autocomplete="off">
                                                <option value="">Choisir..</option>
                                                <?php $sql = "SELECT * from typeincident";
                                                $query = $dbh -> prepare($sql);
                                                $query->execute();
                                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt=1;
                                                if($query->rowCount() > 0){
                                                foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->libelle);?>"><?php echo htmlentities($result->libelle);?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>

                                        <div class="form-group" style="float: left;">
                                            <label for="example-text-input" class="col-form-label">SOURCE OF INCIDENT </label>
<select class="custom-select" name="srce" autocomplete="off">
                                <option value="">Choisir..</option>
                                <option value="Moving machinery">Moving machinery</option>
                                <option value="Stationery equipment">Stationery equipment</option>
                                <option value="lifting equipment">lifting equipment</option>
                                <option value="Powerder Hand ">Powerder Hand </option>
                                <option value="tools">tools</option>
                                <option value="Electicity">Electicity</option>
                                <option value="Hand tools">Hand tools</option>
                                <option value="Animals /Insects">Animals /Insects</option>
                                <option value="Fire/Explosion">Fire/Explosion</option>
                                <option value="Dust fumes/vapors">Dust fumes/vapors</option>
                                <option value="Noise">Noise</option>
                                <option value="Temperature/hear">Temperature/hear</option>
                                <option value="Overexertion">Overexertion</option>
                                <option value="Other">Other</option>
                            
                                               
                                            </select>
                                        </div>
<br><br><br><br><br><br>
                                        <div class="form-group" style="float: left;">
                                            <label for="example-text-input" class="col-form-label">UNSAFE CONDITIONA </label>
<select class="custom-select" name="insafe" autocomplete="off">
                                <option value="">Choisir..</option>
                                <option value="Inadequate guards">Inadequate guards</option>
                                <option value="Poor visibity">Poor visibity</option>
                                <option value="Defetive tools or equipment">Defetive tools or equipment</option>
                                <option value="Dangerous work arragement">Dangerous work arragement</option>
                                <option value="Poor ventilation">Poor ventilation</option>
                                <option value="Inadequate protective equipment
">Inadequate protective equipment
</option>
                                <option value="Poor housekeeping">Poor housekeeping</option>
                                <option value="Tripping/sliping hazards">Tripping/sliping hazards</option>
                                <option value="#NOM?">#NOM?</option>

                                            </select>
                                        </div>

                                        <div class="form-group" style="float: left;">
                                            <label for="example-text-input" class="col-form-label">UNSAFE ACT </label>
<select class="custom-select" name="act" autocomplete="off">
                                <option value="">Choisir..</option>
                                <option value="Operating without authority">Operating without authority</option>
                                <option value="Failure to warn/secure">Failure to warn/secure</option>
                                <option value="Operating at unsafe speed">Operating at unsafe speed</option>
                                <option value="using defective equipment">using defective equipment</option>
                                <option value="Unsafe use of equipment">Unsafe use of equipment</option>
                                <option value="Improper position">Improper position</option>
                                <option value="Unsafe loading/placing">Unsafe loading/placing</option>
                                <option value="Horseplay/Teaching">Horseplay/Teaching</option>
                                <option value="Alcohol/Drugs">Alcohol/Drugs</option>
                                <option value="Lifting or carrying">Lifting or carrying</option>
                                <option value="failure to lock out">failure to lock out</option>
                                <option value="failure to use protective equipment">failure to use protective equipment</option>
                                <option value="Incorrect use of tools/equipment">Incorrect use of tools/equipment</option>
                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                        <br><br><br><br><br><br>
                                        <div class="form-group" style="float: left;">
                                            <label for="example-text-input" class="col-form-label">PERSONAL FACTORS</label>
<select class="custom-select" name="factor" autocomplete="off">
                                <option value="">Choisir..</option>
                                <option value="Lack of knowledge/skills">Lack of knowledge/skills</option>
                                <option value="Improper motivation/attitude">Improper motivation/attitude</option>
                                <option value="Tacking shortcut">Tacking shortcut</option>
                                <option value="Alcohol/drugs abuse">Alcohol/drugs abuse</option>
                                <option value="failure to comply with rules/standart/procedures">failure to comply with rules/standart/procedures</option>
                                <option value="Other">Other</option>
                                <option value="#NOM?">#NOM?</option>
                                
                                
                                
                                            </select>
                                        </div>

                                        <div class="form-group" style="float: left;">
                                            <label for="example-text-input" class="col-form-label">JOB FACTORS</label>
<select class="custom-select" name="job" autocomplete="off">
                                <option value="">Choisir..</option>
                                <option value="Improper planning">Improper planning</option>
                                <option value="poor environmental condition">poor environmental condition</option>
                                <option value="Poor maitenance">Poor maitenance</option>
                                <option value="poor supervision">poor supervision</option>
                                <option value="poor quality of equipment">poor quality of equipment</option>
                                <option value="No rules standards or procedures">No rules standards or procedures</option>
                                <option value="Other">Other</option>
                                <option value="#NOM?">#NOM?</option>
                                

                                            </select>
                                        </div>
<br><br><br><br><br><br>
                                             <div class="form-group" style="float: left;">
                                            <label for="example-text-input" class="col-form-label">RECURENCE  RATE</label>
<select class="custom-select" name="rate" autocomplete="off">
                                <option value="">Choisir..</option>
                                <option value="Rare">Rare</option>
                                <option value="occasional">occasional</option>
                                <option value="frequent">frequent </option>
                                <option value="#NOM?">#NOM?</option>
                                

                                            </select>
                                        </div>

                                          <div class="form-group" style="float: left;">
                                            <label for="example-text-input" class="col-form-label">SEVERITY</label>
<select class="custom-select" name="sever" autocomplete="off">
                                <option value="">Choisir..</option>
                                <option value="Minor">Minor</option>
                                <option value="serious">serious</option>
                                <option value="Major">Major  </option>
                                <option value="#NOM?">#NOM?</option>
                                

                                            </select>
                                        </div>
                                <br><br><br><br><br><br>
                                        <button class="btn btn-primary" name="add" id="add" type="submit">Enregistrer</button>
                                        
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