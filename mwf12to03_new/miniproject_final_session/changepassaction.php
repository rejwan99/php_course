<?php 
session_start();
include("connection.php");
$id=$_SESSION["id"];
$oldp=md5($_REQUEST["oldpass"]);
$newp=md5($_REQUEST["newpass"]);
$confp=md5($_REQUEST["conpass"]);
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
?>