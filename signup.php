<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/Favicon.ico">
    <link rel="icon" sizes="192x192" href="images/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./css/signupstyle.css">


    <title>SIGN UP</title>
</head>
<body onload="myfuction()">
    <div id="loading"></div>

<?php include 'navbar.php'; ?>
<br>


<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>Register</h1>
                    <form action="registration.php" method="POST" id="regForm">
                        <div class="form-group">
                        <i class="fa fa-id-card" aria-hidden="true"></i>
                            <label>Pno</label>
                            <input type="number" class="form-control" name="pno" id="pno" placeholder="Enter Pno" required>
                        </div>
                        
                        <div class="form-group">
                        <i class="fa fa-user" aria-hidden="true"></i>
                            <label>Name</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name" required>
                        </div>
                        
                        <div class="form-group">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" autocomplete="off" required>
                        </div>
                        
                        <div class="form-group">
                        <i class="fa fa-phone-square" aria-hidden="true"></i></i>
                            <label>Contact Number</label>
                            <input type="number" class="form-control" name="mno" id="mno" placeholder="Enter Mobile Number"required>
                        </div>
                        <div class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Strong Alphanumeric Password" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" id="confirmpassword"  placeholder="Re-enter Password" required>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Employee</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="active" value="y" required>
                                  <label class="form-check-label">Active</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="active" value="n" required>
                                  <label class="form-check-label">Inactive</label>
                                </div>
                              </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- method GET bhi hoskta hai but details url m show krega islie post use kre -->
<!-- bootstrap js  -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="./js/script.js"></script>  
<script src="./js/preloader.js"></script>  


    
</body>
</html>