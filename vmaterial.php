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

if(isset($_POST['not_ava'])){

       $MID=$_POST['not_ava'];

       $query="UPDATE m_material
       SET activeindex='n'
       WHERE m_mid = $MID;";
       $result=mysqli_query($con,$query)or die(mysqli_error($con));

       echo"<script> window.location.href='update_material.php' </script>";

    }
    if(isset($_POST['ava'])){

        $MID=$_POST['ava'];
 
        $query="UPDATE m_material
        SET activeindex='y'
        WHERE m_mid = $MID;";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));
 
        echo"<script> window.location.href='update_material.php' </script>";
 
     }
    ?>
        <?php  

         if(isset($_POST['update_material'])){

            $MID=$_POST['update_material'];
            $query="SELECT * FROM m_material WHERE m_mid=$MID;";
            $result=mysqli_query($con,$query)or die(mysqli_error($con));
            $row=mysqli_fetch_array($result);

            ?>

<div class="container c">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>ADD QUANTITY</h1>
                    <form method="POST" action="addmaterial.php">
                    <div class="form-group">
                        <label>Material</label>
                            <select class="form-control" required>
                            <option><?php echo $row['material']; ?></option>
                            </select>
                            </div>

                        <div class="form-group">
                            <label>Quantity to be added</label>
                            <input type="number" class="form-control" placeholder="Enter Quantity to be added" name="newqty" required>
                        </div>
                        <div class="form-group">
                        <label>Unit</label>
                            <select class="form-control" required>
                            <option><?php echo $row['unit']; ?></option>
                            </select>
                            </div>
                        <button type="submit" value="<?php echo $row['m_mid']; ?>" class="btn btn-primary  btn-lg btn-block" name="new_quantity">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
    <?php
    }
    ?>

<script src="./js/preloader.js"></script>  
    </body>
</html>