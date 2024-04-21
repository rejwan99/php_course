<?php 
abstract class Student
{
 abstract function abc();
 function mno()
 {
 	echo "Hi";
 }
}
class Student1 extends Student
{
 function abc()
 {
 	echo "This is abc function";
 }
}
$obj= new Student1();
$obj->abc();
echo "<br>";
$obj->mno();
?>