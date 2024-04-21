<?php 
session_start();
include("connection.php");
$id=$_SESSION["id"];
$oldp=md5($_REQUEST["oldp"]);
$newp=md5($_REQUEST["newp"]);
$confp=md5($_REQUEST["confp"]);
$sql1="SELECT * FROM `clientpanel_ajax` WHERE password='$oldp'";
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
   $sql="UPDATE `clientpanel_ajax` SET password='$confp' WHERE user_id='$id'";
   $data= mysqli_query($conn,$sql);
   if($data)
   {
    header("location:login.php");
   // echo "<script>alert('change password succesful')</script>";
   // echo "<script>window.location.href='login.php'</script>";
   }
   else
   {
    echo "password not changed";
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