<?php 
include("connection.php");
session_start();
$id=$_REQUEST["ep"];
$sql="SELECT * FROM `registration_pdo` WHERE user_id=:id";
$query= $conn->prepare($sql);
$query->bindparam(':id',$id);
$query->execute();
$result= $query->fetch(PDO::FETCH_ASSOC);
$_SESSION['oldimagepath']=$result["image"];
//print_r($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update</title>
</head>
<body>
<form method="post" action="editaction.php" enctype="multipart/form-data">
	Enter name: <input type="text" name="name" value="<?php echo $result['name']?>"><br>
	<input type="text" name="uid" value="<?php echo $id;?>" hidden> 
	Enter address1: <input type="text" name="add1" value="<?php echo $result['address1']?>"><br>
	Enter address2: <input type="text" name="add2" value="<?php echo $result['address2']?>"><br>
	Enter dob: <input type="date" name="dob" value="<?php echo $result['dob']?>"><br>
	Enter email: <input type="email" name="email" value="<?php echo $result['email']?>"><br>
	Enter phone: <input type="number" name="phone" value="<?php echo $result['phone']?>"><br>

	Enter gender: 
	<input type="radio" name="gender" value="male" <?php if($result["gender"]=="male"){echo "checked";}?>>Male
	<input type="radio" name="gender" value="female" <?php if($result["gender"]=="female"){echo "checked";}?>>Female
	<input type="radio" name="gender" value="others" <?php if($result["gender"]=="others"){echo "checked";}?>>Others<br>

	Enter degree: <select name="degree" value="<?php echo $result['degree']?>">
    <option>Select</option>
	<option value="B.tech" <?php if($result["degree"]=="B.tech"){echo "selected";}?>>B.tech</option>
	<option value="BCA" <?php if($result["degree"]=="BCA"){echo "selected";}?>>BCA</option>
	<option value="M.Tech" <?php if($result["degree"]=="M.tech"){echo "selected";}?>>M.Tech</option>
	<option value="B.Sc" <?php if($result["degree"]=="B.Sc"){echo "selected";}?>>B.Sc</option>
	              </select><br>
	<?php 
	$langarray=explode(",", $result["language"]);
	?>
	Enter language: 
	<input type="checkbox" name="language[]" value="Bengali" <?php if(in_array("Bengali", $langarray)){echo "checked";}?>>Bengali
	<input type="checkbox" name="language[]" value="Hindi" <?php if(in_array("Hindi", $langarray)){echo "checked";}?>>Hindi 
	<input type="checkbox" name="language[]" value="English" <?php if(in_array("English", $langarray)){echo "checked";}?>>English<br>

	Choose Image: <input type="file" name="uploadimage">
	<img src="<?php echo $img=$result['image']?>" height="100" width="100"><br>
	<input type="submit" name="submit" value="submit">             			   

</form>
</body>
</html>