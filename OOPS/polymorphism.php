<?php 
class Shape
{
	//parent class
	function draw()
	{

	}
}
class Traingle extends Shape
{
	function draw()
	{
		echo "Traingle has been drawn<br>";
	}
}
class Ellipse extends Shape
{
	function draw()
	{
		echo "Ellipse has been drawn<br>";
	}
}
class Circle extends Shape
{
	function draw()
	{
		echo "Circle has been drawn<br>";
	}
}
$obj= array();
$obj[0]= new Traingle();
$obj[1]= new Ellipse();
$obj[2]= new Circle();
for($i=0;$i<3;$i++)
{
	$obj[$i]->draw();
}
?>