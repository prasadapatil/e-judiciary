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
        <div class="row text-center py-5">
            <div class="col-md-6 col-sm-6 my-3 my-md-0">
                <form action="policefir.php" method="post">
                    <div class="card shadow">
                        <div>
                            <img src="images/firlogo.jpg" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h3 class=card-title>FIR REGISTRATION</h3>
                            <button type="submit" class="btn btn-danger">GOTO</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-6 my-3 my-md-0">
                <form action="reqwarrent.php" method="post">
                    <div class="card shadow">
                        <div>
                            <img src="images/warrentlogo.jpg" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h3 class=card-title>REQUEST WARRENT</h3>
                            <button type="submit" class="btn btn-danger">GOTO</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="row text-center py-5">
            <div class="col-md-6 col-sm-6 my-3 my-md-0">
                <form action="policefir.php" method="post">
                    <div class="card shadow">
                        <div>
                            <img src="images/evidancelogo.jpg" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h3 class=card-title>UPLOAD EVIDANCE</h3>
                            <button type="submit" class="btn btn-danger">GOTO</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-6 my-3 my-md-0">
                <form action="policecomplain.php" method="post">
                    <div class="card shadow">
                        <div>
                            <img src="images/complainslogo.jpg" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h3 class=card-title>VIEW COMPLAIN</h3>
                            <button type="submit" class="btn btn-danger">GOTO</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row text-center py-5">
                <div class="col-md-6 col-sm-6 my-3 my-md-0">
                    <form action="missingpolice.php" method="post">
                        <div class="card shadow">
                            <div>
                                <img src="images/missinglogo.jpg" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h3 class=card-title>MISSING REPORT</h3>
                                <button type="submit" class="btn btn-danger">GOTO</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 my-3 my-md-0">
                    <form action="policevehical.php" method="post">
                        <div class="card shadow">
                            <div>
                                <img src="images/vehicallogo.jpg" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h3 class=card-title>STOLEN VEHICLE</h3>
                                <button type="submit" class="btn btn-danger">GOTO</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-md-6 col-sm-6 my-3 my-md-0">
                    <form action="policenoc.php" method="post">
                        <div class="card shadow">
                            <div>
                                <img src="images/noclogo.jpg" class="img-fluid card-img-top">
                            </div>
                            <div class="card-body">
                                <h3 class=card-title>NOC REQUESTS</h3>
                                <button type="submit" class="btn btn-danger">GOTO</button>
                            </div>
                        </div>
                    </form>
                </div>
</html>
<?php }?>
