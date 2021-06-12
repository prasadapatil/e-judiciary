<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h1 align="center">REGISTER YOUR COMPLAINT</h1>
<form class="form-horizontal" action="usercomplain.php" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">COMPLAINT APPLICANT NAME :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="capp" placeholder="Enter Applicant Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">COMPLAINT RESPONDENT NAME :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cresp" placeholder="Enter RESPONDENT Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">COMPLAINT DESCRIPTION :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cdesc" placeholder="Enter COMPLAINT DESCRIPTION">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">COMPLAINT ADDRESS :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="caddrs" placeholder="Enter Compalint address">
    </div>
  </div> 
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">NEAR POLICE STATION :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cpstation" placeholder="Enter NEAR POLICE STATION">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
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
$capp=$_POST['capp'];
$cresp=$_POST['cresp'];
$cdesc=$_POST['cdesc'];
$caddrs=$_POST['caddrs'];
$cpstation=$_POST['cpstation'];

$sql = "INSERT INTO usercomplain VALUES('$capp','$cresp','$cdesc','$caddrs','$cpstation')";
if(!mysqli_query($con,$sql))
echo mysqli_error($con);
else    
header("Location:userhome.php");
}
;
?>




