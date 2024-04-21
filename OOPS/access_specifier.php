<?php 
class Student
{
	public $a=10;
	private $b=20;
	protected $c=30;
	function abc()
	{
		echo $this->a;
		echo $this->b;
		echo $this->c;
	}
}
class Student1 extends Student
{
	function mno()
	{
		echo $this->a;
		echo $this->b;
	}
}
class Student2 extends Student1
{
	function xyz()
	{
		echo $this->a;
		echo $this->b;
		echo $this->c;
	}
}
$obj= new Student2();
$obj-> abc();
echo "<br>";
$obj->mno();
echo "<br>";
$obj->xyz(); 
echo "<br>";
echo $obj->a;
echo "<br>";
echo $obj->b;
echo "<br>";
echo $obj->c;
?>