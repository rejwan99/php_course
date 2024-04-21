<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Choose Button</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<form method="post">
	Choose Sub: <select id="sub" name="sub1">
					<option>select</option>
					<option value="beng">Beng</option>
					<option value="eng">Eng</option>
					<option value="math">math</option>
					<option value="phy">Phy</option>
	            </select><br>
 <div id="d1">enter marks: <input type="text" name="marks"></div><br>
	<input type="submit" name="submit" value="submit">            
</form>
<script type="text/javascript">
	$("document").ready(function(){
		$("#sub").change(function(){
			$("#d1").show();
		});
	});
</script>
<?php 
if(isset($_REQUEST["submit"]))
{
	$a= $_REQUEST["sub1"];
	$b= $_REQUEST["marks"];
	if(isset($_COOKIE["subject"]))
	{
		echo "plese wait 15 sec...";
	}
	else
	{
	echo "you entered ".$b."%"." in ".$a;
	setcookie("subject",$a,time()+10);
	}
}
?>
<style type="text/css">
	#d1
	{
		display: none;
	}
</style>
</body>
</html>