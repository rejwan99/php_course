<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>
</head>
<body>
<form>
	<table border="1" cellspacing="0">
		<tr>
			<td colspan="2"><h3>Registration Form</h3></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="confpass"></td>
		</tr>
		<tr>
			<td>Phone No.:</td>
			<td><input type="number" name="phone"></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="other">Other
			</td>
		</tr>
		<tr>
			<td>Language:</td>
			<td>
				<input type="checkbox" name="language" value="bengali">Bengali
				<input type="checkbox" name="language" value="hindi">Hindi
				<input type="checkbox" name="language" value="english">English
			</td>
		</tr>
		<tr>
			<td>Zip Code:</td>
			<td><input type="text" name="zipc"></td>
		</tr>
		<tr>
			<td colspan="2" id="b1">
				<button name="register">Register</button>
				<button name="reset">Reset</button>
			</td>
		</tr>
	</table>
</form>
<style type="text/css">
	body
	{
		background-color: lightgray;
		padding: 80px 280px;
	}
	h3{
		text-align: center;
	}
	#b1{
		text-align: center;
	}
	table
	{
		background-color: darkred;
		color: white;
	}
</style>
</body>
</html>