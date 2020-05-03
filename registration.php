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

if(isset($_POST['fullname'])){
        $Pno=md5($_POST['pno']);
        $Name=$_POST['fullname'];
        $Email=$_POST['email'];
        $Mobile=md5($_POST['mno']);
        $Password=md5($_POST['password']);
        $Active=$_POST['active'];

        $query="INSERT INTO user(name,pno,email,password,phonenumber,activeindex) VALUES('$Name','$Pno','$Email','$Password','$Mobile','$Active')";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));
        if($result){
                echo "<h1><center>Signup Successful</h1><br>";
                $_SESSION['usermail']=$Email;
                echo"<script> window.location.href='gatepass.php' </script>";
        
    }
    else{
        echo"<h2><center>Signup Unsuccessful</h2>";
}   
}

//isset means button press hua hai
//md5 encrypts password


?>
</div>

<script src="./js/preloader.js"></script> 
</body>
</html>