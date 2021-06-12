<?php
session_start();
if( !isset($_SESSION['user']))
echo "login required";
else
{?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=" 1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </style>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- CUSTOM CSS -->

    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Add a black background color to the top navigation */
        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        .id {
            background-color: #333;
        }

        .img {
            wax-width: 100%;
            height: auto;
            background: lightblue;
            background: radial-gradient(white 30%, red 70%);
        }

        .card {
            background: radial-gradient(white 30%, pink 70%);
        }

    </style>

    <title>police HOMEPAGE</title <body>
    <div class="container-fluid">
        <div id="google_translate_element"></div>
        <div id="main_class">
            <div class="logo_area">
                <a href="#"><img src="images/mahapolicelogo.png" width="192px" height="200px"></a>
            </div>
        </div>
    </div>

    <div>
        <hr class="one">
    </div>

    <div class="topnav"
        <a class="active" href="#home">HOME</a>
        <a href="aboutpolice.php">VIEW FIR</a>
        <a href="aboutpolice.php">ABOUT</a>

        <button type="button" class="btn btn-success" style="float:right;margin-right=50px; margin-left:20px;">HELLO <?php
          
            echo $_SESSION['user'];?></button>
    </div>
    <a href="policelogout.php"><button type="button" class="btn btn-danger" style="float:right; margin-top:0px;">LOGOUT</button></a>
    <div class="container">
    <h2>MISSING VEHICAL COMPLAINT</h2>
  <p></p>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>COMPLAINt NUMBER</th>
        <th>OWNERS NAME</th>
        <th>VEHICAL MODEL</th>
        <th>VEHICAL NUMBER</th>
        <th>VEHICAL CHESSI NUMBER</th>
        <th>NEAR POLICE STATION</th>   
        <th>CONTACT</th>
      </tr>
    </thead>
    <tbody>
    <?php
     $con=mysqli_connect("localhost","root","","judiciary","3308");
     $sql="select * from vehical";
     $count=1;
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)) {
    ?> 
    <tr>
        <td><?php echo $count++; ?> </td>
        <td><?php echo $row['oname']; ?> </td>
        <td><?php echo $row['vmodel']; ?></td>
        <td><?php echo $row['vnum']; ?></td>
        <td><?php echo $row['vcnum']; ?></td>
        <td><?php echo $row['vstation']; ?></td>
        <td><a href="#"><button type="button" class="btn btn-cool" style="float:right; margin-top:0px;">CONTACT</button></a> </td>
        
      </tr>
    <?php } ?>
    </tbody>
  </table>
            </div>
      
    </body>
    </html>
    <?php } ?>