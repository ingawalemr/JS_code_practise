<?php 
$k=1;
for ($i=1; $i <=4 ; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo "*"." ";;
	}
	echo "<br>";
}
?>
<hr>

<?php 
$k=1;
for ($i=1; $i <=4 ; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo $k." ";;
	}
	echo "<br>";
}
?>

<hr>

<?php 
$k=1;
for ($i=1; $i <=4 ; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo $k." ";;
	}
	$k++;
	echo "<br>";
}
?>

<hr>

<?php 
$k=1;
for ($i=1; $i <=4 ; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo $k." ";
		$k++;
	}
	echo "<br>";
}
?>