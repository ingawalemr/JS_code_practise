<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>oncontextmenu</title>
</head>
<body style="text-align: center;">

	<button oncontextmenu="hello()" style="margin-top: 20px;">Right Click Here</button>
	<p id="test"> </p>
	
	<script type="text/javascript">
		function hello() {
			alert("Hello World !");
			// document.getElementById('test').innerHTML = "Hello World !";
		}
		
	</script>
</body>
</html>



