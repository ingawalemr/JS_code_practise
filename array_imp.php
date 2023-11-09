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
	$temp_arr_k[] = $key;
    $temp_arr_v[] = $value;
}

echo "<pre>"; print_r($temp_arr_k); echo "<br>";
/*Array
(
    [0] => x
    [1] => y
    [2] => z
)*/


echo "<pre>"; print_r($temp_arr_v);
/*
Array
(
    [0] => A
    [1] => B
    [2] => C
)*/

?> 