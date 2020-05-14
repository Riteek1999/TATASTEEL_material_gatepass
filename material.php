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

if(isset($_POST['approval'])){
       $DESTINATION_ID = $_SESSION['dloc'];
       $SOURCE_ID = $_SESSION['sloc'];
       $USERMAIL=$_SESSION['usermail'];
       $APPROVER=$_POST['approver'];
       $_SESSION['approver']=$APPROVER;

       $query="SELECT * FROM user WHERE email='$USERMAIL';";
       $result=mysqli_query($con,$query)or die(mysqli_error($con));
       $row=mysqli_fetch_array($result);
   
       $USERID=$row['userid'];

      
       // $query="INSERT INTO approval(loc_id,approval,activeindex) VALUES($LOC,'$APPROVER','n')";
       // echo $query;
       // $result=mysqli_query($con,$query) or die(mysqli_error($con));
}
?>
<?php
$query="SELECT * FROM m_material WHERE activeindex='y';";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
?>
<div class="container c">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <h1>SELECT MATERIAL</h1>
                    <form method="POST" action="quantity.php">

                        <div class="form-group">
                            <label>Material</label>
                            <select class="form-control" name="material"  required>
                            <?php
                            if(mysqli_num_rows($result)>0){
                             while($row=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $row['material']; ?>"><?php echo $row['material']; ?></option>
                                <?php
                                }
                                }
                                 ?>
                            </select>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary  btn-lg btn-block" name="n_material">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script src="./js/preloader.js"></script>  
    </body>
</html>