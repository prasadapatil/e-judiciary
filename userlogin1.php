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

            $query="select * from user where uname='".$_POST['puname']."' and pass='".$_POST['ppass']."'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
            {    
                session_start();
                $_SESSION['uuser']=$_POST['puname'];
                header("location:userhome.php");
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