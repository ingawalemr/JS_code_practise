<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>nested_loop</title>
</head>
<body>

	
	<script type="text/javascript">
		for (var i = 1; i <=100; i+=10) {
			for (var j = i; j < i+10; j++) {
				document.write(j + " ");
			}
			document.write( "<br>");
		}
	</script>


	<hr>

	<script type="text/javascript">
		for (var i = 1; i <=5; i++) {
			for (var j = 1; j <= i; j++) {
				document.write(j + " ");
			}
			document.write( "<br>");
		}
	</script>

</body>
</html>



