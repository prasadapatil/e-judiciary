<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h1 align="center">APPLICATION FOR NO OBJECTION CERTIFICATE</h1>
<form class="form-horizontal" action="usernoc.php" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">APPLICANT NAME :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nocapp" placeholder="Enter Applicant Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">APPLICANTS ADHAR NUMBER :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nocuid" placeholder="Enter APPLICANTS ADHAR NUMBER">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">PURPOSE OF CERTIFICATE :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nocpur" placeholder="WHY YOU NEED CERTIFICATE">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">APPLICANTS PERMANANT ADDRESS :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nocaddrs" placeholder="Enter APPLICANTS address">
    </div>
  </div> 
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">NEAR POLICE STATION :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nocstation" placeholder="Enter NEAR POLICE STATION">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-danger">Apply</button>
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
$nocapp=$_POST['nocapp'];
$nocuid=$_POST['nocuid'];
$nocpur=$_POST['nocpur'];
$nocaddrs=$_POST['nocaddrs'];
$nocstation=$_POST['nocstation'];

$sql = "INSERT INTO usernoc VALUES('$nocapp','$nocuid','$nocpur','$nocaddrs','$nocstation')";
if(!mysqli_query($con,$sql))
echo mysqli_error($con);
else    
header("Location:userhome.php");
}

?>




