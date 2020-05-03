<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbarstyle.css">
    <title>Navbar</title>
</head>
<body>

<nav>
        <div class="navigation_bar"> 
            <img src="./images/2.png" class="navlogo">
            <?php
            session_start();

            $isLoggedIn = false;
            if(isset($_SESSION['usermail']) && $_SESSION['usermail']) {
                $isLoggedIn = true;
            }
                    if($isLoggedIn)
                    {
            ?>
            <a href="logout.php" class="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>LOG OUT</a>
            <?php
                    }
            ?>
            <img src="./images/1.png" class="navimg">
        </div>

</nav>
</body>
</html>