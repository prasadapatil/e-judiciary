<?php
if(isset($_SESSION['user']))
{
  session_destroy($_SESSION['user']);
}
else
{
?>
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
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
<!-- CUSTOM CSS -->

<link rel="stylesheet"href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: skyblue;
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
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
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

<title>police login</title>
</head>
<body>

<div class="container-fluid">
    <div id="google_translate_element"></div>
  <div id="main_class">
        <div class="logo_area">
            <a href="#"><img src="images/usericon.png" width="192px" height="200px"></a>
        </div>
        </div>
    </div>

<div>
    <hr class="one">
</div>

    <h3 style="text-align: center;">USER LOGIN</h3>
   
<form method="POST" action="userlogin1.php">
    <label for="POLICE ID"><b>USER NAME</b></label>
    <input type="text" placeholder="USERNAME" name="puname" required>
    
    <label for="POLICE ADHAR ID"><b>PASSWORD</b></label>
    <input type="password" placeholder="PASSWORD" name="ppass" required>
 
    <button type="submit" name="login" class="btn btn-primary">LOGIN</button>
    <a href="policeforget.php"> <button class="btn btn-danger">forget password</button></a>
</form>
 
 
</body>
</html>

<?php } ?>