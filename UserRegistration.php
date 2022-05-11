 <?php
include('dbConnection.php');

if(isset($_REQUEST['rSignup'])) 
// Checking for Empty Fields
{
    if(($_REQUEST['rName']=="") || ($_REQUEST['rEmail']=="") || ($_REQUEST['rPassword']==""))
    {
        $regmsg = '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>';
    } else {
// Checking Email Already Registered
        $sql = " SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."' ";
        $result = $conn->query($sql);

        if($result->num_rows==1){
            $regmsg = '<div class="alert alert-warning mt-2" role="alert">Email ID Already Registered</div>';
        } else {
// Assigning User's Values to Variables
        $rName=$_REQUEST['rName'];
        $rEmail=$_REQUEST['rEmail'];
        $rPassword=$_REQUEST['rPassword'];
    
        $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES('$rName', '$rEmail' , '$rPassword')";
        
       if($conn->query($sql) == TRUE){
           $regmsg = '<div class="alert alert-success mt-2" role="alert">Account Successfully Created</div>';
       } else {
           $regmsg = '<div class="alert alert-warning mt-2" role="alert">Unable to Create Account</div>';
       }
     }
   }
}
?>
 
 
 <!-- Start Registration Form -->
 <!-- <div class="container pt-5" id="registration"
  style="background-image: linear-gradient( rgba(116, 119, 186), rgba(201, 224, 232))"> -->
  <div class="container pt-5" id="registration">
     <!-- <div class="jumbotron"> -->
         <h2 class="text-center" style="color:#F6D7D3">Create an Account</h2>
         <div class="row mt-4 mb-4">
         <div class="col-md-6 offset-md-3" style="padding: 50px; box-shadow:0 0 5px #999;">
             <form action="" class="shadow-lg p-4" method="POST">
                 <div class="form-group">
                     <i class="fas fa-user" style="color:#E5A69F"></i> <label for="name" class="font-weight-bold pl-2" 
                     style="color:#E5A69F">Name</label>
                     <input type="text" class="form-control" placeholder="Name" name="rName" 
                     >
                 </div>
                 <div class="form-group">
                     <i class="fas fa-user" style="color:#E5A69F"></i> <label for="email" class="font-weight-bold pl-2"
                     style="color:#E5A69F">Email</label>
                     <input type="email" class="form-control" placeholder="Email" name="rEmail">
                     <small class="form-text">We'll never share your email with anyone else.</small>
                 </div>
                 <div class="form-group">
                     <i class="fas fa-key" style="color:#E5A69F"></i> <label for="pass" class="font-weight-bold pl-2"
                     style="color:#E5A69F">New Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="rPassword">
                 </div>
                 <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" 
                 name="rSignup">Sign Up</button>
                 <em style="font-size:10px; color:white;">Note - By clicking Sign Up, you agree to our Terms, Data Policy and 
                 Cookie Policy</em>

                 <?php if(isset($regmsg)) 
                 {echo $regmsg;}
                 ?>
             </form>
         </div>
         </div>
     <!-- </div>    -->
 </div>
 <!-- End Registration Form -->