<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
<form method="post" action="registrationformaction.php" enctype="multipart/form-data">
	Enter Name: <input type="text" name="name"><br>
	Enter Address: <input type="text" name="add1"><br>
	Enter Address2: <textarea name="add2"></textarea><br>
	Choose Dob: <input type="date" name="dob"><br>
	Enter Email: <input type="email" name="email"><br>
	Enter password: <input type="password" name="password"><br>
	Enter phone: <input type="number" name="phone"><br>
	Choose Gender: <input type="radio" name="gender" value="male">Male
	              <input type="radio" name="gender" value="female">Female
	              <input type="radio" name="gender" value="other">Other<br>
	Choose Degree: <select name="degree">
					<option>Select</option>
					<option value="B.Tech">B.Tech</option>
					<option value="BCA">BCA</option>
					<option value="M.Tech">M.Tech</option>
					<option value="B.Sc">B.Sc</option>
			   	   </select><br>
	Choose Language: <input type="checkbox" name="language[]" value="Hindi">Hindi
	         		 <input type="checkbox" name="language[]" value="Bengali">Bengali 
	        	     <input type="checkbox" name="language[]" value="English">English<br>
	Upload Image: <input type="file" name="uploadimage"><br>
	<input type="submit" name="submit"> <input type="reset" name="reset">        	     
</form>
</body>
</html>