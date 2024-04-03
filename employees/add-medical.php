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


    

    $empid=$_SESSION['eid'];
    $status=0;
    $isread=0;     
    $site=$_POST['site'];
    $dvisite=$_POST['dvisite'];
    $nom=$_POST['nom'];
    $vis=$_POST['vis']; 
    $ref=$_POST['ref'];
    $eng=$_POST['eng'];
    $per=$_POST['per'];
    $trans=$_POST['trans'];
    $sort=$_POST['sort'];
    $spec=$_POST['spec'];
    $bne=$_POST['bne'];
    $yeu=$_POST['yeu'];
    $coul=$_POST['coul'];
    $nui=$_POST['nui'];
    $bru=$_POST['bru'];

    $sql="INSERT INTO medical (site,dvisite,isread,status,vis,ref,nom,empid,eng,per,trans,sort,spec,bne,yeu,coul,nui,bru) VALUES(:site,:dvisite,:isread,:status,:vis,:ref,:nom,:empid,:eng,:per,:trans,:sort,:spec,:bne,:yeu,:coul,:nui,:bru)";
    $query = $dbh->prepare($sql);
    
    $query->bindParam(':site',$site,PDO::PARAM_STR);
    $query->bindParam(':ref',$ref,PDO::PARAM_STR);
    $query->bindParam(':nom',$nom,PDO::PARAM_STR);
    $query->bindParam(':vis',$vis,PDO::PARAM_STR);
    $query->bindParam(':dvisite',$dvisite,PDO::PARAM_STR);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->bindParam(':isread',$isread,PDO::PARAM_STR);
    $query->bindParam(':empid',$empid,PDO::PARAM_STR);
    $query->bindParam(':eng',$eng,PDO::PARAM_STR);
    $query->bindParam(':per',$per,PDO::PARAM_STR);
    $query->bindParam(':trans',$trans,PDO::PARAM_STR);
    $query->bindParam(':sort',$sort,PDO::PARAM_STR);
    $query->bindParam(':spec',$spec,PDO::PARAM_STR);

    $query->bindParam(':bne',$bne,PDO::PARAM_STR);
    $query->bindParam(':nui',$nui,PDO::PARAM_STR);
    $query->bindParam(':bru',$bru,PDO::PARAM_STR);
    $query->bindParam(':yeu',$yeu,PDO::PARAM_STR);
    $query->bindParam(':coul',$coul,PDO::PARAM_STR);
    $query->execute();


    $lastInsertId = $dbh->lastInsertId();

    if($lastInsertId){
    $msg=" Cree avec succes!!";
    } else {

    $error="Something went wrong. Please try again";

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

                            <li class="#">
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
                <li class="#"><a href="formul.php"><i class="fa fa-check"></i> Formulaire d'inspection</a></li>
            </ul>
            
        </li>

          <li class="active">
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
                            <li id="full-view-exit"><i class="ti-zoom-out"></i>

                            </li>
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


                                   
                                  <form method="POST" >
                                 <div class="card-body">
                                        
                                        <p class="text-muted font-14 mb-4">Veuillez remplir le formulaire afin d'ajouter </p>


                                        <div class="form-group">
                                            <label class="col-form-label"> Infos-Employees</label>
                                            <select class="custom-select" name="nom" autocomplete="off" required>
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

                                                

                                                <?php echo htmlentities($result->Dob." ".$result->Address." ".$result->Department." ".$result->poste);?>

                                                ">

                                              <?php echo htmlentities($result->idagent);?>
                                                    

                                                </option>
                                                <?php }
                                            } ?>
                                            </select>
                                        </div>

                                        

                                        <div class="form-group" >
                                            <label for="example-date-input" class="col-form-label">nom societe</label>
                                            <select class="custom-select" name="site" autocomplete="off" required>
                                                <option value=""> Choisir ...</option>
                                                <option value="SADIOLA">SADIOLA</option>
                                                <option value="SEMOS">SEMOS</option>
                                                <option value="BONIKORO">BONIKORO</option>
                                                <option value="AGBAWOU">AGBAWOU</option>
                                            </select>
                                        </div>

                                        <div class="form-group" >
                                            <label for="example-date-input" class="col-form-label">date de la demande </label>
                                            <input class="form-control" type="date"    name="dvisite" required>
                                        </div>


                                        
                                        <div class="form-group" >
                                            <label for="example-date-input" class="col-form-label">La dernière visite médicale de cet employé a eu lieu le : </label>
                                            <input class="form-control" type="date"    name="vis" required>
                                        </div>

                                   

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">L'évaluation médicale suivante est nécessaire aujourd'hui : (utilisez le signe ✓ )
                                             </label>
<br>  
Référence initiale : <input type="checkbox" name="ref" value="✓"  ><br>
Réengagement : <input type="checkbox" name="eng" value="✓"  ><br>
Périodique : <input type="checkbox" name="per" value="✓"  ><br>
Transfert : <input type="checkbox" name="trans" value="✓"  ><br>
Sortie : <input type="checkbox" name="sort" value="✓"  ><br>
Spécial  <small> Veuillez indiquer la raison : </small><input type="checkbox" name="spec" value="✓"  > <input type="text" name="spec"  placeholder ="commentez..."> 
 
                                        </div>

    <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Risques pour la santé au travail :<small> indiquez les risques propres à l'emploi et décrivez si nécessaire</small>
                                             </label>

<br>
 A-t-il besoin d'une bonne vision ?  <input type="checkbox" name="bne" value="✓"  > <input type="text" name="bne"  placeholder ="commentez..."> 

 <br> <br>
 Doit-il voir avec deux yeux ?  <input type="checkbox" name="yeu" value="✓"  > <input type="text" name="yeu"  placeholder ="commentez...">


<br> <br>
  La vision des couleurs est-elle nécessaire ? <input type="checkbox" name="coul" value="✓"  > <input type="text" name="coul"  placeholder ="commentez...">
      

      <br> <br>
  A-t-il besoin d'une bonne vision de nuit ? <input type="checkbox" name="nui" value="✓"  > <input type="text" name="nui"  placeholder ="commentez...">
      

      <br> <br>
  Est-il exposé au bruit ? <input type="checkbox" name="bru" value="✓"  > <input type="text" name="bru"  placeholder ="commentez...">
                             

     </div>
                

 <button class="btn btn-primary" name="apply" id="apply" type="submit">Enregistrer</button>
                                        
                                    </div>
                                    </form>
                        </div> 


                    </div><!-- fin table -->
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