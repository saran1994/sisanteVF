<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
    } else {

    // code for update the read notification status
    $isread=1;
    $did=intval($_GET['leaveid']);  
    date_default_timezone_set('Africa/bamako');
    $admremarkdate=date('d-m-y G:i:s ', strtotime("now"));
    $sql="UPDATE tblleaves set IsRead=:isread where id=:did";
    $query = $dbh->prepare($sql);
    $query->bindParam(':isread',$isread,PDO::PARAM_STR);
    $query->bindParam(':did',$did,PDO::PARAM_STR);
    $query->execute();

    // code for action taken on leave
    if(isset($_POST['update'])){ 
    $did=intval($_GET['leaveid']);
    $description=$_POST['description'];
    $cause=$_POST['cause'];
    $pays=$_POST['pays'];
    $status=$_POST['status'];   
    date_default_timezone_set('Africa/bamako');
    $admremarkdate=date('d-m-y G:i:s ', strtotime("now"));
    $adminlog= $username=$_SESSION['alogin'];

    $sql="UPDATE tblleaves set AdminRemark=:description,Status=:status,AdminRemarkDate=:admremarkdate,adminlog=:adminlog where id=:did";
    $query = $dbh->prepare($sql);
    $query->bindParam(':description',$description,PDO::PARAM_STR);
    
    $query->bindParam(':adminlog',$adminlog,PDO::PARAM_STR);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->bindParam(':admremarkdate',$admremarkdate,PDO::PARAM_STR);
    $query->bindParam(':did',$did,PDO::PARAM_STR);
    $query->execute();
    $msg="fiche incident mise a jour avec succes!! ";

    } ?>

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
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
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
    
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="dashboard.php"><img src="logo.png" alt="logo">SI-SANTE</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <?php $page="employeeLeave-details";
                    include '../includes/admin-sidebar.php'
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
                            <h4 class="page-title pull-left">Details</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.php">Accueil</a></li>
                                <li><span>Details </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="../assets/images/admin.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
<?php
    
   
    $username=$_SESSION['alogin'];
    $sql = "SELECT fullname,username from  admin where username=:username";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    

    
        foreach($results as $result)
    {    ?>
        <p style="color:white;"><?php echo htmlentities($result->fullname);?></p>
            <span><?php echo htmlentities($result->username)?></span>
<?php }
   

        
?>


                             <i class="fa fa-angle-down"></i></h4>
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
                    
                    <!-- Striped table start -->
                    <div class="col-lg-12 mt-5">
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
<!-- imprimer  -->
<a href="inspection.php" onClick="imprimer('sectionAimprimer')" class="btn btn-success"><i class="fa fa-print">IMPRIMER</i> </a>
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="single-table" >
                                    <div class="table-responsive" id="sectionAimprimer">
        
                    <img src="logo.png" style="padding-left: 555px;" > <br><br>
                                        <table class="table table-bordered table-hover text-left" >
                                            
                                            <tbody>

                                            <?php 
                                            $idins=intval($_GET['idins']);
                                            $sql = "SELECT * from inspection where idins=:idins ";
                                            $query = $dbh -> prepare($sql);
                                            $query->bindParam(':idins',$idins,PDO::PARAM_STR);
                                            
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {         
                                                ?>

                                              <b> vehicle :</b>
                                              <?php echo htmlentities($result->voit);?>
<br>
                                            <b> safety </b>

                                             <?php echo htmlentities($result->saf);?>
<br>
                                          <b>  First Aid Box : </b>

                                             <?php echo htmlentities($result->first);?>
<br>
                                            <b> Reserse Lignt </b>

                                             <?php echo htmlentities($result->reserve);?>
<br>

                                            <b>Tools </b>

                                             <?php echo htmlentities($result->tools);?>


                                             

                                <br>
                                            <b> Stoplight </b>

                                             <?php echo htmlentities($result->stop);?>
<br>
                                            <b> extinguisher </b>

                                             <?php echo htmlentities($result->ext);?>
<br>
                                            <b> Back alarm </b>

                                             <?php echo htmlentities($result->alarm);?>
<br>
                                            <b> seat belt </b>

                                             <?php echo htmlentities($result->seat);?>
<br>
                                            <b> Driving license </b>

                                             <?php echo htmlentities($result->dri);?>
<br>

                                            <b> admin papers </b>

                                             <?php echo htmlentities($result->pap);?>

                            
                                         <?php $cnt++;} }?>
                                    </tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Striped table end -->
                    
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


    <script>
 function imprimer(sectionAimprimer) {
      var printContents = document.getElementById(sectionAimprimer).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
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
    
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>

<?php } ?>