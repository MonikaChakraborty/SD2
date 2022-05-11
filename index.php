<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSMS</title>
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<!-- <style>
    .fi-color:hover
    {
        color: #E2C6AF;
    }
    .adminstyle:hover
{
    color:#E2C6AF;
}
</style> -->

<body class="back2-img" style="background-image:url(images/banner2.jpg);">
<!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#585959">
        <a href="index.php" class="navbar-brand">OSMS</a>
        <span class="navbar-text">Customer's Happiness is Our Aim</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>

    </nav>
<!-- End Navigation -->

 <!-- Start Header Jumbotron -->
 <header class="jumbotron back1-img" style="background-image:url(images/banner1.jpg);">
 <div class="myclass mainHeading">
     <h1 class="text-uppercase font-weight-bold" style="color:#E4BDBD">Welcome to OSMS</h1>
     <p class="font-italic" style="color:#636581; size: 70px;"><b>Customer's Happiness is Our Aim</b></p>
     <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
     <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
 </div>
 </header>
 <!-- End Header Jumbotron -->

 <!-- Start Intro Section -->
 <div class="container">
     <div class="jumbotron">
         <h3 class="text-center">OSMS Services</h3>
         <p>
             OSMS Sevices is Bangladesh's leading chain of multi-brand Electronics and Electrical service workshops
             offering wide array of services. We focus on enhancing your uses experience by offering world-class 
             Electronic Appliances maintenance services. Our sole mission is "To provide Electronic Appliances care
             services to keep the devices fit and helthy and customers happy and smiling".

             With well-equipped Electronic Appliances service centres and fully trained mechanics, we provide quality
             services with excellent packages that are designed to offer you great savings.

             Our sate-of-art workshops are conveniantly located in many cities across the county. Now you can book
             your service online by doing Registration.
         </p>
     </div>
 </div>
 <!-- End Intro Section -->

 <!-- Start Services Section Container -->

<div class="container text-center border-bottom" id="Services">
    <div class="jumbotron">
        <h2>Our Services</h2>
        <div class="row mt-4">
        <div class="col-sm-4 mb-4">
            <a href=""><i class="fas fa-tv fa-8x text-success"></i></a>
            <h4 class="mt-4">Electronic Appliances</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href=""><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
            <h4 class="mt-4">Preventive Maintenance</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href=""><i class="fas fa-cogs fa-8x text-warning"></i></a>
            <h4 class="mt-4">Fault Repair</h4>
        </div>
        </div>
    </div>
</div> 
 <!-- End Services Section Container -->

 <!-- Start Registration Form -->
 <?php include('UserRegistration.php') ?>
 <!-- End Registration Form -->

 <!-- Start Happy Customers -->
 <div class="jumbotron" style="background-image: linear-gradient(180deg, rgba(91, 106, 182), rgba(222, 226, 249)); height:500px;">
 <div class="container">
     <h2 class="text-center text-white" style="margin-top:-28px">Happy Customers</h2>
     <div class="row mt-3">
         <div class="col-lg-3 col-sm-6">           <!-- Start First Column -->
             <div class="card shadow-lg mb-2" style="height:390px">
                 <div class="card-body text-center">
                     <img src="images/avatar1.jpg" class="img-fluid" style="border-radius:100px;" alt="avt1">
                     <h4 class="card-title">Nafis Rahman</h4>
                     <p class="card-text">Informations are articulate. I'm pleased to see this application and 
                         Human Engagement.My heartiest thanks to the initiator.</p>
                 </div>
             </div>
          </div>              <!-- End First Column -->
          <div class="col-lg-3 col-sm-6">           <!-- Start Second Column -->
             <div class="card shadow-lg mb-2" style="height:390px">
                 <div class="card-body text-center">
                     <img src="images/avatar2.jpg" class="img-fluid" style="border-radius:100px;" alt="avt2">
                     <h4 class="card-title">Jyoti Sinha</h4>
                     <p class="card-text">Very innovative and I love it. You guys on time always for service. Quick 
                         response,provide all the services good.</p>
                 </div>
             </div>
          </div>                <!-- End Second Column -->
          <div class="col-lg-3 col-sm-6">           <!-- Start Third Column -->
             <div class="card shadow-lg mb-2" style="height:390px">
                 <div class="card-body text-center">
                     <img src="images/avatar3.jpg" class="img-fluid" style="border-radius:100px;" alt="avt3">
                     <h4 class="card-title">Asif Uddin</h4>
                     <p class="card-text">It's a user friedly application.Using it for
                          home & office issues as well.It's convenient for busy working people.</p>
                 </div>
             </div>
          </div>                <!-- End Third Column -->
          <div class="col-lg-3 col-sm-6">           <!-- Start Fourth Column -->
             <div class="card shadow-lg mb-2" style="height:390px">
                 <div class="card-body text-center">
                     <img src="images/avatar4.jpg" class="img-fluid" style="border-radius:100px;" alt="avt4">
                     <h4 class="card-title">Rumena Zaman</h4>
                     <p class="card-text">I have used it couple of times and I'm impressed.The service providers are 
                         well behaved.Keep consistency on quality of service.</p>
                 </div>
             </div>
          </div>                <!-- End Fourth Column -->
     </div>
 </div>
 </div>                         
<!-- End Happy Customers -->

<!-- Start Contact Us -->
<div class="container" id="Contact">
    <h2 class="text-center mb-4" style="color:#CFD5F0">Contact Us</h2>
    <div class="row">


     <!-- Start 1st Column -->
     <?php include('contactform.php') ?>
      <!-- End 1st Column -->

        <div class="col-md-4 text-center" style="color:#848CAE">    <!-- Start 2nd Column -->
        <strong style="color:#BBC3EA">Headquarter:</strong> <br>
        OSMS Pvt Ltd, <br>
        Road 25/A, Banani <br>
        Dhaka - 1212 <br>
        Phone: +01745630011 <br>
        <a href="#" target="_blank">www.osms.com</a><br>
        <br><br>
        <strong style="color:#BBC3EA">Chittagong Branch:</strong> <br>
        OSMS Pvt Ltd, <br>
        Mehhedibag, Chittagong <br>
        Chittagong - 804002 <br>
        Phone: +01746462002 <br>
        <a href="#" target="_blank">www.osms.com</a> <br>
        </div>                   <!-- End 2nd Column -->
    </div>
</div>
<!-- End Contact Us -->

<!-- Start Footer  -->
<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6">     <!-- Start 1st Column -->
            <span class="pr-2">Follow Us:</span>
            <a href="" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
            <a href="" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
            <a href="" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
            <a href="" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
            <a href="" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
            </div>              <!-- End 1st Column -->

            <div class="col-md-6 text-right">                     <!-- Start 2nd Column -->
            <small>Designed by Group-11 &copy; 2022</small>
            <small class="ml-2"><a class="adminstyle" href="Admin/login.php" style="color:#585959">Admin Login</a></small>
            </div>              <!-- End 2nd Column -->
        </div>
    </div>
</footer>


<!-- JavaScript -->
<script src="js/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"</script> -->
<script src="js/popper.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="js/all.min.js"></script>

</body>
</html>