<?php  
/*$inp_arr =['x'=>'A', 'y'=>'B' , 'z'=>'C'];
$outputArray = [
                    [0=>'x', 1=>'A'],
                    [0=>'y', 1=>'B'],
                    [0=>'z', 1=>'C']
               ];*/

$inp_arr =['x'=>'A', 'y'=>'B' , 'z'=>'C'];
$temp_arr = [];
foreach ($inp_arr as $key => $value)  
{
	$temp_arr[] = $key;
    $temp_arr[] = $value;
}

echo "<pre>"; print_r($temp_arr); echo "<br>";
/*Array
(
    [0] => x
    [1] => A
    [2] => y
    [3] => B
    [4] => z
    [5] => C
)*/
?> 