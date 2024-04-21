<?php 
include("connection.php");
session_start();
$id=  $_SESSION["id"];
$oldp= md5($_REQUEST["oldpass"]);
$newp= md5($_REQUEST["newpass"]);
$confp= md5($_REQUEST["confpass"]);
//echo $oldp." ".$newp." ".$confp;
$sql= "SELECT * FROM `registration_pdo` WHERE password=:oldp";
$query= $conn->prepare($sql);
$query->bindparam(':oldp',$oldp);
$query->execute();
if($query->rowCount()==0)
{
	echo "oldpass is not matched";
}
else
{
	if($oldp!=$confp)
	{
		if($newp==$confp)
		{
			$sql= "UPDATE `registration_pdo` SET `password`=:confp WHERE user_id=:id";
			$data= $conn->prepare($sql);
			$data->bindparam(':id',$id);
			$data->bindparam(':confp',$confp);
			$data->execute();
			if($data->execute())
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
			echo "new pass and confirm password are not matched";
		}
	}
	else
	{
		echo "old password and new password are same";
	}
}
?>