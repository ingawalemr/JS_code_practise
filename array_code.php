<?php  
$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3; //array(3);
$referenceTable['val3'] = array(4, 5);

$testArray = array();

$testArray = array_merge($testArray, $referenceTable['val1']); 
var_dump($testArray);			echo "<br>"; 	//  [0]=> int(1) [1]=> int(2) 

$testArray = array_merge($testArray, $referenceTable['val2']);
var_dump($testArray); echo "<br>";  // NULL

$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray);  echo "<br>";  // NULL
?> 