<?php 
$k=1;
for ($i=1; $i <=4 ; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		if ($j%2==0) {
			echo 0;
		}
		else{
			echo $k." ";
		}
	}
	echo "<br>";
}
?>
<hr>
