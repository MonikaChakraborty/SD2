<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE?></title>

    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

      <!-- Custom CSS -->
      <!-- <link rel="stylesheet" href="css/custom.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<style>

    body
    {
        /* padding-left: 40px; */
        background-image: url('../images/adminback.jpg');
        /* background-size: 1370px 720px ; */
        background-size: cover ;

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
        background-color:#E7FEE8;
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
    background-color: #D4F8D6 ;
}

/* .subreq
{
    padding-left: 190px;
    margin-top: -335px;
} */
/* .marginsuccess
{
    margin-top: -250px;
    margin-right: 100px;
    padding-left: 300px;
    padding-right: 270px;
} */
.requestdesign
{
    margin-bottom: 500px;
}

</style>

<body>
        <!-- Top Navbar -->
        <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color:#5F5D7B;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 pb-2" href="dashboard.php">OSMS</a></nav>

        <!-- Start Container -->
    <div class="container-fluid" style="margin-top:30px;">
        <div class="row">               <!-- Start Row -->
            <nav class="col-sm-2 sidebar py-5 shadow-lg" style="margin-right:30px; background-color: #73FFB1;"> <!-- Start Side Bar First Column -->
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">

                        <li class="nav-item"><a class="nav-link 
                        <?php if(PAGE == 'dashboard')
                        {echo 'active';} ?>" 
                        style="color: #0F7614" href="dashboard.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'work')
                        {echo 'active';} ?>" style="color:#0F7614 " href="work.php">
                        <i class="fab fa-accessible-icon"></i>Work Order</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'request')
                        {echo 'active';} ?>" style="color:#0F7614 " href="request.php">
                        <i class="fas fa-align-center"></i>Requests</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'assets')
                        {echo 'active';} ?>" style="color:#0F7614 " href="assets.php">
                        <i class="fas fa-database"></i>Assets</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'technician')
                        {echo 'active';} ?>" style="color:#0F7614 " href="technician.php">
                        <i class="fas fa-wrench"></i>Technician</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'requesters')
                        {echo 'active';} ?>" style="color:#0F7614 " href="requester.php">
                        <i class="fas fa-users"></i>Requester</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'sellreport')
                        {echo 'active';} ?>" style="color:#0F7614 " href="soldproductreport.php">
                        <i class="fas fa-table"></i>Sell Report</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'workreport')
                        {echo 'active';} ?>" style="color:#0F7614 " href="workreport.php">
                        <i class="fas fa-table"></i>Work Report</a></li>

                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'changepass')
                        {echo 'active';} ?>" style="color:#0F7614 " href="changepass.php">
                        <i class="fas fa-key"></i>Change Password</a></li>

                        <li class="nav-item"><a class="nav-link" style="color:#0F7614 " href="../logout.php">
                        <i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>    <!-- End Side Bar First Column  -->