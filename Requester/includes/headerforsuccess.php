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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


    <title><?php echo TITLE?></title>
</head>
<style>

    body
    {
        /* padding-left: 40px; */
        background-image: url('../images/profileBanner.jpg');
        background-size: 1370px 790px ;
        background-repeat: no-repeat;
    }
    .boxpass
    {
        /* padding-left:100px; */
        padding-right: 300px;
        
        box-shadow:0 0 10px #04F1E2;
        /* margin-top: -250px;
        margin-left: 240px;
        padding-left: 300px; */
        

    }
    .box
    {
        padding:50px;
        box-shadow:0 0 10px #04F1E2;
    }
    /* .boxheader
    {
        margin-right:800px;
        margin-left: 100px;
        margin-top: -1200px; 

        padding-top:20px;
        box-shadow:0 0 10px #04F1E2;
    } */
    .active
    {
        background-color:#79C0EE;
    }
    /* .sidebar
    {
        padding-bottom: 5px;
    } */
    /* i
    {
        color: black;
    }

    a
{
    color: black;
}*/
/* .active
{
    
    background-color: #dc3545;
}  */
a:hover
{
    background-color: black;
}

.subreq
{
    padding-left: 190px;
    margin-top: -335px;
}
.marginsuccess
{
    margin-top: -250px;
    margin-right: 100px;
    padding-left: 300px;
    padding-right: 270px;
}


/* div.alert.alert-warning.col-sm-6.ml-5.mt-2
{
    margin-right: -900px;
    
    padding-right: 200px;
} */

</style> -->
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color:#5F5D7B;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 pb-2" href="RequesterProfile.php">OSMS</a></nav>

    <!-- Start Container -->
    <div class="container-fluid" style="margin-top:30px;">
        <div class="row">               <!-- Start Row -->
            <nav class="col-sm-2 sidebar py-5 shadow-lg" style="margin-right:30px; background-color:#1374A0"> <!-- Start Side Bar First Column -->
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">

                        <li class="nav-item"><a class="nav-link" style="color:#8FF4F9" href="RequesterProfile.php">
                        <i class="fas fa-user"></i>Profile</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#8FF4F9" href="SubmitRequest.php">
                        <i class="fab fa-accessible-icon"></i>Submit Request</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#8FF4F9" href="CheckStatus.php">
                        <i class="fas fa-align-center"></i>Service Status</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#8FF4F9" href="Requesterchangepass.php">
                        <i class="fas fa-key"></i>Change Password</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#8FF4F9" href="../logout.php">
                        <i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>    <!-- End Side Bar First Column  -->