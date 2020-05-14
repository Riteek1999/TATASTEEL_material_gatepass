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

if(isset($_POST['new_quantity'])){

        $MID=$_POST['new_quantity'];
        $NEWQTY=$_POST['newqty'];

        $query="SELECT * FROM m_material WHERE m_mid=$MID;";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));
        $row=mysqli_fetch_array($result);
        $QUANTITY=$row['quantity'];

        $Qty=$QUANTITY+$NEWQTY;

        $query="UPDATE m_material
        SET quantity=$Qty
        WHERE m_mid = $MID;";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));

        echo"<script> window.location.href='update_material.php' </script>";
}

?>
</div>

<script src="./js/preloader.js"></script> 
</body>
</html>

