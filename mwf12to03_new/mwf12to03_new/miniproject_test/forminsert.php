<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
<form method="post" action="forminsertaction.php" enctype="multipart/form-data">
	enter name: <input type="text" name="name"><br>
	enter email: <input type="email" name="email"><br>
	enter password: <input type="password" name="password"><br>
	enter phone: <input type="text" name="phone"><br>
	enter image: <input type="file" name="uploadimage"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>