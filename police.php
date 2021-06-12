<!doctype html>
<html lang="en">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=" 1.0">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- CUSTOM CSS -->

<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
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

</style>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }

</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<TITLE>E-POLICE</TITLE>

<body>

    <div class="container-fluid">
        <div id="google_translate_element"></div>
        <div id="main_class">
            <div class="logo_area">
                <a href="police.php"><img src="images/police logo.png" width="192px" height="200px"></a>
            </div>
        </div>
    </div>

    <div>
        <hr class="one">
    </div>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
    <!--CARDS----------------------------------------------------------------------->
    <div class="card-deck">
        <div class="card1">
            <img class="card-img-top" src="images/ips.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">POLICE LOGIN</h4>
                <p class="card-text">STATE WISE</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                    GOTO
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="policelogin.php" method="post" style="text-size:22px">
                                    SELECT YOUR STATE<br><br>
                                    <select name="pstate">
                                        <option value="MAHARASHTRA">MAHARASHTRA</option>
                                        <option value="BIHAR">BIHAR</option>
                                        <option value="RAJASTHAN">RAJASTHAN</option>
                                        <option value="GUJRAT">GUJRAT</option>
                                        <option value="TELENGANA">TELANGANA</option>
                                        <option value="UTTARPRADESH">UTTAR-PRADESH</option>
                                        <option value="MADHYAPRADESH">MADHYA-PRADESH</option>
                                    </select><br><br>
                                    SELECT YOUR DISTRICT<br><br>
                                    <select name="pdistrict">
                                        <option value="NASHIK">NASHIK</option>
                                        <option value="MUMBAI">MUMBAI</option>
                                        <option value="DHULE">DHULE</option>
                                        <option value="NANDURBAR">NANDURBAR</option>
                                        <option value="NANDED">NANDED</option>
                                        <option value="JALGON">JALGON</option>
                                        <option value="JALNA">JALNA</option>
                                        <option value="SHAHDA">SHAHADE</option>
                                        <option value="THANE">THANE</option>
                                        <option value="RAIGAD">RAIGAD</option>
                                        <option value="RATNAGIRI">RATNAGIRI</option>
                                        <option value="SOLAPUR">SOLAPUR</option>
                                        <option value="AKOLA">AKOLA</option>
                                        <option value="NAGPUR">NAGPUR</option>
                                        <option value="KOLAPUR">KOLHAPUR</option>
                                        <option value="PUNE">PUNE</option>

                                    </select>
                                    <br><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card1">
            <img class="card-img-top" src="images/newpolice.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">POLICE REGISTRATION</h4>
                <p class="card-text">STATE WISE</p>
                <a href="policesignup.html" class="btn btn-danger">GOTO</a>
            </div>
        </div>
    </div>

    <div class="card-deck">
        <div class="card1">
            <img class="card-img-top" src="images/applicant login.png" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">APPLICANT REGISTRATION</h4>
                <p class="card-text">STATE WISE</p>
                <a href="userregister.html" class="btn btn-warning">GOTO</a>
            </div>
        </div>
        <div class="card1">
            <img class="card-img-top" src="images/applicant login.png" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">APPLICANT LOGIN</h4>
                <p class="card-text">STATE WISE</p>
                <a href="usersignup.php" class="btn btn-danger">GOTO</a>
            </div>
        </div>


    </div>






    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left" style="background: skyblue; margin-top: 0px ">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">NOTE</h5>
                    <p>
                        <h3>THIS IS THE DEMO PROJECT ......</h3>
                    </p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">DIRECT LOGIN</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">POLICE LOGIN</a>
                        </li>
                        <li>
                            <a href="#!">ADVOCATE LOGIN</a>
                        </li>
                        <li>
                            <a href="#!">APPLICANT LOGIN</a>
                        </li>
                        <li>
                            <a href="#!">RESPONDENT LOGIN</a>
                        </li>
                        <li>
                            <a href="#!">STENO LOGIN</a>
                        </li>
                        <li>
                            <a href="#!">ADMIN</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <a><img src="images/justice.png" width="200px"></a>
                    <a><img src="images/mahatma.jpg" width="180px" height="100px"></a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background: yellow">© 2020 Copyright:
            GOVT..</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
