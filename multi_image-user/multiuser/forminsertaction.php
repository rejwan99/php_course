<?php 
include("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$phn=$_REQUEST["phone"];
// echo $name,$email,$pass,$phn;
$sql="INSERT INTO `multiuser_table`(`user_id`, `name`, `email`, `password`, `phone`, `user`,`auth`) VALUES ('','$name','$email','$pass','$phn','client','0')";
$data= mysqli_query($conn,$sql);
if($data)
{
   // echo "data inserted";
	header("location:login.php");
}
else
{
	echo "data not inserted";
}
?>