<?php
include('../dbConnection.php');
session_start();
if(!isset($_SESSION['is_login'])){
if(isset($_REQUEST['rEmail'])){
$rEmail = mysqli_real_escape_string($conn,trim($_REQUEST['rEmail']));
$rPassword = mysqli_real_escape_string($conn,trim($_REQUEST['rPassword']));

$sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email = '".$rEmail."' AND
 r_password = '".$rPassword."' limit 1";
 $result = $conn->query($sql);

 if($result->num_rows == 1){
     $_SESSION['is_login'] = true;
     $_SESSION['rEmail'] = $rEmail;
     echo "<script>location.href='RequesterProfile.php'</script>";
     exit;
 } else {
     $msg =  '<div class="alert alert-warning mt-2">Enter Valid Email and Password</div>';
 }
}
} else {
         echo "<script>location.href='RequesterProfile.php'</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <style>
        body
        {
            background-image: url('../images/loginBanner.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .custom-margin
        {
            margin-top: 8vh;
        }
        .box
        {
            
            padding:50px;
            box-shadow:0 0 5px #999;
        }
        .btn2
        {
            background-color: #D2B597;
            color:black;
        }
    </style>

    <title>Login</title>
</head>
<body>
    <div class="mb-3 mt-5 text-center" style="font-size:30px;">
    <i class="fas fa-handshake-angle" style="color:#fffbde"></i>
        <span style="color: #fffbde">Online Service Management System</span>
    </div>
    <p class="text-center" style="font-size:20px; Color: #ffe0b2;"><i class="fas fa-user-secret" 
    style="color:#F6E475"></i>Requester Area</p>
    <div class="container-fluid">
        <div class="row justify-content-center custom-margin">
            <div class="col-sm-6 col-md-4">
                <form action="" class="box" method="POST">
                    <div class="form-group">
                       <i class="fas fa-user" style="Color: #fffbde"></i><label for="email" class="font-weight-bold pl-2" 
                       style="Color: #fffbde">Email</label>
                       <input type="email" class="form-control" placeholder="Email" name="rEmail">
                       <small class="form-text" style="Color: #fffbde">We'll never share your email with anyone else.
                       </small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key" style="Color: #fffbde"></i><label for="pass" 
                        class="font-weight-bold mt-3 pl-2" style="Color: #fffbde">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="rPassword">
                    </div>
                    <button type="submit" class="btn btn-danger mt-3 font-weight-bold btn-block shadow-sm">
                        Login</button>

                        <?php if(isset($msg)) {echo $msg;}
                        ?>
                </form>
                <div class="text-center"><a href="../index.php" class="btn mt-3 font-weight-bold shadow-sm btn2"
                >Back to Home</a></div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript Files -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>


</body>
</html>