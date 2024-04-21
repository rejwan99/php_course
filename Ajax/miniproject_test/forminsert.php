<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>abc</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
Enter name: <input type="text" id="name"><br>
Enter email: <input type="email" id="email"><br>
Enter Password: <input type="password" id="pass"><br>
Enter Phone: <input type="number" id="number"><br>
<input type="submit" id="submit" value="Submit">
<p id="p1"></p>
<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			var nme= $("#name").val();
			var email= $("#email").val();
			var pass= $("#pass").val();
			var phn= $("#number").val();

			$.ajax({
				type: "post",
				url: "forminsertaction.php",
				data: {name:nme,email:email,pass:pass,number:phn}
			}).done(function(data){
				$("#p1").html(data);
			});
		});
	});
</script>
</body>
</html>