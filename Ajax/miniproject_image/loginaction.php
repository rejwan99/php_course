<?php
include("connection.php");
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["pass"]);
// echo $email.", ".$pass;
$sql= "SELECT * FROM user_image WHERE email='$email' AND password='$pass'";
$data= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data);
if($total)
{
	// echo "Login success";
	header("location:display.php");

}
else
{
	echo "Login failure";
}

?>