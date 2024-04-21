<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
<form method="post" action="forminsertaction.php" enctype="multipart/form-data">
	Enter Name: <input type="text" name="name"><br>
	Enter Email: <input type="email" name="email"><br>
	Enter Password: <input type="password" name="pass"><br>
	Enter Phone: <input type="text" name="phone"><br>
	Choose Image: <input type="file" name="uploadimage"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>