<?php 
session_start();
include("connection.php");
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$sql="SELECT * FROM `multiuser_table` WHERE email='$email'  AND password='$pass'";
$data= mysqli_query($conn,$sql);
$data1= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data1);
$result= mysqli_fetch_assoc($data1);
if($data)
{
  header("location:display.php");
}
// if($total)
// {
//   $_SESSION["id"]=$result["user_id"];
//   header("location:clientdisplay.php");
// }
else
{
  echo "login failure";
}
?>