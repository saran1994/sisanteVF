<p>
                                         <input class="form-control" type="text"   id="lieu" name="lieu" value="<?php echo htmlentities($result->lieu);?>">
                                     </p>


                                    <br>

                                     <p>
                                         <input class="form-control" type="text"   id="cause" name="cause" value="<?php echo htmlentities($result->cause);?>" >
                                     </p>

                                     
                                     
<br>

<p>
    <select class="custom-select" name="info" autocomplete="off">
                                                <option value="<?php echo htmlentities($result->idagent);?> -
                                                <?php echo htmlentities($result->FirstName." ".$result->LastName);?> -

                                                <?php echo htmlentities($result->Department);?> -

                                                <?php echo htmlentities($result->EmailId." ".$result->Phonenumber);?>

                                                "><?php echo htmlentities($result->idagent);?> -
                                                <?php echo htmlentities($result->FirstName." ".$result->LastName);?> -

                                                <?php echo htmlentities($result->Department);?> -

                                                <?php echo htmlentities($result->EmailId." ".$result->Phonenumber);?>

                                                </option>

                                                <?php $sql = "SELECT * from agent where status=1 ";
                                                    $que = $dbh -> prepare($sql);
                                                    $que->execute();
                                                    $resultsi=$que->fetchAll(PDO::FETCH_OBJ);
                                                    
                                                    if($que->rowCount() > 0) {
                                                        foreach($resultsi as $resulta)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($resulta->idagent);?> -
                                                <?php echo htmlentities($resulta->FirstName." ".$resulta->LastName);?> -

                                                <?php echo htmlentities($resulta->Department);?> -

                                                <?php echo htmlentities($resulta->EmailId." ".$resulta->Phonenumber);?>

                                                ">

                                              <?php echo htmlentities($resulta->idagent);?>
                                              
                                               

                                                    

                                                </option>
                                                <?php }
                                            } ?>
                                            </select>
</p><br>

<p> <select class="custom-select" name="leavetype" >
                                        <option value="<?php echo htmlentities($result->LeaveType);?>"><?php echo htmlentities($result->LeaveType);?></option>
                                        
                                        <?php $sql = "SELECT LeaveType from tblleavetype";
                                                    $quer = $dbh -> prepare($sql);
                                                    $quer->execute();
                                                    $resultss=$quer->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt=1;
                                                    if($quer->rowCount() > 0) {
                                                        foreach($resultss as $resulti)
                                                {   ?> 
                                                <option value="<?php echo htmlentities($resulti->LeaveType);?>"><?php echo htmlentities($resulti->LeaveType);?></option>
                                                <?php }
                                            } ?>
                                    </select></p>


                                     <br>

                                        <p> <select class="custom-select" name="actuel" >
                                        <option value="<?php echo htmlentities($result->cause);?>"><?php echo htmlentities($result->actuel);?></option>
                                        <option value="Faible">Faible</option>
                                        <option value="Mineur">Mineur</option>
                                        <option value="Moderer">Moderer</option>
                                        <option value="Elever">Elever</option>
                                    </select></p>
<br>
                                     <p>
                                         
 <p> <select class="custom-select" name="pot" >
                                        <option ><?php echo htmlentities($result->pot);?></option>
                                        <option value="Faible">Faible</option>
                                        <option value="Mineur">Mineur</option>
                                        <option value="Moderer">Moderer</option>
                                        <option value="Elever">Elever</option>
                                    </select></p>
                                     </p>


                                    <br>


                                    <p>


                                        <!DOCTYPE html>
<html>
 <head>
  <title>si-sante</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 
 <body>
 

<h6 align="left"><small> veuillez choisir au minimum une image </small></h6><br>
  <div  style="width:50px;">
   
    <div ><input type="file"  accept="image/*" name="file" id="file"  onchange="loadFile(event)"   style="display: none; " align="right"  ><button class="btn btn-sm btn-primary" type="button" style="" onclick="document.getElementById('file').click()">choisir image 1</button>
         <br><br>
       <input type="file"  accept="image/*" name="image" id="image"  onchange="lireFile(event)" style="display: none;" >
   <button class="btn btn-sm btn-primary" style="position: relative;" type="button" onclick="document.getElementById('image').click()">choisir image 2</button>

   <br><br>
       <input type="file"  accept="image/*" name="img" id="img"  onchange="retourFile(event)" style="display: none;" >
   <button class="btn btn-sm btn-primary" style="float:left;" type="button" onclick="document.getElementById('img').click()">choisir image 3</button>
   
   </div>
 <br><br> <br>
<p style="border:1px solid #000; height:180px; width:520px; padding:25px; float:left; ">
    <img id="output" width="100" />    <img id="sortir" width="100" /> <img id="retour" width="100" /></p>
<p style="color: white;">
</p>  



<script>
var loadFile = function(event) {
    var file = document.getElementById('output');
    file.src = URL.createObjectURL(event.target.files[0]);
};


var lireFile = function(event) {
    var image = document.getElementById('sortir');
    image.src = URL.createObjectURL(event.target.files[0]);
};

var retourFile = function(event) {
    var img = document.getElementById('retour');
    img.src = URL.createObjectURL(event.target.files[0]);
};
</script>
   <br />
   <span id="uploaded_image">  </span>
    <span id="down_image"> </span>
    <span id="retour_image"> </span>
  </div>






  


 </body>
</html>

<script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"../employees/upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,

    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>patientez...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});

$(document).ready(function(){
 $(document).on('change', '#image', function(){
  var name = document.getElementById("image").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("image").files[0]);
  var f = document.getElementById("image").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("image", document.getElementById('image').files[0]);
   $.ajax({
    url:"../employees/upload1.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,

    beforeSend:function(){
     $('#down_image').html("<label class='text-success'>patientez...</label>");
    },   
    success:function(data)
    {
     $('#down_image').html(data);
    }
   });
  }
 });
});


$(document).ready(function(){
 $(document).on('change', '#img', function(){
  var name = document.getElementById("img").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Image Invalide ");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("img").files[0]);
  var f = document.getElementById("img").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("taille trop large ");
  }
  else
  {
   form_data.append("img", document.getElementById('img').files[0]);
   $.ajax({
    url:"../employees/upload2.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,

    beforeSend:function(){
     $('#retour_image').html("<label class='text-success'>patientez...</label>");
    },   
    success:function(data)
    {
     $('#retour_image').html(data);
    }
   });
  }
 });
});
</script>
                                    </p>
                                    
                                </div>