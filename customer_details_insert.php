<?php
include("db_connect.php");
$customer_name=$_POST['customer_name'];
$address=$_POST['address'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$gender=$_POST['gender'];
$DOB=$_POST['DOB'];
$password=$_POST['password'];

$sql="insert into customer_details values(null,'$customer_name','$address','$email_id','$contact_no','$gender','$DOB')";
mysqli_query($conn,$sql);

$sql2="insert into login values(null,'$email_id','$password','customer','Enter Your Email ID','$email_id','Active')";
mysqli_query($conn,$sql2);
?>
<script>
alert("Register Successfully....");
document.location="login.php";
</script>