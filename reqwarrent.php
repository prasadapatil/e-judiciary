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
    <form action="warrentregister.php" method="POST">
        <div class="container" style="background-image: url(images/policelogo.png);">
            <h1 style="text-align: center;">REQUEST WARRENT</h1>
            <hr>
            <label for="FIR NO"><b>FIR NUMBER</b></label>
            <input type="text" placeholder="12345" name="fid" required>

            <label for="wsdpo"><b>SELECT YOUR SDPO OFFICE</b></label>&nbsp;&nbsp;&nbsp;
            <select name="wsdpo">
                <option value="NASHIK RURAL">NASHIK RURAL</option>
                <option value="NIPHDA">NIPHAD</option>
                <option value="PETH">PETH</option>
                <option value="MALEGON RURAL">MALEGON RURAL</option>
                <option value="MALEGON">MALEGON</option>
                <option value="KALWAN">KALWAN</option>
                <option value="MANMAD">MANMAD</option>
            </select><br><br>

            <label for="pstation"><b>SELECT YOUR POLICE STATION</b></label><br><br>
            <select name="wstation">
                <option value="MALEGON TALUKA">MALEGON TALUKA</option>
                <option value="JAIKHEDA">JAIKHEDA</option>
                <option value="VADNER KHAKHURDI">VADNER KHAKURDI</option>
                <option value="SATANA">SATANA</option>
            </select><br><br>


            <label for="fcourt"><b>SELECT YOUR COURT </b></label><br><br>
            <select name="wcourt">
                <option value="MALEGON TALUKA">MALEGON TALUKA</option>
                <option value="KALWAN">KALWAN</option>
                <option value="DEOLA">DEOLA</option>
                <option value="SATANA">SATANA</option>
            </select><br><br>

            <label for=" NAME"><b>NAME OF ACCUSED </b></label>
            <input type="text" placeholder="NAME" name="accusedname" required>



            <button type="submit" name="register" class="registerbtn">Register</button>
        </div>
    </form>
</body>

</html>
<?php } ?>
