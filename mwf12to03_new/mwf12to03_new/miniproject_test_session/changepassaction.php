<?php 
session_start();
include("connection.php");
$id=$_SESSION['id'];
$oldp=md5($_REQUEST["oldpass"]);
$newp=md5($_REQUEST["newpass"]);
$confp=md5($_REQUEST["confpass"]);
//echo $oldp,$newp,$confp;
$sql1="SELECT * FROM user WHERE password='$oldp'";
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
  	$sql="UPDATE user SET password='$confp' WHERE user_id='$id'";
  	$data= mysqli_query($conn,$sql);
  	   if($data)
         {
 		   //echo "Insert Data Successfully";
		   header("location:login.php");
	     }
      else
        {
	    echo "Not updated";
        }
  }
  else
  {
  	echo "new and confp are not matched";
  }
}
else
{
	echo "old and new password is same";
}
}
?>