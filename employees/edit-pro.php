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
       
    $datep=$_POST['datep'];
    $tim=$_POST['tim'];
    $scenario=$_POST['scenario'];
    $location=$_POST['location'];
    $objectif=$_POST['objectif'];
    $department=$_POST['department'];
    $why=$_POST['why'];
    $done=$_POST['done'];
    $hod=$_POST['hod'];
    $status=0;
    $isread=0;

        $sql="UPDATE program set datep=:datep,tim=:tim,scenario=:scenario,location=:location,objectif=:objectif,department=:department,why=:why,done=:done,hod=:hod,status=:status,isread=:isread,empid=:empid where idp=:did";
        $query = $dbh->prepare($sql);

        $query->bindParam(':datep',$datep,PDO::PARAM_STR);
    $query->bindParam(':tim',$tim,PDO::PARAM_STR);
    $query->bindParam(':empid',$empid,PDO::PARAM_STR);
    $query->bindParam(':isread',$isread,PDO::PARAM_STR);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->bindParam(':scenario',$scenario,PDO::PARAM_STR);
    $query->bindParam(':location',$location,PDO::PARAM_STR);
    $query->bindParam(':objectif',$objectif,PDO::PARAM_STR);
    $query->bindParam(':department',$department,PDO::PARAM_STR);
    $query->bindParam(':why',$why,PDO::PARAM_STR);
    $query->bindParam(':done',$done,PDO::PARAM_STR);
    $query->bindParam(':hod',$hod,PDO::PARAM_STR);


        $query->bindParam(':did',$did,PDO::PARAM_STR);
        $query->execute();
        $msg="bravo !! votre fiche  a ete re-envoyer";
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
                                            $sql = "SELECT * from program WHERE idp=:did";
                                            $query = $dbh -> prepare($sql);
                                            $query->bindParam(':did',$did,PDO::PARAM_STR);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {               ?>

                                
                                        
                                       

                                <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Date</label>
                                            <input class="form-control" name="datep" type="date" required id="example-text-input" value="<?php echo htmlentities($result->datep);?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">heure</label>
                                            <input class="form-control" name="tim" type="time" required id="example-text-input" value="<?php echo htmlentities($result->tim);?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">objectif</label>
                                            <input class="form-control" name="objectif" type="text" required id="example-text-input" value="<?php echo htmlentities($result->objectif);?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">scenario</label>
                                            <input class="form-control" name="scenario" type="text" required id="example-text-input" value="<?php echo htmlentities($result->scenario);?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">location</label>
                                            <input class="form-control" name="location" type="text" required id="example-text-input" value="<?php echo htmlentities($result->location);?>">
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
                                            <label for="example-text-input" class="col-form-label">done or not</label>
                                            <input class="form-control" name="done" type="text" required id="example-text-input" value="<?php echo htmlentities($result->done);?>">
                                        </div>


<div class="form-group">
                                            <label for="example-text-input" class="col-form-label">hod name</label>
                                            <input class="form-control" name="hod" type="text" required id="example-text-input" value="<?php echo htmlentities($result->hod);?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">why or done</label>
                                            <input class="form-control" name="why" type="text" required id="example-text-input" value="<?php echo htmlentities($result->why);?>">
                                        </div>

 <td ><b> <h6> cause rejet  : </b></td>
                                    <td><?php
                                    
                                    echo htmlentities($result->remark )    ;
                                    
                                    ?></td></h6><br>

                                <td ><h6><b>signer par  : </b></td>
                                    <td><?php
                                    
                                    echo htmlentities( $result->remarkdate );
                                           
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