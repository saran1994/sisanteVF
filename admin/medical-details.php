<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
    } else {

    // code for update the read notification status
    $isread=1;
    $did=intval($_GET['idmedical']);  
    date_default_timezone_set('Africa/bamako');
    $adminremarkdat=date('d-m-y G:i:s ', strtotime("now"));
    $sql="UPDATE medical set isread=:isread where idmedical=:did";
    $query = $dbh->prepare($sql);
    $query->bindParam(':isread',$isread,PDO::PARAM_STR);
    $query->bindParam(':did',$did,PDO::PARAM_STR);
    $query->execute();

    // code for action taken on leave
    if(isset($_POST['update'])){ 
    $did=intval($_GET['idmedical']);
    $adminremark=$_POST['adminremark'];
    
    $status=$_POST['status'];   
    date_default_timezone_set('Africa/bamako');
    $adminremarkdat=date('d-m-y G:i:s ', strtotime("now"));
    $adminlog= $username=$_SESSION['alogin'];

    $sql="UPDATE medical set adminremark=:adminremark,status=:status,adminremarkdat=:adminremarkdat,adminlog=:adminlog where idmedical=:did";
    $query = $dbh->prepare($sql);
    $query->bindParam(':adminremark',$adminremark,PDO::PARAM_STR);
    $query->bindParam(':adminlog',$adminlog,PDO::PARAM_STR);
    
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->bindParam(':adminremarkdat',$adminremarkdat,PDO::PARAM_STR);
    $query->bindParam(':did',$did,PDO::PARAM_STR);
    $query->execute();
    $msg="fiche traite avec succes!! ";

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
                    <?php $page="stimulation-details";
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
                            <h4 class="page-title pull-left">visite medical</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard.php">Accueil</a></li>
                                <li><span>Details medical</span></li>
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
<a href="medical-history.php" onClick="imprimer('sectionAimprimer')" class="btn btn-success"><i class="fa fa-print">IMPRIMER</i> </a>

                        <div class="card">
                            <div class="card-body">
                                
                                <div class="single-table" >
                                    <div class="table-responsive" id="sectionAimprimer">
        
                    <img src="logo.png" > 
                                        <table class="table table-bordered table-hover text-left" >
                                            
                                            <tbody>

                                            <?php 
                                            $lid=intval($_GET['idmedical']);
                                            $sql = "SELECT medical.idmedical as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.EmpId,tblemployees.id,tblemployees.EmailId,medical.nom,medical.isread,medical.status,medical.datpost,medical.adminremark,medical.adminremarkdat,medical.dvisite,medical.site,medical.ref,medical.eng,medical.per,medical.trans,medical.sort,medical.spec,medical.bne,medical.yeu,medical.nui,medical.bru,medical.coul,medical.adminlog from medical join tblemployees on medical.empid=tblemployees.id where medical.idmedical=:lid";
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
                                                    <td ><B> M00<?php echo htmlentities($result->lid);?></B></td>

                                                    <td> <b> Username:</b></td>
                                            <td  ><?php echo htmlentities($result->EmpId);?></td>
                                              <td colspan="1"><a href="update-employee.php?empid=<?php echo htmlentities($result->id);?>" target="_blank">
                                                <?php echo htmlentities($result->FirstName." ".$result->LastName);?></a></td>
                                                   
                                                </tr>

                                               <tr>
                                                <td colspan="3"><b>infos-employees:</b></td>
                                                <td colspan="5"><?php echo htmlentities($result->nom);?></td>
                                            </tr>
                                                <tr>
                                                

                                                <td ><b>date derniere visite:</b></td>
                                              <td><?php echo htmlentities($result->dvisite);?></td>
                                              <td> <b> site:</b></td>
                                              <td ><?php echo htmlentities($result->site);?></td>
                                            
                                          </tr>

<tr>
    <td> <b> reference initial:</b></td>
    <td ><?php echo htmlentities($result->ref);?></td>
    <td> <b> Réengagement:</b></td>
    <td ><?php echo htmlentities($result->eng);?></td>
</tr>

<tr>
    <td> <b> Périodique:</b></td>
    <td ><?php echo htmlentities($result->per);?></td>
    <td> <b> Transfert:</b></td>
    <td ><?php echo htmlentities($result->trans);?></td>
</tr>

<tr>
    <td> <b> Sortie:</b></td>
    <td ><?php echo htmlentities($result->sort);?></td>
    <td> <b> Spécial  <small> Veuillez indiquer la raison :</b></td>
    <td ><?php echo htmlentities($result->spec);?></td>
</tr>

<tr>
    <td> <b> A-t-il besoin d'une bonne vision ?</b></td>
    <td ><?php echo htmlentities($result->bne);?></td>
    <td> <b> Doit-il voir avec deux yeux ? </b></td>
    <td ><?php echo htmlentities($result->yeu);?></td>
</tr>
                                          
<tr>
    <td> <b> La vision des couleurs est-elle nécessaire ? </b></td>
    <td ><?php echo htmlentities($result->coul);?></td>
    <td> <b> A-t-il besoin d'une bonne vision de nuit ? </b></td>
    <td ><?php echo htmlentities($result->nui);?></td>
    <td> <b> Est-il exposé au bruit ? </b></td>
    <td ><?php echo htmlentities($result->bru);?></td>
</tr>


                                <tr>
                                <td ><b>Date envoi:</b></td>
                                <td><?php echo htmlentities($result->datpost);?></td>

                                <td ><b>Status:</b></td>
                                <td><?php $stats=$result->status;
                                if($stats==1){
                                ?>
                                    <span style="color: green">Terminé</span>
                                    <?php } if($stats==2)  { ?>
                                    <span style="color: red">Terminé partiellement</span>
                                    <?php } if($stats==0)  { ?>
                                    <span style="color: blue">En cours</span>
                                    <?php } ?>
                                    </td>

                                    
                                </tr>

                                


                               
                                <tr>
                                    <td ><b>Admin observations: </b></td>
                                    <td colspan="12"><?php
                                    if($result->adminremark==""){
                                    echo "En cours";  
                                    }
                                    else{
                                    echo htmlentities($result->adminremark);
                                    }
                                    ?></td>
                                </tr>

                                <tr>
                                <td ><b>Date validation  : </b></td>
                                    <td><?php
                                    if($result->adminremarkdat==""){
                                    echo "";  
                                    }
                                    else{
                                    echo htmlentities($result->adminremarkdat);
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
                                    $result->adminlog=
    $username=$_SESSION['alogin'];
    $sql = "SELECT fullname,username,poste from  admin where username=:username";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    
  
    
        foreach($results as $result)
    {    ?>
         <b> <p style="color:gold;"><?php echo htmlentities($result->fullname);?></p></b>
         <b><?php echo htmlentities($result->poste); ?></b>
            

<?php }
                                    
                                    }
                                    ?></td>

                                    
                                </tr>

                                <tr>
                                

                                    
                                </tr>

                                
                                <?php 
                                if($stats==0)
                                {

                                ?>
                            <tr>

                            <td colspan="12" >

                            <button type="button" style="margin-left: 500px;" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">traiter la fiche</button>


                           

                           
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Enregistrer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form method="POST" name="adminaction">
                                <div class="modal-body">
                                
                                    <select class="custom-select" name="status" required="">
                                        <option value="">Choisir...</option>
                                        <option value="1">Terminé</option>
                                        <option value="2">Terminé partiellement</option>
                                    </select></p>
                                    <br>
                                    <p><textarea id="adminremark" name="adminremark" class="form-control" placeholder="description" row="5" maxlength="500" required></textarea></p>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-success" name="update">Enregistrer</button>
                                </div>
                                </div>
                            </div>
                            </div>

                            </td>
                            </tr>
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