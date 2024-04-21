<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
<table border="1" cellspacing="0">	
<tr id="r1">
	<td colspan="2"><h3>Login</h3></td>
</tr>	
<tr>
	<td>enter email: </td>
	<td><input type="text" id="email"></td>
</tr>
<tr>
	<td>enter password: </td>
	<td><input type="password" id="pass"></td>
</tr>
<tr id="r3">
	<td colspan="2">
		<input type="submit" id="submit" value="Submit">
		<a href="registrationform.php">New Registration</a>
	</td>
</tr>		
</table>
<p id="p1"></p>
<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			var email= $("#email").val();
			var pass= $("#pass").val();
			$.ajax({
				type: "post",
				url: "loginaction.php",
				data: {email:email,pass:pass}
			}).done(function(data){
				$("#p1").html(data);
			});
		});
	});
</script>

<style type="text/css">
	h3
	{
		text-align: center;
		color: darkred;
	}
	#r1{
		background-color: lightgray;
	}
	#r3{
		text-align: center;
		background-color: lightgray;
	}
</style>
</body>
</html>