<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
</head>
<body>
<form method="post" action="changepassaction.php">
	old password: <input type="text" name="oldpass"><br> 
	new password: <input type="text" name="newpass"><br> 
	confirm password: <input type="text" name="confpass"><br>
	<input type="submit" name="submit" value="change password">
</form>
</body>
</html>