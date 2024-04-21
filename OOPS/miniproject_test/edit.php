<?php 
include("connection.php");
session_start();
$id= $_REQUEST["ep"];
$sql= "SELECT * FROM user_pdo WHERE user_id=:id";
$query= $conn->prepare($sql);
$query->bindparam(':id',$id);
$query->execute();
$result= $query->fetch(PDO::FETCH_ASSOC);
$_SESSION['oldimagepath']=$result["picsource"];
//print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
<form method="post" action="editaction.php" enctype="multipart/form-data">
	Enter Name: <input type="text" name="name" value="<?php echo $result['name']?>"><br>
	<input type="text" name="uid" value="<?php echo $id;?>" hidden>
	Enter Email: <input type="email" name="email" value="<?php echo $result['email']?>"><br>
	Enter Phone: <input type="text" name="phone" value="<?php echo $result['phone']?>"><br>
	Choose Image: <input type="file" name="uploadimage"><img src='<?php echo $img=$result["picsource"]?>' height="100" width="100"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>