<?php  
/*$inp_arr =['x'=>'A', 'y'=>'B' , 'z'=>'C'];
$outputArray = [
                    [0=>'x', 1=>'A'],
                    [0=>'y', 1=>'B'],
                    [0=>'z', 1=>'C']
               ];*/

$inp_arr =['x'=>'A', 'y'=>'B' , 'z'=>'C'];
$outputArray = [];
foreach ($inp_arr as $key => $value)  
{
    $temp_arr = [];

	$temp_arr[] = $key;
    $temp_arr[] = $value;

    $outputArray[] = $temp_arr;
}

echo "<pre>"; print_r($outputArray); echo "<br>";
/*Array
(
    [0] => Array
        (
            [0] => x
            [1] => A
        )

    [1] => Array
        (
            [0] => y
            [1] => B
        )

    [2] => Array
        (
            [0] => z
            [1] => C
        )

)*/

?> 