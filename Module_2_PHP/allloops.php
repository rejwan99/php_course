<?php 
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
echo "<br>";

for ($x=0;$x<=100;$x+=10) 
{
  echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo $value."<br>";
}
?>