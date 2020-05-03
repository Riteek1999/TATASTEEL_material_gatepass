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
       <title>COURIER</title>
</head>
<body onload="myfuction()">
    <div id="loading"></div>
       
<?php include 'navbar.php';   ?>
<?php
include 'connect.php';
$con=openConnection();

if(isset($_POST['vehicle'])){

       $VEHICLE=$_POST['vehicle'];
       $_SESSION['vehicle']=$VEHICLE;

       if(isset($_POST['n_emp'])){
           ?>
       <div class="container c">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>EMPLOYEE</h1>
                    <form method="POST" action="final.php" id="regForm1">
                    <div class="form-group">
                        <i class="fa fa-id-card" aria-hidden="true"></i>
                            <label>Pno</label>
                            <input type="number" class="form-control" name="epno" id="epno" placeholder="Enter Pno" required>
                        </div>
                        <div class="form-group">
                        <i class="fa fa-phone-square" aria-hidden="true"></i></i>
                            <label>Contact Number</label>
                            <input type="number" class="form-control" name="emno" id="emno" placeholder="Enter Mobile Number"required>
                        </div>
                        <button type="submit" class="btn btn-primary  btn-lg btn-block" name="n_cemp">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
    <?php
    }
    ?>
    <?php
           if(isset($_POST['n_cour'])){
           ?>
       <div class="container c">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>COURIER SERVICE</h1>
                    <form method="POST" action="final.php" id="regForm2">
                    <div class="form-group">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <label>Name</label>
                            <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter Courier Service name" required>
                        </div>
                    <div class="form-group">
                        <i class="fa fa-phone-square" aria-hidden="true"></i></i>
                            <label>Contact Number</label>
                            <input type="number" class="form-control" name="cmno" id="cmno" placeholder="Enter Mobile Number"required>
                        </div>
                        <button type="submit" class="btn btn-primary  btn-lg btn-block" name="n_courier">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
    <?php
    }
}
    ?>
<script src="./js/script3.js"></script>
<script src="./js/script2.js"></script>  
<script src="./js/preloader.js"></script>  
    </body>
</html>