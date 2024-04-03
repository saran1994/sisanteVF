<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['emplogin'])==0)
        {   
    header('location:../index.php');
    }   else    {
        if(isset($_POST['update']))
        {

        $empid=$_SESSION['eid'];
        $did=intval($_GET['lid']);

        $leavetype=$_POST['leavetype']; 
        
        $info=$_POST['info'];
        
        

        $file=$_POST['file'];
        $image=$_POST['image'];
        $img=$_POST['img'];
        $actuel=$_POST['actuel'];
        $pot=$_POST['pot'];
        $lieu=$_POST['lieu'];
        $cause=$_POST['cause'];
        $learn=$_POST['learn'];
        $pays=$_POST['pays'];
        $operation=$_POST['operation'];
        $immediate=$_POST['immediate'];
        $department=$_POST['department'];
        
        $fromdate=$_POST['fromdate'];  
        $heure=$_POST['heure']; 
        $todate=$_POST['todate'];
        $description=$_POST['description'];
        $status=$_POST['status'];  
          

        $sql="UPDATE tblleaves set 
        LeaveType=:LeaveType,info=:info,actuel=:actuel,pot=:pot,file=:file,image=:image,img=:img,lieu=:lieu,cause=:cause,learn=:learn,pays=:pays,operation=:operation,immediate=:immediate,department=:department,todate=:todate,heure=:heure,fromdate=:fromdate,description=:description,status=:status where id=:did";

        
        $query = $dbh->prepare($sql);
        $query->bindParam(':leavetype',$leavetype,PDO::PARAM_STR);        
        $query->bindParam(':info',$info,PDO::PARAM_STR);
        $query->bindParam(':actuel',$actuel,PDO::PARAM_STR);
        $query->bindParam(':pot',$pot,PDO::PARAM_STR);
        $query->bindParam(':file',$file,PDO::PARAM_STR);
        $query->bindParam(':image',$image,PDO::PARAM_STR);
        $query->bindParam(':img',$img,PDO::PARAM_STR);
        $query->bindParam(':lieu',$lieu,PDO::PARAM_STR);
        $query->bindParam(':cause',$cause,PDO::PARAM_STR);
        $query->bindParam(':learn',$learn,PDO::PARAM_STR);
        $query->bindParam(':pays',$pays,PDO::PARAM_STR);
        $query->bindParam(':operation',$operation,PDO::PARAM_STR);
        $query->bindParam(':immediate',$immediate,PDO::PARAM_STR);
        $query->bindParam(':department',$department,PDO::PARAM_STR);
  
        $query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
        $query->bindParam(':heure',$heure,PDO::PARAM_STR);
        $query->bindParam(':todate',$todate,PDO::PARAM_STR);

        $query->bindParam(':description',$description,PDO::PARAM_STR);
        $query->bindParam(':status',$status,PDO::PARAM_STR);

        $query->bindParam(':did',$did,PDO::PARAM_STR);

        
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();

        if($lastInsertId)
        {
             $msg="bravo!! fiche incident ajouter avec succes.";
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
                                            $sql = "SELECT * from tblleaves WHERE id=:did";
                                            $query = $dbh -> prepare($sql);
                                            $query->bindParam(':did',$did,PDO::PARAM_STR);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {               ?> 
                                    
<b> N°00<?php echo htmlentities($result->id);?></b>
                                    <br><br>

                                    <b>date incident </b> :<?php echo htmlentities($result->FromDate);?>
                                    <br><br>
                                            <b>date enreg </b> :<?php echo htmlentities($result->ToDate);?>

                                            <br><br>
                                            <b>heure incident </b> :<?php echo htmlentities($result->heure);?><br>
<br>
                                    <b> pays </b> : <?php echo htmlentities($result->pays);?><br><br>
                                                <b> operation </b>: <?php echo htmlentities($result->operation);?><br><br>

                                      <b> Type incident</b> : <?php echo htmlentities($result->LeaveType);?>
                                            <br><br>
                                                <b> Lieu </b>: <?php echo htmlentities($result->lieu);?><br><br>
                                                <b> Categorie </b>: <?php echo htmlentities($result->cause);?>
                                           
                                           <br><br>

                                            
                                                <b> Description </b>:<?php echo htmlentities($result->Description);?><br><br>

                                                <b> Learning </b>:<?php echo htmlentities($result->learn);?><br><br>

                                                <b> Actions immediate </b>:<?php echo htmlentities($result->immediate);?><br><br>

                                                <b> Status </b>: 
                                                <?php $stats=$result->Status;
                                                if($stats==1){
                                             ?>
                                                 <span style="color: green">Terminé</span>
                                                 <?php } if($stats==2)  { ?>

                                                <span style="color: red">Terminé partiellement</span>
                                                 <?php } if($stats==0)  { ?>

                                                <span style="color: blue">En cours</span>
                                                <?php } ?>

                                                <br><br>
                                                <b> cause du rejet </b>:
                                                <td><?php if($result->AdminRemark=="")
                                            {
                                            echo htmlentities('En cours');
                                            } else {

                                            echo htmlentities($result->AdminRemark );
                                            
                                            
                                            }
                            
                                            ?>
                                            </td>

                                            <br><br>
                                                <b> Signé le </b>:
                                                <td><?php if($result->adminlog=="")
                                            {
                                            echo htmlentities('En cours');
                                            } else {
                                                echo htmlentities( $result->AdminRemarkDate );
                                           $result->adminlog =
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
            

<?php }             }
                            
                                            ?>
                                            </td>






                                        <?php }
                                        }?>


                                        <br><br>
                                        <a href="leave-history.php" ><p class="btn btn-primary"  >fermer</p></a>
                                        
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