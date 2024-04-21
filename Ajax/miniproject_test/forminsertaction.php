<?php
include("connection.php");
$name= $_REQUEST["name"];
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["pass"]);
$phn= $_REQUEST["number"];
// echo $name.", ".$email.", ".$pass.", ".$phn;
$sql= "INSERT INTO `user1`(`user_id`, `name`, `email`, `password`, `phone`) VALUES ('','$name','$email','$pass','$phn') ";
$data= mysqli_query($conn,$sql);
if($data)
{
	// echo "data inserted";
	// header("location:login.php");
	echo "<script>alert('insert data succesful')</script>";
	echo "<script>window.location.href='login.php'</script>";

}
else
{
	echo "data not inserted";
}

?>