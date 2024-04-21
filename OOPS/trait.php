<?php 
trait A
{
	function abc()
	{
		echo "This is abc";
	}
} 
trait B
{
	function mno()
	{
		echo "This is mno";
	}
}
class C 
{
	use A,B;
	function xyz()
	{
		echo "This is xyz";

	}
}
$obj= new C();
$obj->xyz();
echo "<br>";
$obj->abc();
echo "<br>";
$obj->mno();
?>