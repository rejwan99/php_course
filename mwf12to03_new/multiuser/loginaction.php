<?php 
include("connection.php");
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$sql="SELECT * FROM `multiuser_table` WHERE email='$email'  AND password='$pass'";
$data= mysqli_query($conn,$sql);
if($data)
{
  header("location:display.php");
}
else
{
  echo "login failure";
}
?>