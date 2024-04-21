<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form image</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
Enter name: <input type="text" id="name"><br>
Enter Image: <input type="file" name="uploadimage"><br>
<input type="submit" id="submit" value="submit">
<p id="p1"></p>
<script type="text/javascript">
$("document").ready(function(){
	$("#submit").click(function(){
		var nme= $("#name").val();
		var img= $("input[name='uploadimage']")[0].files[0];
		formdata= new FormData();
		formdata.append("name",nme);
		formdata.append("uploadimage",img);
		$.ajax({
			type: "post",
			url: "formimageaction.php",
			data: formdata,
			contentType: false,// enctype
			processData: false //not send in obj.
		}).done(function(data){
			$("#p1").html(data);
		});
	});
});
</script>
</body>
</html>