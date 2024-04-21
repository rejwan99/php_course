<?php 
include("connection.php");
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$sql="SELECT * FROM user WHERE email='$email' AND password='$pass'";
$data= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data);
if($total)
{
	//echo "login success";
	header("location:display.php");
}
else
{
	echo "login failure";
}
?>