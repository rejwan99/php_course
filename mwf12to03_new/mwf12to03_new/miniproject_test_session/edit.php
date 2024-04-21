<?php
session_start();
include("connection.php"); 
$id=$_REQUEST["ep"];
$sql= "SELECT * FROM user WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
$result= mysqli_fetch_assoc($data);
//print_r($result);
$_SESSION['oldimagepath']=$result["picsource"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
<form method="post" action="editaction.php" enctype="multipart/form-data">
	enter name: <input type="text" name="name" value="<?php echo $result['name'] ?>"><br>
	<input type="text" name="uid" value="<?php echo $id;?>" hidden>
	enter email: <input type="email" name="email" value="<?php echo $result['email'] ?>"><br>
	enter phone: <input type="text" name="phone" value="<?php echo $result['phone'] ?>"><br>
	enter image: <input type="file" name="uploadimage">
	<img src='<?php echo $img=$result["picsource"]?>' height="100" width="100"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>