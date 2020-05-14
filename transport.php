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
       <title>TRANSPORT</title>
</head>
<body onload="myfuction()">
    <div id="loading"></div>
       
<?php include 'navbar.php';   ?>
<?php
include 'connect.php';
$con=openConnection();

if(isset($_POST['qty'])){

       $QUANTITY=$_POST['qty'];
       $UNIT=$_POST['unit'];
       $_SESSION['qty']=$QUANTITY;
       $_SESSION['unit']=$UNIT;

       // $query="INSERT INTO approval(loc_id,approval,activeindex) VALUES($LOC,'$APPROVER','n')";
       // echo $query;
       // $result=mysqli_query($con,$query) or die(mysqli_error($con));
}
?>
<?php
$query="SELECT * FROM m_transport WHERE activeindex='y';";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
?>
<div class="container c">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>SELECT TRANSPORT</h1>
                    <form method="POST" action="courier.php">
                    <div class="form-group">
                            <label>Vehicle</label>
                            <select class="form-control" name="vehicle" required>
                            <?php
                            if(mysqli_num_rows($result)>0){
                             while($row=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $row['m_tid']; ?>"><?php echo $row['transport']; ?><?php echo "   "; ?><?php echo $row['transport_no']; ?></option>
                                <?php
                                }
                                }
                                 ?>
                            </select>
                        </div>
                        <label>Courier</label>
                        <button type="submit" class="btn btn-outline-primary  btn-lg btn-block" name="n_emp">Own Employee</button>
                        <button type="submit" class="btn btn-outline-primary  btn-lg btn-block" name="n_cour">Courier Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script src="./js/preloader.js"></script>  
    </body>
</html>