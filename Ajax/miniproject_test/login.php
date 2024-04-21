<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
enter email: <input type="text" id="email"><br>
enter password: <input type="password" id="pass"><br>
<input type="submit" id="submit" value="Submit">
<a href="forminsert.php">New Registration</a>
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
</body>
</html>