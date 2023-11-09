<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ondbclick</title>
</head>
<body style="text-align: center;">

	<p ondblclick="hello()" style="margin-top: 20px;">Double Click Here to change</p>

	<p id="test" style="color: green;"> </p>

	<script type="text/javascript">
		function hello() {
			// document.write("Hello World !");
			document.getElementById('test').innerHTML = "Hello World !";
			// document.getElementById('test').innerText = "Hello World !";
		}
		
	</script>
</body>
</html>



