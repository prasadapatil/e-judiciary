<?php
$user="root";
$pass="sadhana123";
$db="judiciary";
$host="localhost";
$con=mysqli_connect($host,$user,$pass,$db,3308);
if(!$con)
echo "NOT CONNECTED";
else
 $pid=$_POST['pid'];
 $puid=$_POST['puid'];
$pfname=$_POST['pfname'];
$pmname=$_POST['pmname'];
$plname=$_POST['plname'];
$gender= $_POST['gender'];
 $paddress=$_POST['paddress'];
 $pstation=$_POST['pstation'];
$sdpo=$_POST['sdpo'];
$pdistrict=$_POST['pdistrict'];
$pstate=$_POST['pstate'];
$pdesig=$_POST['pdesig'];
$pmob=$_POST['pmob'];
$pemail=$_POST['pemail'];
 $pimg=$_POST['pimg'];
 $puname=$_POST['puname'];
 $ppass=$_POST['ppass'];
$sql = "INSERT INTO police VALUES('$pid','$puid','$pfname','$pmname','$plname','$gender','$paddress','$pstation','$sdpo','$pdistrict','$pstate','$pdesig','$pmob','$pemail','$pimg','$puname','$ppass')";
if(!mysqli_query($con,$sql))
echo mysqli_error($con);
else    
header("Location:police.php");

?>
