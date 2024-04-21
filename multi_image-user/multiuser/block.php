<?php 
include("connection.php");
$blk=$_REQUEST["blk"];
$sql="UPDATE `multiuser_table` SET `auth`='1' WHERE user_id='$blk'";
$data= mysqli_query($conn,$sql);
if($data)
{
  echo "client blocked";
}
else
{
   echo "client is not blocked";
}
?>