<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/Favicon.ico">
    <link rel="icon" sizes="192x192" href="images/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>UPDATE MATERIAL</title>
</head>
<body onload="myfuction()">
    <div id="loading"></div>

    
<?php include 'navbar.php';   ?>
<?php
 include 'connect.php';
 $con=openConnection();

 $query="SELECT * FROM m_material;";
 $result=mysqli_query($con,$query)or die(mysqli_error($con));
?>
<!-- <div class="container"> -->
    <!-- <div class="jumbotron"> -->
        <!-- <div class="card"> -->
         <br><h3 class="text-center">Material to Update</h3>
         <form method="POST" action="vmaterial.php">
                <!-- <div class="card-body">    -->
                <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                <tr class="bg-primary text-center" style="color:white;">
                    <th>Material ID</th>
                    <th>Material</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Action</th>
                </tr>

                <?php
                if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                ?>

                <tr class="text-center">
                    <td><?php echo $row['m_mid']; ?></td>
                    <td><?php echo $row['material']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['unit']; ?></td>
                    <td>
                        <button type="submit" value="<?php echo $row['m_mid']; ?>" class="btn btn-success badge-pill" name="update_material">UPDATE</button>
                        <?php $ACT=$row['activeindex'];
                        if($ACT=='y'){
                            ?>
                        <button type="submit" value="<?php echo $row['m_mid']; ?>" class="btn btn-danger badge-pill" name="not_ava">NOT AVAILABLE</button>
                        <?php } else {?>
                            <button type="submit" value="<?php echo $row['m_mid']; ?>" class="btn btn-primary badge-pill" name="ava">AVAILABLE</button>
                        <?php } ?>
                    </td>
                </tr>
                <?php
                }
            }
            ?>

        </table>
        </div>
        </form>
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->



<script src="./js/preloader.js"></script>
</body>
</html>