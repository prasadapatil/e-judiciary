<?php

$user="root";
$pass="";
$db="judiciary";
$host="localhost";
$con=mysqli_connect($host,$user,$pass,$db,3308);
if(!$con)
echo "NOT CONNECTED";
else
$name=$_POST['name'];
$gender=$_POST['gender'];
$uaddress= $_POST['uaddress'];
$ustate=$_POST['ustate'];
$udistrict=$_POST['udistrict'];
$umob=$_POST['umob'];
$uname=$_POST['uname'];
$upass=$_POST['upass'];
echo $uname;
echo $gender;
echo $udist;
$sql = "INSERT INTO user VALUES('$name','$gender','$uaddress','$ustate','$udistrict','$umob','$uname','$upass')";
if(!mysqli_query($con,$sql))
echo mysqli_error($con);
else    
header("Location:index.php");

?>
