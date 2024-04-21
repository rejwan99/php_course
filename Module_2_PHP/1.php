<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>uplode</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<table border="1" cellspacing="0">
	<tr>
		<th colspan="2"><h3>Biodata Form</h3></th>
	</tr>
	<tr>
		<th>Enter name:</th>
		<th><input type="text" id="name"></th>
	</tr>
	<tr>
		<th>Enter Address</th>
		<th><input type="text" id="address"></th>
	</tr>
	<tr>
		<th>Enter address1:</th>
		<th><textarea id="address1"></textarea></th>
	</tr>
	<tr>
		<th>Enter email:</th>
		<th><input type="email" id="email"></th>
	</tr>
	<tr>
		<th>Enter password:</th>
		<th><input type="password" id="pass"></th>
	</tr>
	<tr>
		<th>Enter DOB:</th>
		<th><input type="date" id="dob"></th>
	</tr>
	<tr>
		<th>Enter phone:</th>
		<th><input type="number" id="phone"></th>
	</tr>
	<tr>
		<th>select gender:</th>
		<th><input type="radio" name="gender" id="m1" value="male">Male
			<input type="radio" name="gender" id="fe1" value="female">Female
			<input type="radio" name="gender" id="ot1" value="other">Other
		</th>
	</tr>
	<tr>
		<th>Degree:</th>
		<th>
			<select id="s1">
				<option>select</option>
				<option>B.Sc</option>
				<option>M.Sc</option>
				<option>B.tech</option>
				<option>M.tech</option>
			</select>
		</th>
	</tr>
	<tr>
		<th>Select language:</th>
		<th><input type="checkbox" name="language" id="hi" value="hinde">Hindi
	        <input type="checkbox" name="language" id="ben" value="bengali">Bengali 
	        <input type="checkbox" name="language" id="eng" value="english">English
	    </th>
	</tr>
	<tr>
		<th colspan="2"><input type="submit" name="submit" id="sub" value="submit"></th>
	</tr>
</table>

<script type="text/javascript">
	$("document").ready(function(){
		$("#sub").click(function(){
			var nme= $("#name").val();
			var add= $("#address").val();
			var add2= $("#address2").val();
			var eml= $("#email").val();
			var pas=$("#pass").val();
			var dob=$("#dob").val();
			var pho= $("#phone").val();
			var gn1= $('input[type="radio"]:checked');
			var deg= $("#op").val();
			var lang= $("#hi,#ben,#eng").val();
			document.write("My name is: "+nme+"<br>");
			document.write("My address1: "+add+"<br>");
			document.write("My address2: "+add2+"<br>");
			document.write("My email id is: "+eml+"<br>");
			document.write("My password is: "+pas+"<br>");
			document.write("My DOB is: "+dob+"<br>");
			document.write("My Phone No. is: "+pho+"<br>");
			document.write("My gender is: "+gn1.val()+"<br>");
			document.write("My degree is: "+deg+"<br>")
			document.write("My languege is: "+lang+"<br>")
		});
	});
</script>
</body>
</html>