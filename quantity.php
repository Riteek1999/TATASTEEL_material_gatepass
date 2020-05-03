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
       <title>MATERIAL</title>
</head>
<body onload="myfuction()">
    <div id="loading"></div>
       
<?php include 'navbar.php';   ?>
<?php
include 'connect.php';
$con=openConnection();

if(isset($_POST['material'])){

       $MATERIAL=$_POST['material'];
       $_SESSION['material']=$MATERIAL;
       // $query="INSERT INTO approval(loc_id,approval,activeindex) VALUES($LOC,'$APPROVER','n')";
       // echo $query;
       // $result=mysqli_query($con,$query) or die(mysqli_error($con));
}
?>
<?php
$query="SELECT * FROM m_material WHERE material='$MATERIAL';";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
?>
<div class="container c">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>SELECT QUANTITY</h1>
                    <form method="POST" action="transport.php">

                        <div class="form-group">
                            <label>Quantity upto <?php echo $row['quantity']; ?></label>
                            <input type="number" class="form-control" placeholder="Enter Quantity in the limit mentioned above only" name="qty" required>
                        </div>
                        <div class="form-group">
                        <label>Unit</label>
                            <select class="form-control" name="unit" required>
                            <option value="<?php echo $row['unit']; ?>"><?php echo $row['unit']; ?></option>
                            </select>
                            </div>
                        <button type="submit" class="btn btn-primary  btn-lg btn-block" name="n_quantity">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script src="./js/preloader.js"></script>  
    </body>
</html>