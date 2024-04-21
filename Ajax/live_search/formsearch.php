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
<!-- <input type="submit" id="submit" value="Submit"> -->
<p id="p1"></p>
<script type="text/javascript">
	$("document").ready(function(){
		$("#name").keyup(function(){
			var nme= $("#name").val();
			$.ajax({
				type: "post",
				url: "formsearchaction.php",
				data: {name:nme}
			}).done(function(data){
				$("#p1").html(data);
			});
		});
	});
</script>
</body>
</html>