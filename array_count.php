<?php  
$num_arr =[3,5,5,8,7,6,3,1,2,8,9];
$outputArray = [];

foreach ($num_arr as $value) 
{
	if ($outputArray[$value]) {
		$outputArray[$value]++;
	} else
	{
		$outputArray[$value]=1;
	}
}

echo "<pre>";// print_r(array_count_values($num_arr ));
print_r($outputArray);
/*Array
(
    [3] => 2
    [5] => 2
    [8] => 2
    [7] => 1
    [6] => 1
    [1] => 1
    [2] => 1
    [9] => 1
)
 */

asort($outputArray) ;
print_r($outputArray);

/*Array
(
    [7] => 1
    [6] => 1
    [1] => 1
    [2] => 1
    [9] => 1
    [3] => 2
    [5] => 2
    [8] => 2
)*/

ksort($outputArray);
print_r($outputArray);
/*Array
(
    [1] => 1
    [2] => 1
    [3] => 2
    [5] => 2
    [6] => 1
    [7] => 1
    [8] => 2
    [9] => 1
)
 */

?> 