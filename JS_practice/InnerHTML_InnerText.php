<!DOCTYPE html>
<html>
<head>
	<title>
		Difference between
		InnerHTML and InnerText
	</title>
</head>

<body style="text-align:center;">

	<h1 style="color:green">GeeksforGeeks</h1>

	<div id="test"> The following element contains some code</div>
	<p></p>

	<button onClick="innerHTMLFn()"> innerHTML</button>
	<button onClick="innerTextFn()"> innerText</button>
	
	<p id="op"></p>

	<script>
		function innerTextFn() {
			let x = document.getElementById('test');
			alert(x.innerText);
		}

		function innerHTMLFn() {
			let x = document.getElementById('test');
			alert(x.innerHTML);
		}
	</script>
</body>
</html>
