<?php
$user="root";
$pass="";
$db="judiciary";
$host="localhost";
$con=mysqli_connect($host,$user,$pass,$db,3308);
    if(isset($_POST['login']))
    {
        if(empty($_POST['puname'])||empty($_POST['ppass']))
        {
               echo 'empty';
        }
        else{
            $query="select * from police where puname='".$_POST['puname']."' and ppass='".$_POST['ppass']."'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
            {    
                session_start();
                $_SESSION['user']=$_POST['puname'];
                header("location:policehome.php");
            }
            else
            {
                echo "error";

            }
        }
    }
    else
     echo 'not working';

?>
