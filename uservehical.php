<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h1 align="center">COMPLAINT FOR STOLEN VEHICAL</h1>
<form class="form-horizontal" action="uservehical.php" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" ">VEHICAL OWNERS NAME :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="oname" placeholder="Enter Applicant Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">VEHICAL MODEL :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="vmodel" placeholder="TATA TICSON    ">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">VEHICAL NUMBER :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="vnum" placeholder="MH41 PP1232">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">VEHICAL CHESSI NUMBER :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="vcnum" placeholder="Enter CHESSI NUMBER">
    </div>
  </div> 
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">NEAR POLICE STATION :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="vstation" placeholder="Enter NEAR POLICE STATION">
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
$oname=$_POST['oname'];
$vmodel=$_POST['vmodel'];
$vnum=$_POST['vnum'];
$vcnum=$_POST['vcnum'];
$vstation=$_POST['vstation'];

$sql = "INSERT INTO vehical VALUES('$oname','$vmodel','$vnum','$vcnum','$vstation')";
if(!mysqli_query($con,$sql))
echo mysqli_error($con);
else    
header("Location:userhome.php");
}

?>




