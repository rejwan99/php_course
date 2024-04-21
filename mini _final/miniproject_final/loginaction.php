<?php 
include("connection.php");
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$sql= "SELECT * FROM registration_user WHERE email='$email' AND password='$pass'";
$data= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data);
if($total)
{
	//echo "Login Successful";
	header("location:display.php");
}
else
{
    echo "Login Failed";
}
?>