<?php
session_start();
if( !isset($_SESSION['user']))
echo "login required";
else { ?>
<!DOCTYPE HTML>
<HTML>

<head>
    <title>
        POLICE FIR
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
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

</head>

<body style="">
    <div id="google_translate_element"></div>
    <form action="firregister.php" method="POST">
        <div class="container" style="background-image: url(images/policelogo.png);">
            <h1 style="text-align: center;">REPORTING THE FIRST INFORMATION (FIR) <br> FOR THE COGNIZABLE OFFENCE</h1>

            <hr>
            <label for="FIR NO"><b>FIR NUMBER</b></label>
            <input type="text" placeholder="12345" name="fid" required>

            <label for="fsdpo"><b>SELECT YOUR SDPO OFFICE</b></label>&nbsp;&nbsp;&nbsp;
            <select name="fsdpo">
                <option value="NASHIK RURAL">NASHIK RURAL</option>
                <option value="NIPHDA">NIPHAD</option>
                <option value="PETH">PETH</option>
                <option value="MALEGON RURAL">MALEGON RURAL</option>
                <option value="MALEGON">MALEGON</option>
                <option value="KALWAN">KALWAN</option>
                <option value="MANMAD">MANMAD</option>
            </select><br><br>

            <label for="pstation"><b>SELECT YOUR POLICE STATION</b></label><br><br>
            <select name="fstation">
                <option value="MALEGON TALUKA">MALEGON TALUKA</option>
                <option value="JAIKHEDA">JAIKHEDA</option>
                <option value="VADNER KHAKHURDI">VADNER KHAKURDI</option>
                <option value="SATANA">SATANA</option>
            </select><br><br>


            <label for="fcourt"><b>SELECT YOUR COURT </b></label><br><br>
            <select name="fcourt">
                <option value="MALEGON TALUKA">MALEGON TALUKA</option>
                <option value="KALWAN">KALWAN</option>
                <option value="DEOLA">DEOLA</option>
                <option value="SATANA">SATANA</option>
            </select><br><br>

            <label for=" NAME"><b>NAME OF COMPLAINANT/INFORMANT</b></label>
            <input type="text" placeholder="NAME" name="fname" required>

            <label for="FIRST NAME"><b>MOBILE NUMBER OF COMPLAINANT/INFORMANT</b></label>
            <input type="text" placeholder="9420xxxxxx" name="fmob" required>

            <label for="fplace"><b>PLACE OF OCCURRENCE</b></label>
            <input type="text" placeholder="xxx" name="fplace" required>

            <label for="POLICE ID"><b>DISTANCE FROM POLICE STATION</b></label>
            <input type="TEXT" placeholder="2km" name="fdist" required>


            <label for="POLICE ID"><b>DATE OF OCCURRENCE</b></label>
            <input type="DATE" placeholder="41162020" name="fdate" required><br><br>
           
            
            <label for="POLICE ID"><b>TIME OF OCCURRENCE</b></label>
            <input type="time" placeholder="41162020" name="ftime" required><br><br>


            <label for="POLICE ADHAR ID"><b>OFFENCE</b></label>
            <input type="text" placeholder="murder/theft/rape etc" name="fcrime" required>


            <label for="SECTIONS"><b>SECTION</b></label>
            <input type="text" placeholder="302/307/323/etc" name="fsection" required>


            <label for="POLICE ADHAR ID"><b>DETAIL OF WITNESS(IF ANY)</b></label>
            <input type="text" placeholder="" name="fdesc" required>

            <label for="POLICE ADHAR ID"><b>NAMES OF RESPONDENTS(IF ANY)</b></label>
            <input type="text" placeholder="" name="frespondent" required>


            <label for="POLICE ADHAR ID"><b>REGISTER POLICE USER NAME</b></label>
            <input type="text" placeholder="34 etc" name="puname" required>

        <label for="POLICE ADHAR ID"><b>APPLICANT VERIFICATION OTP</b></label>
            <input type="text" placeholder="MXaB5" name="puid" required>


            <button type="submit" class="registerbtn">Register</button>
        </div>
    </form>
</body>

</html>
<?php } ?><?php
session_start();
if( !isset($_SESSION['user']))
echo "login required";
else { ?>
<!DOCTYPE HTML>
<HTML>

<head>
    <title>
        POLICE FIR
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
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

</head>

<body style="">
    <div id="google_translate_element"></div>
    <form action="firregister.php" method="POST">
        <div class="container" style="background-image: url(images/policelogo.png);">
            <h1 style="text-align: center;">UPLOAD PUNCHANAMA</h1>

            <hr>
            <label for="FIR NO"><b>FIR NUMBER</b></label>
            <input type="text" placeholder="12345" name="fid" required>

            <label for="fsdpo"><b>SELECT YOUR SDPO OFFICE</b></label>&nbsp;&nbsp;&nbsp;
            <select name="fsdpo">
                <option value="NASHIK RURAL">NASHIK RURAL</option>
                <option value="NIPHDA">NIPHAD</option>
                <option value="PETH">PETH</option>
                <option value="MALEGON RURAL">MALEGON RURAL</option>
                <option value="MALEGON">MALEGON</option>
                <option value="KALWAN">KALWAN</option>
                <option value="MANMAD">MANMAD</option>
            </select><br><br>

            <label for="pstation"><b>SELECT YOUR POLICE STATION</b></label><br><br>
            <select name="fstation">
                <option value="MALEGON TALUKA">MALEGON TALUKA</option>
                <option value="JAIKHEDA">JAIKHEDA</option>
                <option value="VADNER KHAKHURDI">VADNER KHAKURDI</option>
                <option value="SATANA">SATANA</option>
            </select><br><br>


            <label for="fcourt"><b>SELECT YOUR COURT </b></label><br><br>
            <select name="fcourt">
                <option value="MALEGON TALUKA">MALEGON TALUKA</option>
                <option value="KALWAN">KALWAN</option>
                <option value="DEOLA">DEOLA</option>
                <option value="SATANA">SATANA</option>
            </select><br><br>

            <label for=" NAME"><b>NAME OF COMPLAINANT/INFORMANT</b></label>
            <input type="text" placeholder="NAME" name="fname" required>

            <label for="FIRST NAME"><b>MOBILE NUMBER OF COMPLAINANT/INFORMANT</b></label>
            <input type="text" placeholder="9420xxxxxx" name="fmob" required>

            <label for="fplace"><b>PLACE OF OCCURRENCE</b></label>
            <input type="text" placeholder="xxx" name="fplace" required>

            <label for="POLICE ID"><b>DISTANCE FROM POLICE STATION</b></label>
            <input type="TEXT" placeholder="2km" name="fdist" required>


            <label for="POLICE ID"><b>DATE OF OCCURRENCE</b></label>
            <input type="DATE" placeholder="41162020" name="fdate" required><br><br>
           
            
            <label for="POLICE ID"><b>TIME OF OCCURRENCE</b></label>
            <input type="time" placeholder="41162020" name="ftime" required><br><br>


            <label for="POLICE ADHAR ID"><b>OFFENCE</b></label>
            <input type="text" placeholder="murder/theft/rape etc" name="fcrime" required>


            <label for="SECTIONS"><b>SECTION</b></label>
            <input type="text" placeholder="302/307/323/etc" name="fsection" required>


            <label for="POLICE ADHAR ID"><b>DETAIL OF WITNESS(IF ANY)</b></label>
            <input type="text" placeholder="" name="fdesc" required>

            <label for="POLICE ADHAR ID"><b>NAMES OF RESPONDENTS(IF ANY)</b></label>
            <input type="text" placeholder="" name="frespondent" required>


            <label for="POLICE ADHAR ID"><b>REGISTER POLICE USER NAME</b></label>
            <input type="text" placeholder="34 etc" name="puname" required>

        <label for="POLICE ADHAR ID"><b>APPLICANT VERIFICATION OTP</b></label>
            <input type="text" placeholder="MXaB5" name="puid" required>


            <button type="submit" class="registerbtn">Register</button>
        </div>
    </form>
</body>

</html>
<?php } ?>
