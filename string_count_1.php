<?php  
$text = 'The following SQL statement selects all customers with a CustomerName that does NOT start with a';
// print_r($text); 
// echo strlen($text);
$text_length = strlen($text);
$output_arr=[];

$owel_arr=['a','e','i','o','u',];

for ($i=0; $i < $text_length; $i++) { 
	// echo $i;echo "<br>";	echo $text[$i];echo "<br>";
	// echo substr($text, $i, 1);echo "<br>";
	$characters = substr($text, $i, 1);

	if (in_array($characters, $owel_arr)) {
		if ($output_arr[$characters]) {
			$output_arr[$characters]++;
		} else{
			$output_arr[$characters] = 1;
		}
	}
}
echo "<pre>"; print_r($output_arr)
/*Array
(
    [e] => 9
    [o] => 5
    [i] => 3
    [a] => 7
    [u] => 2
)*/
?>
