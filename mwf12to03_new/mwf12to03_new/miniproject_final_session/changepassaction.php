<?php 
session_start();
include("connection.php");
$id=$_SESSION["id"];
$oldp=md5($_REQUEST["oldpass"]);
$newp=md5($_REQUEST["newpass"]);
$confp=md5($_REQUEST["conpass"]);
$sql1="SELECT * FROM registration_user WHERE password='$oldp'";
$data1= mysqli_query($conn,$sql1);
$total= mysqli_num_rows($data1);
if($total==0)
{
  echo "old password and database password are not same";
}
else
{
if($oldp!=$confp)
{
   if($newp==$confp)
   {
 	 $sql="UPDATE registration_user SET password='$confp' WHERE user_id='$id'";
 	 $data= mysqli_query($conn,$sql);
 	 if($data)
 	 {
 	 	header("location:login.php");
 	 }
 	 else
 	 {
 	 	echo "password not updated";
 	 }
   }
   else
   {
   	 echo "new password and confirm password are not matched.";
   }	
}
else
{
  echo "old password and new password are matched.";
}
}
?>