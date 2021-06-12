
<?php
$user="root";
$pass="";
$db="judiciary";
$host="localhost";
$con=mysqli_connect($host,$user,$pass,$db,3308);
if(!$con)
echo "NOT CONNECTED";
else
 $fid=$_POST['fid'];
 $wsdpo=$_POST['wsdpo'];
$wcourt=$_POST['wcourt'];
$wstation=$_POST['wstation'];
$accusedname=$_POST['accusedname'];
$puname= $_SESSION['user'];
$wtime=date("Y/m/d");
$sql = "INSERT INTO warrent VALUES($fid,'$wsdpo','$wstation','$wcourt','$accusedname','$puname',CURDATE())";
if(!mysqli_query($con,$sql))
echo mysqli_error($con);
else    
header("Location:policehome.php");

?>