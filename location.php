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
    <title>LOCATION</title>
</head>
<body onload="myfuction()">
    <div id="loading"></div>

<?php include 'navbar.php';   ?>
<?php
 include 'connect.php';
 $con=openConnection();

 $query="SELECT * FROM m_destination";
 $result=mysqli_query($con,$query)or die(mysqli_error($con));
//  echo "Number of products ".mysqli_num_rows($result);
?>
    <div class="container c">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>SELECT LOCATION</h1>
                    <form method="POST" action="approval.php" id="regForm1">

                        <div class="form-group">
                            <label>Destination</label>
                            <select class="form-control" name="dlocation" id="dlocation" required>
                            <?php
                            if(mysqli_num_rows($result)>0){
                             while($row=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $row['m_did']; ?>"><?php echo $row['destinations']; ?></option>
                                <?php
                                }
                                }
                                 ?>
                            </select>
                        </div>
                        <?php
                        $query="SELECT * FROM m_source";
                        $result=mysqli_query($con,$query)or die(mysqli_error($con));
                        //  echo "Number of products ".mysqli_num_rows($result);
                        ?>

                        <div class="form-group">
                            <label>Source</label>
                            <select class="form-control" name="slocation" id="slocation" required>
                            <?php
                            if(mysqli_num_rows($result)>0){
                             while($row=mysqli_fetch_array($result)){
                            if($row['m_sid']==1){
                                ?>
                            <option value="<?php echo $row['m_sid']; ?>" selected><?php echo $row['source']; ?></option>
                            <?php } 
                             else {?>
                            <option value="<?php echo $row['m_sid']; ?>"><?php echo $row['source']; ?></option>
                            <?php
                                }
                                }
                            }
                                 ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary  btn-lg btn-block" name="location">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>

          <script src="./js/script1.js"></script>  
          <script src="./js/preloader.js"></script>

</body>
</html>













