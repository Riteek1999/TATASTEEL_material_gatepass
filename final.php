<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="shortcut icon" href="images/Favicon.ico">
    <link rel="icon" sizes="192x192" href="images/favicon.png">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/signupstyle.css">
       <title>GATEPASS GENERATION</title>
</head>
<body>
       
<?php include 'navbar.php';   ?>
<?php
include 'connect.php';
$con=openConnection();
$CMNO="NULL";
$CNAME="NULL";
$EMNO="NULL";
$EPNO="NULL";
if(isset($_POST['epno'])){

       $EPNO=$_POST['epno'];
       $EMNO=$_POST['emno'];
}

if(isset($_POST['cname'])){

    $CNAME=$_POST['cname'];
    $CMNO=$_POST['cmno'];
}

$DESTINATION_ID = $_SESSION['dloc'];
$SOURCE_ID = $_SESSION['sloc'];
$APPROVAL = $_SESSION['approver'];
$USERMAIL=$_SESSION['usermail'];

$query="SELECT * FROM user WHERE email='$USERMAIL';";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
$row=mysqli_fetch_array($result);

$USERID=$row['userid'];
$MATERIAL = $_SESSION['material'];
$QUANTITY = $_SESSION['qty'];
$UNIT = $_SESSION['unit'];
$VEHICLE=$_SESSION['vehicle'];
$GPID=mt_rand(1000, 10000);


      $query="INSERT INTO approval(userid,m_did,m_sid,approver,material,quantity,unit,m_tid,courierservice,c_contactno,courieremp_pno,e_contactno,gpid,activeindex) VALUES($USERID,$DESTINATION_ID,$SOURCE_ID,'$APPROVAL','$MATERIAL',$QUANTITY,'$UNIT','$VEHICLE','$CNAME',$CMNO,$EPNO,$EMNO,$GPID,'y')";

      $result=mysqli_query($con,$query)or die(mysqli_error($con));

    ?>

<div class="container c">
        <div class="row text-center">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>GATEPASS GENERATED</h1>
                            <label>USERID : <?php echo $USERID; ?></label><br>
                            <label>SOURCEID : <?php echo $SOURCE_ID; ?></label><br>
                            <label>DESTINATIONID : <?php echo $DESTINATION_ID; ?></label><br>
                            <label>APPROVER : <?php echo $APPROVAL; ?></label><br>
                            <label>MATERIAL : <?php echo $MATERIAL; ?></label><br>
                            <label>QUANTITY : <?php echo $QUANTITY; ?></label><br>
                            <label>UNIT : <?php echo $UNIT; ?></label><br>
                            <label>VEHICLEID : <?php echo $VEHICLE; ?></label><br>
                            <label>GATEPASSID : <?php echo $GPID; ?></label>
<form>
                            <input type="button" value="Print this page" class="btn btn-primary btn-lg btn-block" onClick="window.print()">
</form>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>