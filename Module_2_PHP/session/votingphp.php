<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>vote</title>
</head>
<body>
<form method="post">
<input type="submit" name="submit" value="PHP">VS
<input type="submit" name="submit" value="ASP">
</form>
<?php 
if(isset($_REQUEST["submit"]))
{
	$rate= $_REQUEST["submit"];
	if(isset($_COOKIE["rate1"]))
	{
		echo "you are already votted in ".$_COOKIE["rate1"];
	}
	else
	{
		echo "Thanks for votting";
		setcookie("rate1",$rate,time()+5);
	}
}
?>
</body>
</html>