<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body onload="myfuction()">
<div id="loading"></div>
        
<?php include 'navbar.php';   ?>
<?php
include 'connect.php';
$con=openConnection();

if(isset($_POST['update'])){

        $UPDATE=$_POST['update'];

        $query="UPDATE approval
        SET activeindex='n'
        WHERE gid = $UPDATE;";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));

        $query="SELECT * FROM approval WHERE gid=$UPDATE;";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));
        $row=mysqli_fetch_array($result);
        $VEHICLEID=$row['m_tid'];

        $query="UPDATE m_transport
        SET activeindex='y'
        WHERE m_tid = $VEHICLEID;";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));

        echo"<script> window.location.href='update.php' </script>";
}

?>
</div>

<script src="./js/preloader.js"></script> 
</body>
</html>

