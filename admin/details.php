<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
    } else {



if(isset($_POST['update'])){

        $did=intval($_GET['rapid']);    
        $lib=$_POST['lib'];
        $incident=$_POST['incident'];
        $type=$_POST['type'];   
        $sql="UPDATE rapport set lib=:lib,incident=:incident,type=:type where rapid=:did";
        $query = $dbh->prepare($sql);
        $query->bindParam(':lib',$lib,PDO::PARAM_STR);
        $query->bindParam(':incident',$incident,PDO::PARAM_STR);
        $query->bindParam(':type',$type,PDO::PARAM_STR);
        $query->bindParam(':did',$did,PDO::PARAM_STR);
        $query->execute();
        $msg="Department updated Successfully";
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
                                <li><span>Details incident</span></li>
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
<a href="leave-history.php" onClick="imprimer('sectionAimprimer')" class="btn btn-success"><i class="fa fa-print">IMPRIMER</i> </a>

                        <div class="card">
                            <div class="card-body">
                                
                                <div class="single-table" >
                                    <div class="table-responsive" id="sectionAimprimer">
        
                    <img src="logo.png" >

                    <form method="POST">
                                 <div class="card-body">
                                        

                                        <p class="text-muted font-14 mb-4">visualiser la fiche</p>

                                        <?php 
                                            $did=intval($_GET['incident']);
                                            $sql = "SELECT * from rapport WHERE rapid=:did";
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
                                            <label for="example-text-input" class="col-form-label">libelle</label>
                                            <input disabled="" class="form-control" name="lib" type="text" required id="example-text-input" value="<?php echo htmlentities($result->lib);?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">incident</label>
                                            <input disabled="" class="form-control" name="incident" type="text" autocomplete="off" required id="example-text-input" value="<?php echo htmlentities($result->incident);?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">type of incident</label>
                                            <input disabled="" class="form-control" name="type" type="text" autocomplete="off" required id="example-email-input" value="<?php echo htmlentities($result->type);?>">
                                        </div>




                                        <?php }
                                        }?>

                                        
                                        
                                    </div>
                         </form> 
                                        <table class="table table-bordered table-hover text-left" >
                                            
                                            <tbody>



                                            <?php 
                                            $lid=intval($_GET['leaveid']);
                                            $sql = "SELECT tblleaves.id as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.EmpId,tblemployees.id,tblemployees.EmailId,tblleaves.info,tblleaves.file,tblleaves.learn,tblleaves.immediate,tblleaves.pays,tblleaves.operation,tblleaves.heure,tblleaves.image,tblleaves.img,tblleaves.LeaveType,tblleaves.actuel,tblleaves.pot,  tblleaves.ToDate,tblleaves.FromDate,tblleaves.Description,tblleaves.PostingDate,tblleaves.Status,tblleaves.AdminRemark,tblleaves.AdminRemarkDate,tblleaves.adminlog from tblleaves join tblemployees on tblleaves.empid=tblemployees.id where tblleaves.id=:lid";
                                            $query = $dbh -> prepare($sql);
                                            $query->bindParam(':lid',$lid,PDO::PARAM_STR);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {         
                                                ?>

                                                <tr>

                                                <td ><b>Fiche N°00<?php echo htmlentities($result->lid);?></b></td>

                                                <td ><b>Info-Employee:</b></td>
                                              <td colspan="1"><?php echo htmlentities($result->info);?></td>
                                            <td> <b> Username:</b></td>
                                            <td  ><?php echo htmlentities($result->EmpId);?></td>
                                              <td colspan="1"><a href="update-employee.php?empid=<?php echo htmlentities($result->id);?>" target="_blank">
                                                <?php echo htmlentities($result->FirstName." ".$result->LastName);?></a></td>

                                              
                                          </tr>

                                          <tr>
                                            
                                             
                                            

                                            <td ><b>Type incident:</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->LeaveType);?></td>
                                            <td ><b>Pays:</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->pays);?></td>
                                            <td ><b>Operation:</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->operation);?></td>
                                            
                                            
                                        </tr>

                                    <tr>
                                             
                                             <td ><b>Date incident :</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->FromDate);?></td>
                                            <td><b>Date enreg:</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->ToDate);?></td>
                                            <td><b>Heure:</b></td>
                                            <td colspan="1"><?php echo htmlentities($result->heure);?></td>
                                            
                                        </tr>


                                        <tr>
                                             
                                             <td ><b>Actuel impact :</b></td>
                                            <td colspan="1"><span class="btn btn-sucess" ><?php echo htmlentities($result->actuel);?></span></td>
                                            <td><b>Potentiel impact:</b></td>
                                            <td colspan="1"><span class="btn btn-sucess" ><?php echo htmlentities($result->pot);?></span></td>
                                            
                                        </tr>

                                    

                                <tr>
                                <td ><b>Date envoi:</b></td>
                                <td><?php echo htmlentities($result->PostingDate);?></td>

                                <td ><b>Status:</b></td>
                                <td><?php $stats=$result->Status;
                                if($stats==1){
                                ?>
                                    <span style="color: green">Approuver</span>
                                    <?php } if($stats==2)  { ?>
                                    <span style="color: red">Rejeter</span>
                                    <?php } if($stats==0)  { ?>
                                    <span style="color: blue">Attente</span>
                                    <?php } ?>
                                    </td>

                                    
                                </tr>

                                <tr>
                                     <td ><b>Description: </b></td>
                                     <td colspan="5"><?php echo htmlentities($result->Description);?></td>
                                      
                                </tr>


                                <tr>
                                     <td ><b>Learning: </b></td>
                                     <td colspan="5"><?php echo htmlentities($result->learn);?></td>
                                      
                                </tr>


                                <tr>
                                     <td ><b>Actions immediate: </b></td>
                                     <td colspan="5"><?php echo htmlentities($result->immediate);?></td>
                                      
                                </tr>

                                <tr>
                                     <td ><b>Photos: </b></td>
                                     
                                     <td colspan="5">
                                        <img src="<?php echo htmlentities($result->file);?>" class="img-avatar img-thumbnail p-0 border-2" >
                                        <img src="<?php echo htmlentities($result->image);?>" class="img-avatar img-thumbnail p-0 border-2" >
                                        <img src="<?php echo htmlentities($result->img);?>" class="img-avatar img-thumbnail p-0 border-2" >

                                     </td>
                                          
                                </tr>

                                <tr>
                                    <td ><b>Admin observations: </b></td>
                                    <td colspan="12"><?php
                                    if($result->AdminRemark==""){
                                    echo "En attente";  
                                    }
                                    else{
                                    echo htmlentities($result->AdminRemark);
                                    }
                                    ?></td>
                                </tr>

                                <tr>
                                <td ><b>Date validation  : </b></td>
                                    <td><?php
                                    if($result->AdminRemarkDate==""){
                                    echo "";  
                                    }
                                    else{
                                    echo htmlentities($result->AdminRemarkDate);
                                    }
                                    ?></td>

                                    
                                </tr>

                                <tr>
                                <td ><b>signer par  : </b></td>
                                    <td><?php
                                    if($result->adminlog==""){
                                    echo "";  
                                    }
                                    else{
                                    echo htmlentities($result->adminlog);
                                    }
                                    ?></td>

                                    
                                </tr>

                                
                                <?php 
                                if($stats==0)
                                {

                                ?>
                           
                            <?php } ?>
                            </form>
                             </tr>
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