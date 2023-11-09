<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>for loop</title>
</head>
<body>

	
	<script type="text/javascript">
		for (var i = 1; i <=5; i++) {
			if (i==3) {
				document.write(i+"<br>");		
			}
			document.write(i+"<br>");
		}
	</script>

	<hr>

	<script type="text/javascript">
		for (var i = 1; i <=5; i++) {
			if (i==3) {
				document.write(i+"<br>");	
				continue;	//
			}
			document.write(i+"<br>");
		}
	</script>

	<hr>

	<script type="text/javascript">
		for (var i = 1; i <=5; i++) {
			if (i==3) {
				document.write(i+"<br>");	
				break;	//
			}
			document.write(i+"<br>");
		}
	</script>
</body>
</html>



