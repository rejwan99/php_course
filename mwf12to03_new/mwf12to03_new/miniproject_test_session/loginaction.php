<?php 
session_start();
include("connection.php");
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$sql="SELECT * FROM user WHERE email='$email' AND password='$pass'";
$data= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);

if($total)
{
	//echo "login success";
	$_SESSION["id"]=$result["user_id"];
	header("location:display.php");
}
else
{
	echo "login failure";
}
?>