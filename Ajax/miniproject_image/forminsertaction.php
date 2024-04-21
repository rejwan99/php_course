<?php
include("connection.php");
$name= $_REQUEST["name"];
$email= $_REQUEST["email"];
$pass= md5($_REQUEST["pass"]);
$phn= $_REQUEST["phn"];
$filename= $_FILES["uploadimage"]["name"];
$tempname= $_FILES["uploadimage"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname, $folder);

// echo $name.", ".$email.", ".$pass.", ".$phn;
// echo "<br>";
// print_r($filename);

$sql= "INSERT INTO `user_image`(`user_id`, `name`, `email`, `password`, `phone`, `picsource`) VALUES ('','$name','$email','$pass','$phn','$folder')";
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