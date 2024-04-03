<?php
        /* exporter vers excel */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EmployeeLeave";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}                
$query = "SELECT * FROM medical ";
$result = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
$records = array();
while( $rows = mysqli_fetch_assoc($result) ) {
  $records[] = $rows;
} 
if(isset($_POST["export_csv_data"])) {  
  $csv_file = "exporter_".date('Ymd') . ".csv";      
  header("Content-Type: text/csv");
  header("Content-Disposition: attachment; filename=\"$csv_file\"");  
  $fh = fopen( 'php://output' , 'w' );
  $is_coloumn = true;
  if(!empty($records)) {
    foreach($records as $record) {
    if($is_coloumn) {         
     // fputcsv($fh, array_keys($record));
      $is_coloumn = false;
    }   
    fputcsv($fh, array_values($record));
    }
     fclose($fh);
  }
  exit;  
}

    session_start();
    error_reporting(0);
    include('includes/dbconn.php');

    if(strlen($_SESSION['emplogin'])==0){   
    header('location:../index.php');
    }   else    {

        if(isset($_GET['del']))
    {
    $idformul=$_GET['del'];
    $sql = "DELETE from  medical  WHERE idmedical=:idmedical";
    $query = $dbh->prepare($sql);
    $query -> bindParam(':idmedical',$idmedical, PDO::PARAM_STR);
    $query -> execute();
    $msg=" supprimer avec succes";

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
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
    .img-avatar{
        width:45px;
        height:45px;
        object-fit:cover;
        object-position:center center;
        border-radius:100%;
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

                            <li class="#">
                                <a href="leave.php" aria-expanded="true"><i class="ti-user"></i><span>Fiche incident
                                    </span></a>
                            </li>

                            <li class="#">
                                <a href="leave-history.php" aria-expanded="true"><i class="ti-agenda"></i><span>Gestion incident
                                    </span></a>
                            </li>

<li class="#">
                                <a href="liste.php" aria-expanded="true"><i class="ti-agenda"></i><span>voir incident 
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
                
                <li class="active"><a href="formul.php"><i class="fa fa-check"></i> Formulaire d'inspection</a></li>
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
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Gestion medical</h4>
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

                                  <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Gestion des visites medicales </h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="proram.php">visites medicales</a></li>
                                <li><span>Ajouter</span></li>
                                
                            </ul>
                        </div>
                    </div>

                                <div class="card-body">
                                <div class="data-tables datatable-dark">
                                <center><a href="add-medical.php" class="btn btn-sm btn-info">Ajouter </a>
<div class="btn-group pull-right">  
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">         
        <button style="float: right;" type="submit" id="export_csv_data" name='export_csv_data' value="Export to CSV" class="btn btn-info" >Exporter vers excel</button>
      </form>
    

    </div>  
                                </center><br>
                                <div id="sectionAimprimer">

                       
            
                                    <table id="dataTable3" class="table table-hover table-striped text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>#</th> 
                                                <th>nom/prenon</th>
                                                <th>nom societe</th>
                                                <th>date demande</th>
                                                <th>status</th>
                                                <th >actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php 
                                    

                                    $eid=$_SESSION['eid'];
                                    $sql = "SELECT * from medical where empid=:eid ";
                                    $query = $dbh -> prepare($sql);
                                    $query->bindParam(':eid',$eid,PDO::PARAM_STR);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt=1;
                                    if($query->rowCount() > 0)
                                    {
                                    foreach($results as $result)
                                    {               ?>  
                                        <tr>
                                          
                                            
                                           <td>N°<?php echo htmlentities($result->idmedical);?></td>
<td><?php echo htmlentities($result->nom);?></td>
                                            <td><?php echo htmlentities($result->site);?></td>
                                            <td><?php echo htmlentities($result->dvisite);?></td>
                                            

                                            
                                            
                                         
                                          

                                            <td> <?php $stats=$result->status;
                                                if($stats==1){
                                             ?>
                                                 <span style="color: green">Terminé</span>
                                                 <?php } if($stats==2)  { ?>

                                                <span style="color: red">Terminé partiellement</span>
                                                <a href="rejet-med.php?lid=<?php echo htmlentities($result->idmedical);?>"><p class="btn btn-success">Détails</p></a>
                                                

                                                 <?php } if($stats==0)  { ?>

                                                <span style="color: blue">En cours</span>
                                                <?php } ?>

                                             </td>
                                             <td>
<!-- imprimer  -->
<a href="impmedical.php?idmedical=<?php echo htmlentities($result->idmedical);?>" >voir</i> </a>
                                            </td>
                                        </tr>
                                         <?php $cnt++;} }



                                         ?>
                                    </tbody>
                                    </table>

                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
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