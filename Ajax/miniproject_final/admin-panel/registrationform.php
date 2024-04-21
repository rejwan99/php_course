<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>abc</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
	<table border="2" cellspacing="0">
<tr id="r1">
	<td colspan="2"><h3>Registration Form</h3></td>
</tr>		
<tr>
	<td>Enter name: </td> 
    <td><input type="text" id="name"></td>
</tr>
<tr>    
    <td>Enter Address1: </td> 
    <td><input type="text" id="add1"></td>
</tr>  
<tr>  
    <td>Enter Address2: </td>
    <td><input type="text" id="add2"></td>
</tr>
<tr>
    <td>Enter DOB: </td>
    <td><input type="date" id="dob"></td>
</tr>
<tr>  
	<td>Enter email: </td>
	<td><input type="email" id="email"></td>
</tr>  
<tr>	
    <td>Enter Password: </td>
    <td><input type="password" id="pass"></td>
</tr>
<tr>    
    <td>Enter Phone: </td>
    <td><input type="number" id="number"></td>
</tr>
<tr>    
    <td>Enter Gender: </td>
    <td>
    	<input type="radio" name="gender" value="male">Male
	    <input type="radio" name="gender" value="female">Female
	    <input type="radio" name="gender" value="other">Other
	</td>    
</tr>	
<tr>		  
    <td>Enter Degree: </td>
    <td><select name="degree" id="degree">
		    	<option>Select</option>
				<option value="B.Tech">Btech</option>
				<option value="BCA">Bca</option>
				<option value="M.Tech">Mtech</option>
				<option value="B.Sc">B.Sc</option>
		</select>
	</td>	
</tr>
<tr>					  
    <td>Enter Language: </td>
    <td>
    	<input type="checkbox" name="language[]" value="Hindi">Hindi
	    <input type="checkbox" name="language[]" value="Bengali">Bengali 
	    <input type="checkbox" name="language[]" value="English">English
	</td>    
</tr>
<tr>
	<td>Choose Image</td>
	<td><input type="file" name="uploadimage"></td>
</tr>	
<tr id="r12">	    			  
    <td colspan="2">
    	<input type="submit" id="submit" value="Submit">
    	<input type="reset" name="reset">
    </td>
</tr>    
</table>
<p id="p1"></p>
<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			var nme= $("#name").val();
			var add1= $("#add1").val();
			var add2= $("#add2").val();
			var dob= $("#dob").val();
			var email= $("#email").val();
			var pass= $("#pass").val();
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
			formdata.append("name",nme);
			formdata.append("add1",add1);
			formdata.append("add2",add2);
			formdata.append("dob",dob);
			formdata.append("email",email);
			formdata.append("pass",pass);
			formdata.append("number",phn);
			formdata.append("gen",gen);
			formdata.append("deg",deg);
			formdata.append("lang",languages);
			formdata.append("uploadimage",img);
			$.ajax({
				type: "post",
				url: "registrationformaction.php",
				data: formdata,
				contentType: false,
				processData: false
			}).done(function(data){
				$("#p1").html(data);
			});
		});
	});
</script>

<style type="text/css">
	table{
		background-color: darkred;
		color: white;
	}
	h3{
		text-align: center;
	}
	#r1{
		background-color: lightgray;
		color: darkred;
	}
	#r12{
		text-align: center;
	}
</style>
</body>
</html>