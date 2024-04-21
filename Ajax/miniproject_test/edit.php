<?php 
include("connection.php");
$id=$_REQUEST["ep"];
$sql= "SELECT * FROM user1 WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
$result= mysqli_fetch_assoc($data);
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
<input type="submit" id="submit" value="Submit">
<p id="p1"></p>

<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			var id= $("#uid").val();
			var nme= $("#name").val();
			var email= $("#email").val();
			var phn= $("#number").val();

			$.ajax({
				type: "post",
				url: "editaction.php",
				data: {id:id,name:nme,email:email,number:phn}
			}).done(function(data){
				$("#p1").html(data);
			});
		});
	});
</script>
</body>
</html>