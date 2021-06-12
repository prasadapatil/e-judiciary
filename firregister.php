<?php
session_start();
$user="root";
$pass="";
$db="judiciary";
$host="localhost";
$con=mysqli_connect($host,$user,$pass,$db,3308);
if(!$con)
echo "NOT CONNECTED";
else
 $fid=$_POST['fid'];
 $fsdpo=$_POST['fsdpo'];
$fcourt=$_POST['fcourt'];
$fstation=$_POST['fstation'];
$fname=$_POST['fname'];
$fmob= $_POST['fmob'];
 $fplace=$_POST['fplace'];
 $fdist=$_POST['fdist'];
$ftime=$_POST['ftime'];
$fdate=$_POST['fdate'];
$fcrime=$_POST['fcrime'];
$fsection=$_POST['fsection'];
$fdesc=$_POST['fdesc'];
$frespondent=$_POST['frespondent'];
 $puname=$_SESSION['user'];
$frtime= date("h:i");  
$sql = "INSERT INTO fir VALUES($fid,'$fsdpo','$fcourt','$fstation','$fname','$fmob','$fplace','$fdist','$ftime','$fdate','$fcrime','$fsection','$fdesc','$frespondent','$puname','$frtime')";
if(!mysqli_query($con,$sql))
echo mysqli_error($con);
else    
header("Location:policehome.php");

?>
