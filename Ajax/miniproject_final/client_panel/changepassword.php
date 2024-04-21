<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>change password</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
	old password: <input type="text" id="oldpass"><br> 
    new password: <input type="text" id="newpass"><br>
    confirm password: <input type="text" id="conpass"><br>
    <input type="submit" id="submit" value="change password">
<p id="p1"></p>
    <script type="text/javascript">
    	$("document").ready(function(){
    		$("#submit").click(function(){
    			var oldp= $("#oldpass").val();
    			var newp= $("#newpass").val();
    			var confp= $("#conpass").val();
    			$.ajax({
    				type: "post",
    				url: "changepassaction.php",
    				data: {oldp:oldp,newp:newp,confp:confp}
    			}).done(function(data){
    				$("#p1").html(data);
    			});
    		});
    	});
    </script>
</body>
</html>