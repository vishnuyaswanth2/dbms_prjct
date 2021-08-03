<?php
include_once 'config.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['state'];
$district = $_POST['district'];
$pincode = $_POST['pincode'];
$email = $_POST['email'];
$bloodgroup = $_POST['bloodgroup'];
$sql="insert into donors (fname,lname,gender,dob,address,state,district,pincode,email,bloodgroup) values ('$fname','$lname','$gender','$dob','$address','$state','$district','$pincode','$email','$bloodgroup')";
$query=mysqli_query($conn,$sql);
if($query){
    header("Location: thankyou.html");
}

?>