<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
<form method="post" action="loginaction.php">
	<table border="1" cellspacing="0">
		<tr>
			<td colspan="2" id="h1">Login Plese</td>
		</tr>
		<tr>
			<td>Enter Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Enter Password</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td colspan="2" id="s1"><input type="submit" name="submit" value="Submit">   <a href="registrationform.php">New Registration</a></td>
		</tr>
	</table>
</form>
</body>
<style type="text/css">
	#h1
	{
		text-align: center;
		color: blue;
	}
	#s1
	{
		text-align: center;
	}
</style>
</html>