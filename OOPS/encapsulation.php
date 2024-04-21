<?php 
class Student
{
	public $mname,$mwage,$msage;
	function __construct($name,$wage)
	{
		$this->mname=$name;
		$this->mwage=$wage;
	}
	function setage($sage)
	{
		$this->msage=$sage;
	}
	function display()
	{
		echo "My name is: ".$this->mname."<br>";
		return ($this->mwage-$this->msage);
	}
}
$obj= new Student("Rejwan",28);
$obj->setage(4);
echo "My age is: ".$obj->display();
?>