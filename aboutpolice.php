<?php
session_start();
$user="root";
$pass="";
$db="judiciary";
$host="localhost";
$con=mysqli_connect($host,$user,$pass,$db,3308);
$query="select * from police where puname='".$_SESSION['user']."'";
$result=mysqli_query($con,$query);
while ($array = mysqli_fetch_row($result));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> </tr>";
    }
?>