<?php 
include("connection.php");
$ublk=$_REQUEST["ublk"];
$sql="UPDATE `multiuser_table` SET `auth`='0' WHERE user_id='$ublk'";
$data= mysqli_query($conn,$sql);
if($data)
{
  echo "client unblocked";
}
else
{
   echo "client is not unblocked";
}
?>