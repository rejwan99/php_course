<?php 
session_start();
include("connection.php");
$id=$_REQUEST["ep"];
$sql= "SELECT * FROM user_image WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
$result= mysqli_fetch_assoc($data);
$_SESSION['oldimagepath']=$result["picsource"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
Enter name: <input type="text" id="name" value="<?php echo $result['name']?>">
<input type="text" name="uid" id="uid" value="<?php echo $id;?>" hidden><br>
Enter email: <input type="email" id="email" value="<?php echo $result['email']?>"><br>
Enter Phone: <input type="number" id="number" value="<?php echo $result['phone']?>"><br>
Choose image: <input type="file" name="uploadimage">
<img src='<?php echo $img=$result["picsource"]?>' height="100" width="100"><br>
<input type="submit" id="submit" value="Submit">
<p id="p1"></p>

<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			var id= $("#uid").val();
			var nme= $("#name").val();
			var email= $("#email").val();
			var pass= $("#pass").val();
			var phn= $("#number").val();
			var img= $("input[name='uploadimage']")[0].files[0];
			formdata= new FormData();
		formdata.append("id",id);	
		formdata.append("name",nme);
		formdata.append("email",email);
		formdata.append("pass",pass);
		formdata.append("phn",phn);
		formdata.append("uploadimage",img);

			$.ajax({
				type: "post",
				url: "editaction.php",
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