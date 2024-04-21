<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
<form method="post" action="multiimageaction.php" enctype="multipart/form-data">
	Enter Name: <input type="text" name="name"><br>
	Enter email: <input type="email" name="email"><br>
	Enter Password: <input type="password" name="password"><br>
	Enter Phone: <input type="number" name="phone"><br>
	Choose image1: <input type="file" name="image1"><br>
	Chose image2: <input type="file" name="image2"><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>