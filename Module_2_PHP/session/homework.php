<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>choose subject</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<form method="post">
	Choose Sub: <select id="sub" name="sub1">
					<option>select</option>
					<option value="beng">Beng</option>
					<option value="eng">Eng</option>
					<option value="math">Math</option>
					<option value="phy">Phy</option>
				</select><br>
<div id="d1">Enter marks: <input type="text" name="mark"></div><br>
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
   $sub= $_REQUEST["sub1"];
   $marks= $_REQUEST["mark"];

   if(isset($_COOKIE["rate1"])) 
   {
   	 echo "plese wait 15 sec....";
   }
   else
   {
   	echo "you entered"." ".$marks."%"." "."in"." ".$sub.".";
   	setcookie("rate1",$sub,time()+15);
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