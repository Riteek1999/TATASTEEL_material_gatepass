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
    <title>LOGIN</title>
</head>
<body onload="myfuction()">
    <div id="loading"></div>

<?php include 'navbar.php'; ?>

    <div class="container c">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>Login</h1>
                    <form method="POST" action="validation.php">

                        <div class="form-group">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" autocomplete="off" required>
                        </div>
                        <button type="submit" class="btn btn-primary  btn-lg btn-block" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>

          <script src="./js/preloader.js"></script>  
</body>
</html>