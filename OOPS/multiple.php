<?php 
class A
{
	function abc()
	{
		echo "This is abc";
	}
} 
class B
{
	function mno()
	{
		echo "This is mno";
	}
}
class C 
{
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