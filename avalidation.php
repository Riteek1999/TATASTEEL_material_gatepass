<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/regstyle.css">
        <title>Registration</title>
</head>
<body onload="myfuction()">
<div id="loading"></div>
        
<?php include 'navbar.php';   ?>
<div id="pop">
<button type="button" class="close" aria-label="Close" onclick="document.getElementById('pop').style.display='none'">
  <span aria-hidden="true">&times;</span>
</button>
<!-- <button id="close" onclick="document.getElementById('pop').style.display='none'">X</button><br> -->
<?php
include 'connect.php';
$con=openConnection();

if(isset($_POST['login'])){
      
        $Password=$_POST['adminpassword'];
        $ID=$_POST['id'];

        $query="SELECT * FROM admin WHERE adminid='$ID' AND password='$Password';";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));


        if(mysqli_num_rows($result)>0){
            echo "Login Successful";
            $_SESSION['id']=$ID;
            echo $_SESSION['ID'];
            echo"<script> window.location.href='manage.php' </script>";
        }
        else echo "<h1><center>Login Unsuccessful</h1>";
}

?>
</div>

<script src="./js/preloader.js"></script> 
</body>
</html>

