<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
    } else {
    if(isset($_POST['add'])){

    
    $datee=$_POST['datee'];
    $task=$_POST['task'];
    $res=$_POST['res'];
    

    $sql="INSERT INTO vehicle (datee,task,jour,res) VALUES(:datee,:task,:res)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':datee',$datee,PDO::PARAM_STR);
    $query->bindParam(':task',$task,PDO::PARAM_STR);
    $query->bindParam(':res',$res,PDO::PARAM_STR);
    
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();

    if($lastInsertId){
    $msg=" Cree avec succes!!";
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
    <script src="choices.min.js"></script>
    <!-- modernizr css -->
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
                    <a href="vehicle.php"><img src="logo.png"s alt="logo">SI-SANTE</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <?php
                        $page='vehicle';
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
                            <h4 class="page-title pull-left">Gestion Programme d'inspection </h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="">Programme d'inspection</a></li>
                                <li><span>Ajouter un Programme d'inspection</span></li>
                                
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
                                
                                <form method="POST" action="code.php">
                                 <div class="card-body">
                                        
                                        <p class="text-muted font-14 mb-4">Veuillez remplir le formulaire afin d'ajouter un nouveau </p>
                                        
                                      <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">task description </label>
                                            <textarea class="form-control" name="task" type="text" required id="example-text-input"></textarea>
                                            
                                        </div>

                                       
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">date </label>

                                            <input class="form-control" name="datee" type="date" required id="example-text-input" >
                                        </div>
                                     <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Responsible
Person </label>

                                            <select class="custom-select" name="res[]" id="choices-text-remove-buttonn"  autocomplete="off" multiple>
                                                <option value=""> Choisir ...</option>

                                                <?php $sql = "SELECT * from tblemployees where Status=1 ";
                                                    $query = $dbh -> prepare($sql);
                                                    $query->execute();
                                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                    
                                                    if($query->rowCount() > 0) {
                                                        foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->EmailId
                                                ." &  ". $result->Department);?> 

                                                ">

                                              <?php echo htmlentities($result->EmailId);?>
                                                    

                                                </option>
                                                <?php }
                                            } ?>
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

    <script>
     
        var textRemove = new Choices(
          document.getElementById('choices-text-remove-buttonn'),
          {
            delimiter: ',',
            editItems: true,
            maxItemCount: 5,
            removeItemButton: true,
          }
        );

    </script>

                                        <button class="btn btn-primary" name="add" id="add" style="width: 100px; " type="submit">Enregistrer</button>
                                        
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