<?php 
session_start();
include("connection.php");
$id=$_SESSION['id'];
$oldp=md5($_REQUEST["oldpass"]);
$newp=md5($_REQUEST["newpass"]);
$confp=md5($_REQUEST["confpass"]);
//echo $oldp,$newp,$confp;
$sql="SELECT * FROM user_pdo WHERE password=:oldp";
$query= $conn->prepare($sql);
$query->bindparam(':oldp',$oldp);
$query->execute();
if($query->rowCount()==0)
{
   echo "old password and database password are not same";
}
else
{
if($oldp!=$confp)
{
  if($newp==$confp)
  {
  	$sql="UPDATE user_pdo SET password=:confp WHERE user_id=:id";
  	$data= $conn->prepare($sql);
    $data->bindparam(':id',$id);
    $data->bindparam(':confp',$confp);
    $data->execute();
  	   if($data->execute())
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