<?php
	for ($i; $i < 5; $i++) {
    	echo $i;
	}

	// empty output
?>

<hr>
<?php
	$quote = "This is a quote from shakespeare.";
	echo "Shakespeare said, "$quote"";

	// Parse error: syntax error, unexpected '$quote' (T_VARIABLE), expecting ';' or ',' in C:\xampp\htdocs\code_practice\t6.php on line 27
?>