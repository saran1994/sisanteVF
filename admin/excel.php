<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
    } else {



if(isset($_POST['update'])){

        $idsafety=intval($_GET['idsafety']);    
        $lti=$_POST['lti'];
        $mit=$_POST['mit'];
        $spi=$_POST['spi'];
        $fatal=$_POST['fatal'];
        $last=$_POST['last'];   
        $sql="UPDATE rapport set lti=:lti,mit=:mit,spi=:spi,fatal=:fatal,last=:last where idsafety=:idsafety";
        $query = $dbh->prepare($sql);
        $query->bindParam(':lti',$lti,PDO::PARAM_STR);
        $query->bindParam(':mit',$mit,PDO::PARAM_STR);
        $query->bindParam(':spi',$spi,PDO::PARAM_STR);
        $query->bindParam(':fatal',$fatal,PDO::PARAM_STR);
        $query->bindParam(':last',$last,PDO::PARAM_STR);
        $query->bindParam(':idsafety',$idsafety,PDO::PARAM_STR);
        $query->execute();
        $msg="Successfully";
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
                    <?php $page="employee";
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
                                <li><span>Details safety</span></li>
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
<a href="safety.php" onClick="imprimer('sectionAimprimer')" class="btn btn-success"><i class="fa fa-print">IMPRIMER</i> </a>

                        <div class="card">
                            <div class="card-body">
                                
                                <div class="single-table" >
                                    <div class="table-responsive" id="sectionAimprimer">
        
                    <img src="logo.png" >

                    <form method="POST">
                                 <div class="card-body">
                                        

                                        <p class="text-muted font-14 mb-4">visualiser la fiche</p>

                                        <?php 
                                            $idsafety=intval($_GET['idsafety']);
                                            $sql = "SELECT * from safety WHERE idsafety=:idsafety";
                                            $query = $dbh -> prepare($sql);
                                            $query->bindParam(':idsafety',$idsafety,PDO::PARAM_STR);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {  

              $start_date = strtotime($result->CreationDate);
              $end_date = strtotime($result->fatal);
              $i =( $start_date - $end_date )/60/60/24;

              $debut_date = strtotime($result->CreationDate);
              $fin_date = strtotime($result->analyse);
              $ii =( $debut_date - $fin_date )/60/60/24;
              
              $deb_date = strtotime($result->CreationDate);
              $fi_date = strtotime($result->mitrap);
              $ii =( $deb_date - $fi_date )/60/60/24;
              
 
           ?> 

           <table style="float: left;">
                 <tbody>
                                            <tr>


                                              <td ><b>PROGRESSIVE LTI YTD_LTI :</td >
                                                <td ><?php echo htmlentities($result->lti);?></b></td>
                                             </tr>
                                             <tr>
                                                <td ><b>PROGRESSIVE LTI YTD_MIT:</b></td>
                                              <td colspan="1"><?php echo htmlentities($result->mit);?></td>
                                              </tr>
                                              <tr>
                                            <td> <b> PROGRESSIVE LTI YTD_SPI:</b></td>
                                            <td  ><?php echo htmlentities($result->spi);?></td>
                                            </tr>
                                          </tbody>
           </table>

                                                <table class="table table-bordered table-hover text-center" style="float: left;">

                                            <tbody>


<tr><td colspan="10" style="text-align: center;"><b> DAILY SAFETY AND HEALTH BULLETIN -  Sadiola Gold Mine</b></td>
</tr>

                                              
                                          
                                          <tr >
                                            <td rowspan="2" style="background-color: #8914fe; color: #FFFF00;"><b>previous records</b></td >
                                            <td rowspan="2" style="background-color: #8914fe; color: #FFFF00;"> <b> records dates</b></td>
                                            <td rowspan="2"> <b> SAFETY STATISTICS</b></td>
                                            <td colspan="6" rowspan="2"> <b> Current Performance</b></td>
                                            
                                        </tr>
                                        <tr><td></td></tr>
                                          <tr>
                                              <td ></td>
                                              <td ></td>
                                              <td ></td>
                                              <td><b>Progressive Hours</b></td>
                                              <td><b>Progressive Shifts</b></td>
                                              <td><b>Progressive days</b></td>
                                              <td colspan="4" style="background-color: #8914fe; color: #FFFF00;" ><b> Last Fatality Date </b></td>
                                              <tr>
                                                <td bgcolor=" #90EE90;">2713</td>
                                              <td bgcolor=" #90EE90;"><?php echo htmlentities($result->fatal);?></td>

                                              <td ><b>Progressive Fatality Free</b></td>
                                                <td rowspan="2">
                                                    <?php echo intval ( ( ($i-1) * 2718) * 8) ;?>
                                                </td>
                                                <td rowspan="2"><?php echo intval ( ($i-1) * 2718) ;?></td>
                                                <td rowspan="2"><?php echo intval($i-1) ;?></td>
                                                <td colspan="4"  style="background-color:#FFFF00; "><?php echo htmlentities($result->fatal);?></td>
                                             </tr>    
                                          </tr>

                                          <tr>
                                              <td ></td>
                                              <td ></td>
       
                                          </tr>


<tr>
                                                <td bgcolor=" #90EE90;">1329</td>
                                              <td bgcolor=" #90EE90;"><?php echo htmlentities($result->CreationDate);?></td>

                                              <td ><b>Progressive LTI Free</b></td>
                                                <td rowspan="2">
                                                    <?php echo intval ( ( ($ii-1) * 1329) * 8) ;?>
                                                </td>
                                                <td rowspan="2"><?php echo intval ( ($ii-1) * 1329) ;?></td>
                                                <td rowspan="2"><?php echo intval($ii-1) ;?></td>
                                                <td colspan="4" style="background-color: #8914fe; color: #FFFF00;">Last Lti Days </td>
                                             </tr>    
                                          </tr>

                                          <tr>
                                              <td ></td>
                                              <td ></td>
                                              <td ></td>
                                              
                                              <td colspan="4"  style="background-color:#FFFF00; "><?php echo htmlentities($result->fatal);?></td> 
                                          </tr>

<tr>
                                                <td bgcolor=" #90EE90;">1329</td>
                                              <td bgcolor=" #90EE90;"><?php echo htmlentities($result->CreationDate);?></td>

                                              <td ><b>Progressive MIT Free</b></td>
                                                <td rowspan="2">
                                                    <?php echo intval ( ( ($iii-1) * 1051) * 8) ;?>
                                                </td>
                                                <td rowspan="2"><?php echo intval ( ($iii-1) * 1051) ;?></td>
                                                <td rowspan="2"><?php echo intval($iii-1) ;?></td>
                                                <td colspan="4" style="background-color: #8914fe; color: #FFFF00;">Last mit Days </td>
                                             </tr>    
                                          </tr>

                                          <tr>
                                              <td ></td>
                                              <td ></td>
                                              <td ></td>
                                              
                                              <td colspan="4"  style="background-color:#FFFF00; "><?php echo htmlentities($result->fatal);?></td> 
                                          </tr>

                                          <tr><td rowspan="3" colspan="9"></td></tr>
                                          <tr><td colspan="9"></td></tr>
                                         <tr><td colspan="9"></td></tr>

                                              </tbody>
           </table> 


                                        <?php }
                                        }?>
<h4>dd</h4>
    <table class="table table-bordered table-hover text-center" >
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>N°Incident</th>
                                                
                                                <th>Date Incident </th>
                                                <th>time</th>
                                                <th>nom/prenom</th>
                                                <th>dept</th>
                                                <th>Place of occurrence</th>
                                                <th>hod</th>
                                                <th>severity</th>
                                                <th>nature of injurie</th>
                                                <th>cause of injurie</th>
                                                <th>hazard id</th>
                                                <th>per.</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                    <?php $sql = "SELECT rapport.idrap,rapport.lib,rapport.incident,rapport.CreationDate,tblleaves.id,rapport.injur,rapport.hazard,rapport.per,rapport.sever,tblleaves.info,tblleaves.lieu,tblleaves.cause,tblleaves.department,tblleaves.heure,tblleaves.adminlog,tblleaves.FromDate from rapport join tblleaves on rapport.incident=tblleaves.id ";
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt=1;
                                    if($query->rowCount() > 0)
                                    {
                                    foreach($results as $result)
                                    {               ?>  
                                        <tr>
                                            


                                            
                                        <td>N°00<?php echo htmlentities($result->incident);?></td>
                                            <td><?php echo htmlentities($result->FromDate);?></td>
                                            <td><?php echo htmlentities($result->heure);?></td>

                                           <td><?php echo htmlentities($result->info);?></td>

                                           <td><?php echo htmlentities($result->department);?></td>

                                           <td><?php echo htmlentities($result->lieu);?></td>

                                           <td><?php echo htmlentities($result->adminlog);?></td>

                                           <td><?php echo htmlentities($result->sever);?></td>
                                             
                                            
                                            <td><?php echo htmlentities($result->lib);?></td>
                                            
                                            <td><?php echo htmlentities($result->injur);?></td>
                                             
                                             <td><?php echo htmlentities($result->hazard);?></td>

                                             <td><?php echo htmlentities($result->per);?></td>
                                             
                                             
                                    

                                        </tr>
                                         <?php $cnt++;} }?>
                                    </tbody>
                                    </table>        
                                        
                                    </div>
                         </form> 
                                        
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