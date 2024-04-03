<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
    if(strlen($_SESSION['alogin'])==0){   
    header('location:index.php');
    } else {
    if(isset($_POST['add'])){

    $first=$_POST['first'];
    $reserve=$_POST['reserve'];
    $tools=$_POST['tools'];
    $stop=$_POST['stop']; 
    $pap=$_POST['pap'];
    $dri=$_POST['dri'];
    $alarm=$_POST['alarm'];
    $ext=$_POST['ext'];
    $seat=$_POST['seat'];
    $voit=$_POST['voit'];
    $saf=$_POST['saf'];   
    $sql="INSERT INTO inspection(first,reserve,tools,stop,pap,dri,alarm,ext,seat,voit,saf) VALUES(:first,:reserve,:tools,:stop,:pap,:dri,:alarm,:ext,:seat,:voit,:saf)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':first',$first,PDO::PARAM_STR);
    $query->bindParam(':reserve',$reserve,PDO::PARAM_STR);
    $query->bindParam(':tools',$tools,PDO::PARAM_STR);
    $query->bindParam(':stop',$stop,PDO::PARAM_STR);
    
    $query->bindParam(':pap',$pap,PDO::PARAM_STR);
    $query->bindParam(':dri',$dri,PDO::PARAM_STR);
    $query->bindParam(':alarm',$alarm,PDO::PARAM_STR);
    $query->bindParam(':ext',$ext,PDO::PARAM_STR);
    $query->bindParam(':seat',$seat,PDO::PARAM_STR);
    
    $query->bindParam(':voit',$voit,PDO::PARAM_STR);
    $query->bindParam(':saf',$saf,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();

    if($lastInsertId){
    $msg="Vehicule Cree avec succes!!";
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
                    <a href="inspection.php"><img src="logo.png" alt="logo">SI-SANTE</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <?php
                        $page='inspection';
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
                            <h4 class="page-title pull-left">rapport Vehicule </h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="inspection.php">Vehicule inspection</a></li>
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
                                
                                <form method="POST">
                                 <div class="card-body">
                                        
                                        <p class="text-muted font-14 mb-4">Veuillez remplir le formulaire afin d'ajouter un Vehicule</p>


                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">
vehicule-info </label>

                                            <select class="custom-select" name="voit"  autocomplete="off" >
                                                <option value="">Choisir..</option>
                                                <?php $sql = "SELECT * from voiture ";
                                                $query = $dbh -> prepare($sql);
                                                $query->execute();
                                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt=1;
                                                if($query->rowCount() > 0){
                                                foreach($results as $result)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($result->ref ." - ".
                                                  $result->marque


                                                );?>"><?php echo htmlentities($result->ref);?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>

<div class="form-group">
                                            <label for="example-text-input" class="col-form-label">vehicle safety</label>
                                            <select class="custom-select" name="saf" autocomplete="off" required id="example-text-input">
                                                <option>choisir..</option>

                                                <option value="The vehicle is safety">The vehicle is safety</option>
                                                <option value="The vehicle is not safety">The vehicle is not safety</option>
                                                
                                                
                                            </select>
                                              
                                        </div>


                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">First aid box
                                             </label>
<br>  
<input type="radio" name="first" value="oui" onclick="showHideDiv(1)" > oui
<input type="radio" name="first" value="non" onclick="showHideDiv(2)" checked> non

<br><br>    
    
<div id="div"><input type="text"  name="first"></div>
<script>
function showHideDiv(val)
{
 if(val ==1)
 {
    document.getElementById('div').style.display='none';
    var ele = document.getElementsByName('first');      
            for(i = 0; i < ele.length; i++) {
                     

                                  if(ele[i].checked)
                     

                                  document.getElementById("div").innerHTML
                     

                                          = "test: "+ele[i].value;
                     

                              }
                    

 }
 if(val ==2)
 {
    document.getElementById('div').style.display='block';   
 }    
}
</script>
                                        </div>
                  <div class="form-group">
         <label for="example-text-input" class="col-form-label">Reserse lignt</label>
                                            <br>  
<input type="radio" name="reserve" value="oui" onclick="showHideDive(1)" > oui
<input type="radio" name="reserve" value="non" onclick="showHideDive(2)" checked> non
<br>       
<div id="divv"><input type="text"  name="reserve"></div>
<script>
function showHideDive(val)
{
 if(val ==1)
 {
    document.getElementById('divv').style.display='none';
    var ele = document.getElementsByName('reserve');
                
                              for(i = 0; i < ele.length; i++) {
                                  if(ele[i].checked)
                    document.getElementById("divv").innerHTML
                       = " "+ele[i].value;
                     }}
 if(val ==2)
 {
    document.getElementById('divv').style.display='block';   
 }    
}
</script>
                                        </div>


                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Tools </label>
                                            
                                               <br>  
<input type="radio" name="tools" value="oui" onclick="showHide(1)" > oui
<input type="radio" name="tools" value="non" onclick="showHide(2)" checked> non
<br>       
<div id="divvv"><input type="text"  name="tools"></div>
<script>
function showHide(val)
{
 if(val ==1)
 {
    document.getElementById('divvv').style.display='none';
    var ele = document.getElementsByName('tools');
                
                              for(i = 0; i < ele.length; i++) {
                                  if(ele[i].checked)
                    document.getElementById("divvv").innerHTML
                       = " "+ele[i].value;
                     }}
 if(val ==2)
 {
    document.getElementById('divvv').style.display='block';   
 }    
}
</script></div>

                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Stoplight</label>
                                            <br>
<input type="radio" name="stop" value="oui" onclick="showHidee(1)" > oui
<input type="radio" name="stop" value="non" onclick="showHidee(2)" checked> non
<br>       
<div id="divvo"><input type="text"  name="stop"></div>
<script>
function showHidee(val)
{
 if(val ==1)
 {
    document.getElementById('divvo').style.display='none';
    var ele = document.getElementsByName('stop');
                
                              for(i = 0; i < ele.length; i++) {
                                  if(ele[i].checked)
                    document.getElementById("divvo").innerHTML
                       = " "+ele[i].value;
                     }}
 if(val ==2)
 {
    document.getElementById('divvo').style.display='block';   
 }    
}
</script>
                                        </div>


              <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">extinguisher </label><br>

<input type="radio" name="ext" value="oui" onclick="showHid(1)" > oui
<input type="radio" name="ext" value="non" onclick="showHid(2)" checked> non
<br>       
<div id="di"><input type="text"  name="ext"></div>
<script>
function showHid(val)
{
 if(val ==1)
 {
    document.getElementById('di').style.display='none';
    var ele = document.getElementsByName('ext');
                
                              for(i = 0; i < ele.length; i++) {
                                  if(ele[i].checked)
                    document.getElementById("di").innerHTML
                       = " "+ele[i].value;
                     }}
 if(val ==2)
 {
    document.getElementById('di').style.display='block';   
 }    
}
</script>
                         </div>

              <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Back alarm </label>
                            <br>

<input type="radio" name="alarm" value="oui" onclick="showHida(1)" > oui
<input type="radio" name="alarm" value="non" onclick="showHida(2)" checked> non
<br>       
<div id="dia"><input type="text"  name="alarm"></div>
<script>
function showHida(val)
{
 if(val ==1)
 {
    document.getElementById('dia').style.display='none';
    var ele = document.getElementsByName('alarm');
                
                              for(i = 0; i < ele.length; i++) {
                                  if(ele[i].checked)
                    document.getElementById("dia").innerHTML
                       = " "+ele[i].value;
                     }}
 if(val ==2)
 {
    document.getElementById('dia').style.display='block';   
 }    
}
</script>
                                        </div>


              <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">seat belt </label>
 <br>

<input type="radio" name="seat" value="oui" onclick="showHids(1)" > oui
<input type="radio" name="seat" value="non" onclick="showHids(2)" checked> non
<br>       
<div id="dii"><input type="text"  name="seat"></div>
<script>
function showHids(val)
{
 if(val ==1)
 {
    document.getElementById('dii').style.display='none';
    var ele = document.getElementsByName('seat');
                
                              for(i = 0; i < ele.length; i++) {
                                  if(ele[i].checked)
                    document.getElementById("dii").innerHTML
                       = " "+ele[i].value;
                     }}
 if(val ==2)
 {
    document.getElementById('dii').style.display='block';   
 }    
}
</script>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Driving license </label>
       <br>

<input type="radio" name="dri" value="oui" onclick="showHidc(1)" > oui
<input type="radio" name="dri" value="non" onclick="showHidc(2)" checked> non
<br>       
<div id="dic"><input type="text"  name="dri"></div>
<script>
function showHidc(val)
{
 if(val ==1)
 {
    document.getElementById('dic').style.display='none';
    var ele = document.getElementsByName('dri');
                
                              for(i = 0; i < ele.length; i++) {
                                  if(ele[i].checked)
                    document.getElementById("dic").innerHTML
                       = " "+ele[i].value;
                     }}
 if(val ==2)
 {
    document.getElementById('dic').style.display='block';   
 }    
}
</script>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">admin papers </label>
 <br>

<input type="radio" name="pap" value="oui" onclick="showHidp(1)" > oui
<input type="radio" name="pap" value="non" onclick="showHidp(2)" checked> non
<br>       
<div id="dip"><input type="text"  name="pap"></div>
<script>
function showHidp(val)
{
 if(val ==1)
 {
    document.getElementById('dip').style.display='none';
    var ele = document.getElementsByName('pap');
                
                              for(i = 0; i < ele.length; i++) {
                                  if(ele[i].checked)
                    document.getElementById("dip").innerHTML
                       = " "+ele[i].value;
                     }}
 if(val ==2)
 {
    document.getElementById('dip').style.display='block';   
 }    
}
</script>
                                        </div>




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