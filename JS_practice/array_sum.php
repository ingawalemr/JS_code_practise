<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>array</title>
</head>
<body>

	
	<script type="text/javascript">
	var a = [10, 12, 13];
	// document.write(a.length);
	var sum = 0;
	 
	for(var b = 0; b< a.length; b++){
		document.write("<li>"+a[b]+"</li>");
		sum = sum + a[b];
	}
	 
	document.write("Total Sum : " +sum);
	</script>
</body>
</html>



