<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>image</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	enter image: <input type="file" name="uploadimage"><br>
	<input type="submit" name="submit" value="submit">
</form>
<?php
 $filename= $_FILES["uploadimage"]["name"];
 $tempname= $_FILES["uploadimage"]["tmp_name"];
 $folder="image/".$filename;
 move_uploaded_file($tempname, $folder);
 echo "<img src='$folder'>";
?>
</body>
</html>