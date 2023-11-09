<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>onclick</title>
</head>
<body>

	<button onclick="hello()" style="margin-top: 20px;">Click Here</button>

	<p id="test" style="color: red;"> </p>
	
	<script type="text/javascript">
		function hello() {
			// document.write("Hello World !");
			document.getElementById('test').innerHTML= 'Clicked  to change content';
		}
		
	</script>
</body>
</html>



