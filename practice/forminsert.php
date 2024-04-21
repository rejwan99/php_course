<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
Enter Name: <input type="text" id="name"><br>
Enter Email: <input type="email" id="email"><span id="s1"></span><br>
Enter Password: <input type="password" id="pass"><br>
Enter Phone: <input type="number" id="phone"><br>
<button id="submit">Submit</button>
<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			var email= $("#email").val();
			var phn= $("#phone").val();
			if(email.search(/[[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$]/)==-1)
			{
				$("#s1").html("Plese match the pattern");
				
			}
			else
			{
				$("#s1").html("email correct");
			}
		});
	});
</script>
</body>
</html>