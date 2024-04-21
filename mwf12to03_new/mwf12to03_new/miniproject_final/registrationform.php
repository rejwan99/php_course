<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
<form method="post" action="registrationformaction.php" enctype="multipart/form-data">
<table border="1" cellspacing="0">
	<tr id="h3">
		<td colspan="2">
			<h3>Registration Form</h3>
		</td>
	</tr>
	<tr>
		<td>Enter Name: </td>
	    <td><input type="text" name="name"></td>
   </tr>
   <tr>
   	<td>Enter Address: </td>
   	<td><input type="text" name="add1"></td>
   </tr>
   <tr>
   	<td>Enter Address2: </td>
   	<td><textarea name="add2"></textarea></td>
   </tr>
   <tr>
   	<td>Choose Dob: </td>
   	<td><input type="date" name="dob"></td>
   </tr>
   <tr>
   	<td>Enter Email: </td>
   	<td><input type="email" name="email"></td>
   </tr>
	<tr>
		<td>Enter password: </td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td>Enter phone: </td>
		<td><input type="number" name="phone"><br></td>
	</tr>
	<tr>
		<td>Choose Gender: </td>
		<td><input type="radio" name="gender" value="male">Male
	        <input type="radio" name="gender" value="female">Female
	        <input type="radio" name="gender" value="other">Other</td>
	</tr>
	<tr>
		<td>Choose Degree: </td>
		<td><select name="degree">
		    	<option>Select</option>
				<option value="B.Tech">Btech</option>
				<option value="BCA">Bca</option>
				<option value="M.Tech">Mtech</option>
				<option value="B.Sc">B.Sc</option>
			</select></td>
	</tr>
	<tr>
		<td>Choose Language: </td>
		<td><input type="checkbox" name="language[]" value="Hindi">Hindi
	        <input type="checkbox" name="language[]" value="Bengali">Bengali 
	        <input type="checkbox" name="language[]" value="English">English
	</td>
	</tr>
	<tr>
		<td>Upload Image: </td>
		<td><input type="file" name="uploadimage"></td>
	</tr>
	<tr id="sub">
		<td colspan="2"><input type="submit" name="submit"> <input type="reset" name="reset"></td>
	</tr>     
</table>   	     
</form>
</body>
<style type="text/css">
	h3{
		color: blue;
		text-align: center;
	}
	#h3{
		background-color: lightgray;
	}
	#sub{
		text-align: center;
		background-color: lightgray;
	}
</style>
</html>