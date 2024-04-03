<nav>
        <ul class="metismenu" id="menu">
        <li class="<?php if($page=='dashboard') {echo 'active';} ?>"><a href="dashboard.php"><i class="ti-dashboard"></i> <span>Accueil</span></a></li>
        

        <li class="<?php if($page=='agent') {echo 'active';} ?>"><a href="agent.php"><i class="ti-id-badge"></i> <span>Employees </span></a></li>

        <li class="<?php if($page=='manage-leave') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>Fiche incident</span></a>

            <ul class="collapse">
                <li ><a href="pending-history.php"><i class="fa fa-spinner"></i> En cours</a></li>
                <li ><a href="approved-history.php"><i class="fa fa-check"></i> Terminé</a></li>
                <li ><a href="declined-history.php"><i class="fa fa-times-circle"></i> Terminé partiellement</a></li>
                <li ><a href="leave-history.php"><i class="fa fa-history"></i> Gestion incident</a></li>
                
            </ul>
            
        </li>

        <li class="<?php if($page=='stimulation-history') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span> rapport simulation</span></a>

            <ul class="collapse">
                
                <li ><a href="stimulation-history.php"><i class="fa fa-history"></i> Gestion programme</a></li>
                
                <li ><a href="formulaire-details.php"><i class="fa fa-history"></i> Gestion formulaire</a></li>
                

            </ul>
            
        </li>


<!--
        <li class="<?php if($page=='department') {echo 'active';} ?>"><a href="department.php"><i class="fa fa-th-large"></i> <span>Departement </span></a></li>



         <li class="<?php if($page=='leave') {echo 'active';} ?>"><a href="leave-section.php"><i class="fa fa-sign-out"></i> <span>Type incident</span></a></li>
-->

<li class="<?php if($page=='vehicle') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span> Programme</span></a>

            <ul class="collapse">
                <li ><a href="vehicle.php"><i class="fa fa-check"></i> Programme d'inspection</a></li>
                <li ><a href="sprint.php"><i class="fa fa-check"></i> Rapport d'inspection</a></li>
                <li ><a href="lieu.php"><i class="fa fa-check"></i> Inspection de lieu de travail</a></li>
                <li ><a href="voiture.php"><i class="fa fa-check"></i> Vehicule</a></li>
                <li ><a href="inspection.php"><i class="fa fa-check"></i> Rapport vehicule inspection</a></li>
            </ul>
            
        </li>



 
<li class="<?php if($page=='safety') {echo 'active';} ?>"><a href="safety.php"><i class="fa fa-sign-out"></i> <span>DAILY SAFETY BULLETIN</span></a></li>

<li class="<?php if($page=='janv') {echo 'active';} ?>"><a href="janv.php"><i class="ti-id-badge"></i> <span>gestion des heures </span></a></li>


<li class="<?php if($page=='mts') {echo 'active';} ?>"><a href="mts.php"><i class="ti-id-badge"></i> <span>
MONTHLY LEADING INDICATOR REPORT </span></a></li>


<li class="<?php if($page=='medical-history') {echo 'active';} ?>"><a href="medical-history.php"><i class="fa fa-sign-out"></i> <span>visite medical</span></a></li>

        <li class="<?php if($page=='rapporte') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span> Rapport analyse </span></a>

            <ul class="collapse">
               

               <li class="<?php if($page=='rapporte') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span> incident</span></a>

            <ul class="collapse">
                <li ><a href="rapporte.php"><i class="fa fa-check"></i> Rapport incident</a></li>
               
               

                 <li class="<?php if($page=='analyse') {echo 'active';} ?>">
                         <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span> Statistiques</span></a>
                      <ul class="collapse">
               
                         <li ><a href="analyse.php"><i class="fa fa-check"></i> departement</a></li>
               
                         <li ><a href="piet.php"><i class="fa fa-check"></i> type of incident</a></li>

                         <li ><a href="piesrc.php"><i class="fa fa-check"></i> source of incident</a></li>

                         <li ><a href="pieins.php"><i class="fa fa-check"></i> unsafe act</a></li>

                         <li ><a href="piejob.php"><i class="fa fa-check"></i> job factor</a></li>

                          <li ><a href="piefac.php"><i class="fa fa-check"></i> personal factors</a></li>

                          <li ><a href="pierate.php"><i class="fa fa-check"></i> recurence rate</a></li>

                          <li ><a href="piesever.php"><i class="fa fa-check"></i> severity</a></li>

                     </ul>


                 </li>
                </ul></li>

               

                 <li class="<?php if($page=='injur') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span> injurie</span></a>

            <ul class="collapse">
                <li ><a href="injur.php"><i class="fa fa-check"></i> Rapport of injuries</a></li>
               
               

                 <li class="<?php if($page=='analyse') {echo 'active';} ?>">
                         <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span> Statistiques</span></a>
                      <ul class="collapse">
               
                         <li ><a href="analysedep.php"><i class="fa fa-check"></i> departement</a></li>
               
                         <li ><a href="pietinj.php"><i class="fa fa-check"></i> type of incident</a></li>

                         <li ><a href="piesrcinj.php"><i class="fa fa-check"></i> source of incident</a></li>

                         <li ><a href="pieinsj.php"><i class="fa fa-check"></i> unsafe act</a></li>

                         <li ><a href="piejobj.php"><i class="fa fa-check"></i> job factor</a></li>

                          <li ><a href="piefacj.php"><i class="fa fa-check"></i> personal factors</a></li>

                          <li ><a href="pierate.php"><i class="fa fa-check"></i> recurence rate</a></li>

                          <li ><a href="pieseve.php"><i class="fa fa-check"></i> severity</a></li>

                     </ul>


                 </li>
                </ul></li>
            </ul>
            
        </li>
<!--
        <li class="<?php if($page=='typeincident') {echo 'active';} ?>"><a href="typeincident.php"><i class="ti-id-badge"></i> <span>rapport type incident</span></a></li>

        <li class="<?php if($page=='source') {echo 'active';} ?>"><a href="source.php"><i class="ti-id-badge"></i> <span>SOURCE OF INCIDENT</span></a></li>

        <li class="<?php if($page=='insafe') {echo 'active';} ?>"><a href="insafe.php"><i class="ti-id-badge"></i> <span>UNSAFE CONDITIONA</span></a></li>
-->

          <li class="<?php if($page=='employee') {echo 'active';} ?>"><a href="employees.php"><i class="ti-id-badge"></i> <span>Utilisateur </span></a></li>
         

        <li class="<?php if($page=='manage-admin') {echo 'active';} ?>"><a href="manage-admin.php"><i class="fa fa-lock"></i> <span>Gestion Admin</span></a></li>
                        
       
       <li class="<?php if($page=='filelog') {echo 'active';} ?>"><a href="filelog.php"><i class="fa fa-lock"></i> <span>journal</span></a></li>
                  
    </ul>
</nav>