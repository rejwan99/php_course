<?php 
session_start();
include("connection.php");
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["pass"]);
// echo $email, $pass;
$sql= "SELECT * FROM `clientpanel_ajax` WHERE email='$email' AND password='$pass'";
$data= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);
if($total)
{
    echo "Login Successful";
	$_SESSION["id"]=$result["user_id"];
	header("location:display.php");
}
else
{
	echo "login failure";
}
?>