<?php 
$servername="localhost";
$username="root";
$password="";
$db="mwf12to03_new";
$conn=mysqli_connect($servername,$username,$password,$db);
if($conn)
{
	//echo "Database Connected";
}
else
{
	echo "Not Connected";
}
?>