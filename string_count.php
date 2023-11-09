<?php  
$text = 'The following SQL statement selects all customers with a CustomerName that does NOT start with a';
// print_r($text); 
// echo strlen($text);
$text_length = strlen($text);
$output_arr=[];
for ($i=0; $i < $text_length; $i++) { 
	// echo $i;echo "<br>";	echo $text[$i];echo "<br>";
	// echo substr($text, $i, 1);echo "<br>";
	$characters = substr($text, $i, 1);

	if ($output_arr[$characters]) {
		$output_arr[$characters]++;
	} else{
		$output_arr[$characters] = 1;
	}
}
echo "<pre>"; print_r($output_arr)
/*Array
(
    [T] => 2
    [h] => 4
    [e] => 9
    [ ] => 15
    [f] => 1
    [o] => 5
    [l] => 5
    [w] => 3
    [i] => 3
    [n] => 2
    [g] => 1
    [S] => 1
    [Q] => 1
    [L] => 1
    [s] => 8
    [t] => 12
    [a] => 7
    [m] => 4
    [c] => 2
    [u] => 2
    [r] => 3
    [C] => 1
    [N] => 2
    [d] => 1
    [O] => 1
)*/
?>
