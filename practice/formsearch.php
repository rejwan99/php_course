<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
enter name: <input type="text" id="name"><br>
enter email: <input type="email" id="email"><span id="s2"></span><br>
enter password: <input type="password" id="password"><br>
enter phone: <input type="number" id="phone"><span id="s1"></span><br>
<input type="submit" id="submit" value="Submit">
<p id="p1"></p>

<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			var name= $("#name").val();
			var email=$("#email").val();
			var password= $("#password").val();
			var phone= $("#phone").val();
			if(email!="")
			{
				if(email.search(/[[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$]/)==-1)
				{
					$("#s2").html("plese match the pattern");
				}
				else
				{
					$("#s2").html("plese enter email");
				}
			}
			if(email=="")
			{
				$("#s2").html("plese enter email");
			}
			if(phone.length<10)
			{
			 $("#s1").html("pls enter 10 digit number");
			}
			 
			if(phone=="")
			{
					$("#s1").html("plese enter number")
			}
			else
			{
				$.ajax({
				type: "post",
				url: "formsearchaction.php",
				data: {name:name,email:email,password:password,phone:phone}
			}).done(function(data){
				$("#p1").html(data);
			});
			}
			
		});
	});
</script>
</body>
</html>