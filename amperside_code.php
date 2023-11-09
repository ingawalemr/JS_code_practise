<?php 

$a = '1';
$b = &$a; // 1
$b = "2$b"; // 21

echo "
What will be the values of 'a' and 'b' after the code below is executed"."<br>";

echo "a is ". $a ; 	echo "<br>";; 	// a is 21
echo "b is ". $b ; 					// b is 21
?>