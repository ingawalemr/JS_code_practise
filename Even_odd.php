<?php
echo "How can you tell if a number is even or odd without using any condition or loop";
echo "<br>";


$nos=13;
$arr=array("0"=>"Even","1"=>"Odd");
echo "Your number is: ".$arr[$nos%2];
?>