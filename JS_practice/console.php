<!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basic file load</title>

	
</head>
<body>

	<script>
		let a= 3;
		let b= 2;
		sum =  a+b;
		document.write("sum of a and b is :" + sum);	// sum of a and b is :5

		console.time('checkTime')

		console.log("sum of a and b is :" + sum );      // sum of a and b is :5
		console.log(sum + 10 ); // 15

		console.timeEnd('checkTime')  // checkTime: 1 ms
	</script>

</body>
</html>



