<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>abc</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
country: <select id="s1">
	       <option>select</option>
	       <option value="United State">United States</option>
	       <option value="india">India</option>
	       <option value="United kingdom">United kingdom</option>
	     </select> <br>
<p id="p1"></p> 
<script type="text/javascript">
	$("document").ready(function(){
		$("#s1").change(function(){
			var country= $("#s1").val();
			//document.write(country);
			$.ajax({
				type: "post",
				url: "city.php",
				data: {countr:country}
			}).done(function(data){
				$("#p1").html(data);
			});
		});
	});
</script>
</body>
</html>