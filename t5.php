<?php
	$num = 5;
	if $num > 0  // 5>0
	{
    	echo "Positive";
	}

	// Parse error: syntax error, unexpected '$num' (T_VARIABLE), expecting '(' in C:\xampp\htdocs\code_practice\t5.php on line 3
?>

<hr>

<?php
	$num = 5;
	if ($num > 0)  // 5>0
	{
    	echo "Positive";
	}

	// Positive
?>