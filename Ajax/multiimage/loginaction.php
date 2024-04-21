<?php 
session_start();
include("connection.php");
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$sql="SELECT * FROM `multiimage_table1` WHERE email='$email' AND password='$pass'";
$data= mysqli_query($conn,$sql);
$total= mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);
// print_r($result);
// print_r($result["user_id"]);
if($total)
{
   $_SESSION["id"]=$result["user_id"];
    header("location:display.php");
}
else
{
  echo "login failure";
}
?>