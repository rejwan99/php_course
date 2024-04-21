<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>
<body>
<form name="form" onsubmit="return fun()" method="post" action="formaction.php">
	Enter Name: <input type="text" name="name"><br> 
	Enter Email: <input type="email" name="email"><br>
	Enter Password: <input type="password" name="password"><br>
	Enter Phone: <input type="number" name="phone"><br>
	Choose Country: <select name="country1" id="country" onclick="return fun1(),fun2(),fun3()">
						<option>Select</option>
						<option value="India">India</option>
						<option value="USA">Usa</option>
						<option value="UK">UK</option>
					</select><br>
	<div id="india">Choose City: <select name="india">
					<option value="">Select</option>
					<option value="Delhi">Delhi</option>
					<option value="Mumbali">Mumbai</option>
					<option value="Kolkata">Kolkata</option>
	  			 </select></div>
	<div id="usa">Choose City: <select name="usa">
					<option value="">Select</option>
					<option value="New York">New York</option>
					<option value="Chicago">Chicago</option>
					<option value="Houston">Houston</option>
	  			 </select></div>
	<div id="uk">Choose City: <select name="uk">
					<option value="">Select</option>
					<option value="London">London</option>
					<option value="Manchester">Manchester</option>
					<option value="Liverpool">Liverpool</option>
	  			 </select></div><br> 
	<button name="submit" id="subb">Submit</button>  			  			 					
</form>
<script type="text/javascript">
	function fun()
	{
		var a=document.form.country.value;

		if(a=="Select")
		{
			alert("**plese select any country");
			return false;
		}

	}
	function fun1()
	{
		var b=document.getElementById("country");
		if(b.value=="India")
		{
    		document.getElementById("india").style.visibility="visible";
		}
		else
	    {
	    	document.getElementById("india").style.visibility="hidden";
	    }
	}
	function fun2()
	{
		var c=document.getElementById("country");
		if(c.value=="USA")
		{
    		document.getElementById("usa").style.visibility="visible";
		}
		else
	    {
	    	document.getElementById("usa").style.visibility="hidden";
	    }
	}
	function fun3()
	{
		var d=document.getElementById("country");
		if(d.value=="UK")
		{
    		document.getElementById("uk").style.visibility="visible";
		}
		else
	    {
	    	document.getElementById("uk").style.visibility="hidden";
	    }
	}
</script>

<style type="text/css">
	#india,#usa,#uk
	{
		visibility: hidden;
	}
</style>
</body>
</html>