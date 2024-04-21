<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
Enter Email: <input type="email" id="email"><br>
Enter Password: <input type="text" id="password"><br>
<input type="submit" id="submit" value="submit">
<a href="clientregform.php">New Registration</a>
<p id="p1"></p>

<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			var email= $("#email").val();
			var pass= $("#password").val();
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