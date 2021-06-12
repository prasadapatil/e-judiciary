<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h1 align="center">MISSING PERSON REPORT</h1>
<form class="form-horizontal" action="missinguserperson.php" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" ">MISSING PERSONS PHOTO :</label>

      <input type="file" class="ustom-file-input" name="mp">

  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">MISSING PERSONS NAME :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mname" placeholder="   ">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">MISSING PERSONS AGE:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mage" placeholder="10">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">SKIN TONE :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mcolor" placeholder="FAIR">
    </div>
  </div> 
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">HEIGHT:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mheight" placeholder="4.2">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">BLOOD GROUP:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mbgrp" placeholder="o+">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">LAST SCEEN LOCATION :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mllocation" placeholder="satana">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">PERMANANT ADDRESS :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="maddrs" placeholder="">
    </div>
  </div>
 

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">CONTACT MOBILE NUMBER :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mcon" placeholder="9420xxxxxx">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-danger">Register</button>
    </div>
  </div>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$user="root";
$pass="";
$db="judiciary";
$host="localhost";
$con=mysqli_connect($host,$user,$pass,$db,3308);
if(!$con)
echo "NOT CONNECTED";
else
$mp=$_POST['mp'];
$vmname=$_POST['mname'];
$mage=$_POST['mage'];
$mcolor=$_POST['mcolor'];
$mheight=$_POST['mheight'];
$mbgrp=$_POST['mbgrp'];
$mllocation=$_POST['mllocation'];
$maddrs=$_POST['maddrs'];
$mcon=$_POST['mcon'];


$sql = "INSERT INTO missing VALUES('$mp','$mname','$mage','$mcolor','$mheight','$mbgrp','$mllocation','$maddrs','$mcon')";
if(!mysqli_query($con,$sql))
echo mysqli_error($con);
else    
header("Location:userhome.php");
}

?>




