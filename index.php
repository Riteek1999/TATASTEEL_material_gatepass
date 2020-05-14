<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/Favicon.ico">
    <link rel="icon" sizes="192x192" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/indexstyle.css">
    <title>TATASTEEL</title>
</head>
<body onload="myfuction()">
    <div id="loading"></div>

<?php
include 'navbar.php';
unset($_SESSION['usermail']);
?>
            <section>
            <div class="wrapper">
            <h2>Material Gatepass</h2>
            <p>If you are new to this material gatepass system <br><br>
        <!-- button1 -->
             <div>
               <button class="button1" type="button" onclick="window.location.href = 'signup.php';">Register</button>
            </div>
            
        <!--button2-->
               If you have an account to this material gatepass system<br><br></p>
            <div>
               <button class="button1" type="button" onclick="window.location.href = 'login.php';">Login</button>
            </div>
        </div>
        </section>
        <script src="./js/preloader.js"></script>
</body>
</html>