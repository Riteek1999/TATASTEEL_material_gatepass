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
       $query="SELECT * FROM approval WHERE userid='$USERID'AND m_did='$DESTINATION_ID' AND m_sid='$SOURCE_ID' AND material='$MATERIAL' AND quantity='$QUANTITY' AND unit='$UNIT' AND m_tid='$VEHICLE' OR gpid='$GPID' AND activeindex='y';";
       $result=mysqli_query($con,$query)or die(mysqli_error($con));
       if(mysqli_num_rows($result)>0){
           echo "ERROR:already applied for these details";
       }
else{
      $query="INSERT INTO approval(userid,m_did,m_sid,approver,material,quantity,unit,m_tid,courierservice,c_contactno,courieremp_pno,e_contactno,gpid,activeindex) VALUES($USERID,$DESTINATION_ID,$SOURCE_ID,'$APPROVAL','$MATERIAL',$QUANTITY,'$UNIT','$VEHICLE','$CNAME',$CMNO,$EPNO,$EMNO,$GPID,'y')";
      $result=mysqli_query($con,$query)or die(mysqli_error($con));

      $query="UPDATE m_transport
      SET activeindex='n'
      WHERE m_tid = $VEHICLE;";
      $result=mysqli_query($con,$query)or die(mysqli_error($con));

      $query="SELECT * FROM m_material WHERE material='$MATERIAL';";
      $result=mysqli_query($con,$query)or die(mysqli_error($con));
      $row=mysqli_fetch_array($result);
      $TOTALQTY=$row['quantity'];

      $qty=$TOTALQTY-$QUANTITY;

      $query="UPDATE m_material
      SET quantity=$qty
      WHERE material = '$MATERIAL';";
      $result=mysqli_query($con,$query)or die(mysqli_error($con));
    ?>

<div class="container c">
        <div class="row text-center" class="okayimg">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                <div style="background-color: white;"><img src="./images/okay.gif" class="okayimg"> <h1>GATEPASS GENERATED</h1> </div>
                <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <?php 
                    $query="SELECT * FROM user WHERE userid='$USERID';";
                    $result=mysqli_query($con,$query)or die(mysqli_error($con));
                    $row=mysqli_fetch_array($result);
                ?>
                <tr class="table-success"><th>GATEPASSID </th><th> <?php echo $GPID; ?></th></tr><br>
                <tr class="table-primary"><td>NAME </td><td> <?php echo $row['name']; ?></td></tr>
                <?php 
                    $query="SELECT * FROM m_source WHERE m_sid='$SOURCE_ID';";
                    $result=mysqli_query($con,$query)or die(mysqli_error($con));
                    $row=mysqli_fetch_array($result);
                ?>
                <tr class="table-primary"><td>SOURCE </td><td> <?php echo $row['source']; ?></td></tr>
                <?php 
                    $query="SELECT * FROM m_destination WHERE m_did='$DESTINATION_ID';";
                    $result=mysqli_query($con,$query)or die(mysqli_error($con));
                    $row=mysqli_fetch_array($result);
                ?>
                <tr class="table-primary"><td>DESTINATION </td><td> <?php echo $row['destinations']; ?></td></tr>
                <tr class="table-primary"><td>APPROVER </td><td> <?php echo $APPROVAL; ?></td></tr>
                <tr class="table-primary"><td>MATERIAL </td><td> <?php echo $MATERIAL; ?></td></tr>
                <tr class="table-primary"><td>QUANTITY </td><td> <?php echo $QUANTITY; ?></td></tr>
                <tr class="table-primary"><td>UNIT </td><td> <?php echo $UNIT; ?></td></tr>
                <?php 
                    $query="SELECT * FROM m_transport WHERE m_tid='$VEHICLE';";
                    $result=mysqli_query($con,$query)or die(mysqli_error($con));
                    $row=mysqli_fetch_array($result);
                ?>
                <tr class="table-primary"><td>VEHICLE </td><td> <?php echo $row['transport'];echo " ";echo $row['transport_no'] ?></td></tr>

</table>
</div>
<form>
                            <input type="button" value="Print this page" class="btn btn-primary btn-lg btn-block" onClick="window.print()">
</form>
</div>
                </div>
            </div>
        </div>
    </div>
<?php 
} 
?>
    </body>
</html>