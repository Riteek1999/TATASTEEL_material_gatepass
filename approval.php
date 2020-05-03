<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="images/Favicon.ico">
    <link rel="icon" sizes="192x192" href="images/favicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/signupstyle.css">
        <title>Approval</title>
</head>
<body onload="myfuction()">
    <div id="loading"></div>
      
<?php include 'navbar.php';   ?>
<?php
include 'connect.php';
$con=openConnection();

if(isset($_POST['dlocation'])){
       $DESTINATION_ID = $_POST['dlocation'];
       $SOURCE_ID = $_POST['slocation'];
    //    $USERMAIL=$_SESSION['usermail'];
    //    $query="SELECT * FROM user WHERE email='$USERMAIL';";
    //    $result=mysqli_query($con,$query)or die(mysqli_error($con));
    //    $row=mysqli_fetch_array($result);
   
    //    $USERID=$row['userid'];
    //    $query="SELECT * FROM delivery_location WHERE uerid='$USERID'AND m_did='$DESTINATION_ID' AND m_sid='$SOURCE_ID' AND activeindex='n';";
    //    $result=mysqli_query($con,$query)or die(mysqli_error($con));
    //    if(mysqli_num_rows($result)>0){
    //        echo "ERROR:already applied for these locations";
    //    }
    //   else{
    //    $query="INSERT INTO delivery_location(uerid,m_did,m_sid,activeindex) VALUES($USERID,$DESTINATION_ID,$SOURCE_ID,'n')";
    //    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    //    if($result){
       $_SESSION['sloc']=$SOURCE_ID;
       $_SESSION['dloc']=$DESTINATION_ID;
    }

$query="SELECT * FROM m_approval WHERE sid='$SOURCE_ID';";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
?>
<div class="container c">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>SELECT APPROVAL</h1>
                    <form method="POST" action="material.php">

                        <div class="form-group">
                            <label>Approver Name</label>
                            <select class="form-control" name="approver" required>
                            <option value="<?php echo $row['approval1']; ?>"><?php echo $row['approval1']; ?></option>
                            <option value="<?php echo $row['approval2']; ?>"><?php echo $row['approval2']; ?></option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary  btn-lg btn-block" name="approval">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>



<script src="./js/preloader.js"></script> 
</body>
</html>