<?php 
session_start();
include("connection.php");
$id= $_REQUEST["ep"];
$sql= "SELECT * FROM `clientpanel_ajax` WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
$result= mysqli_fetch_assoc($data);
$_SESSION['oldimagepath']=$result["picsource"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
Enter name: <input type="text" id="name" value="<?php echo $result['name']?>">
<input type="text" id="uid" value="<?php echo $result['user_id']?>" hidden><br>
Enter Address1: <input type="text" id="add1" value="<?php echo $result['address1']?>"><br>
Enter Address2: <input type="text" id="add2" value="<?php echo $result['address2']?>"><br>
Enter DOB: <input type="date" id="dob" value="<?php echo $result['dob']?>"><br>
Enter email: <input type="email" id="email" value="<?php echo $result['email']?>"><br>
Enter Phone: <input type="number" id="number" value="<?php echo $result['phone']?>"><br>

Enter Gender: <input type="radio" name="gender" value="male" 
              <?php if($result["gender"]=="male"){echo "checked";}?>>Male
			  <input type="radio" name="gender" value="female" <?php if($result["gender"]=="female"){echo "checked";}?>>Female
			  <input type="radio" name="gender" value="other" <?php if($result["gender"]=="other"){echo "checked";}?>>Other<br>

Enter Degree: <select name="degree" id="degree" value="<?php echo $result['degree']?>">
		    	<option>Select</option>
				<option value="B.Tech" <?php if($result["degree"]=="B.tech"){echo "selected";}?>>B.tech</option>
				<option value="BCA" <?php if($result["degree"]=="BCA"){echo "selected";}?>>BCA</option>
				<option value="M.Tech" <?php if($result["degree"]=="M.Tech"){echo "selected";}?>>M.Tech</option>
				<option value="B.Sc" <?php if($result["degree"]=="B.Sc"){echo "selected";}?>>B.Sc</option>
			</select><br>
<?php 
$langarray= explode(",",$result["language"])
?>

Enter Language: 
			<input type="checkbox" name="language[]" value="Hindi" <?php if(in_array("Hindi", $langarray)){echo "checked";}?>>Hindi
	        <input type="checkbox" name="language[]" value="Bengali" <?php if(in_array("Bengali", $langarray)){echo "checked";}?>>Bengali 
	        <input type="checkbox" name="language[]" value="English" <?php if(in_array("English", $langarray)){echo "checked";}?>>English<br>

Choose Image: <input type="file" name="uploadimage">
<img src='<?php echo $img=$result["picsource"]?>' height="100" width="100"><br>  

<input type="submit" id="submit" value="Submit">
<p id="p1"></p>
<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			var id= $("#uid").val();
			var nme= $("#name").val();
			var add1= $("#add1").val();
			var add2= $("#add2").val();
			var dob= $("#dob").val();
			var email= $("#email").val();
			var phn= $("#number").val();
			var gen= $("input[name='gender']:checked").val();
			var deg= $("#degree").val();
			var lang= [];

			$.each($("input[name='language[]']:checked"),function(){
				lang.push($(this).val());
			});
			var languages= lang.join(",");
			var img= $("input[name='uploadimage']")[0].files[0];
			formdata= new FormData();
			formdata.append("id",id);
			formdata.append("name",nme);
			formdata.append("add1",add1);
			formdata.append("add2",add2);
			formdata.append("dob",dob);
			formdata.append("email",email);
			formdata.append("number",phn);
			formdata.append("gen",gen);
			formdata.append("deg",deg);
			formdata.append("lang",languages);
			formdata.append("uploadimage",img);
			$.ajax({
				type: "post",
				url: "editaction.php",
				data: formdata,
				contentType: false,
				processData: false
			}).done(function(data){
				$("#p1").html(data);
			});
		});
	});
</script>
</body>
</html>