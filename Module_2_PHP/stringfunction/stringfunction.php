<?php 
$str= "hello today is monday";
$str1= "Hello it is very cold day";
echo ucfirst($str); 
echo "<br>";  // upper case First
echo lcfirst($str1);
echo "<br>";  // first alphabate lowercase.
echo ucwords($str);
echo "<br>"; //every Word in a sentence first alphabate change into capital.
echo strrev($str);
echo "<br>";
echo str_word_count($str);
echo "<br>";
echo str_replace("today", "it", $str);
echo "<br>";
echo strstr($str, "l");
echo "<br>";
echo stristr($str, "E");
echo "<br>";
echo strlen($str);
echo "<br>";
echo strpos($str,"h");
echo "<br>";
echo stripos($str,"today");
echo "<br>";
echo strrpos($str, "h");
echo "<br>";
echo strripos($str, "today");
echo "<br>";
echo md5("rejwan");
echo "<br>";
echo md5("Rejwan");
echo "<br>";
?>