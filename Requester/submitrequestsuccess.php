<?php
define('TITLE','Success');
include('includes/headerforsuccess.php');
// include('../Requester/RequesterProfile.php');

include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail= $_SESSION['rEmail'];
} else {
    echo "<script>location.href= 'RequesterLogin.php'</script>";
}

$sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);

if($result->num_rows == 1){
    $row = $result->fetch_assoc();

    echo "<div class='marginsuccess'>
    <table class='table container-fluid'>
    <tbody>
    <tr>
    <th class='thead-dark'>Request ID</th>
    <td>".$row['request_id']."</td>
    </tr>
    <tr>
    <th>Name</th>
    <td>".$row['requester_name']."</td>
    </tr>
    <tr>
    <th>Email ID</th>
    <td>".$row['requester_email']."</td>
    </tr>
    </tr>
    <tr>
    <th>Request Info</th>
    <td>".$row['request_info']."</td>
    </tr>
    </tr>
    <tr>
    <th>Request Description</th>
    <td>".$row['request_desc']."</td>
    </tr>

    <tr>
    <td><form class='d-print-none'>
     
    <input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'></form></td>


    </tr>
    </tbody>
    </table>
    </div>";
} else{
    echo "Failed";
}
include('includes/footer.php');
?>
