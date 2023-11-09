<!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>foreach</title>

	
</head>
<body>

	<script>
		var a= [3,4,5,6,7];
		document.write(a+"<br>"+"<br>");

		a.forEach(function (value) {
			document.write(value+"<br>");
		})
	</script>
	
	<hr>
	<script>
		var b= [10,20,30,40,50];
		document.write(b+"<br>"+"<br>");

		b.forEach(function (value,index) {
			document.write(index+" : "+ value+"<br>");
		})
	</script>


	<hr>
	
	<script>
		var b= [11,22,33,44,55];
		document.write(b+"<br>"+"<br>");

		b.forEach(loop);
		function loop(value,index) {
			document.write(index+" : "+ value+"<br>");
		}
	</script>
</body>
</html>



