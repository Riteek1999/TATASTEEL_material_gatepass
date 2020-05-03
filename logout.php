<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/Favicon.ico">
    <link rel="icon" sizes="192x192" href="images/favicon.png">
    <link rel="stylesheet" href="./css/regstyle.css"/>
    <title>LOGOUT</title>
</head>
<body onload="myfuction()">
<div id="loading"></div>
<?php include 'navbar.php';   ?>
<div id="pop">
<button id="close" onclick="document.getElementById('pop').style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></button><br>

<?php
unset($_SESSION['usermail']);
echo "<h2><center>Sucessfully Logged Out</h2>";
echo"<script> window.location.href='index.php' </script>";
?>
</div>
<script src="./js/preloader.js"></script> 
</body>
</html>