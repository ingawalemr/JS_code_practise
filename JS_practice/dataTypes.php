<!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basic file load</title>

	
</head>
<body>

	<script>
		// string - Hello World !
		var a= "Hello World !"
		document.write(typeof a +" - "+ a + "<br>");

		// number - 120
		var b= 120;
		document.write(typeof b +" - "+ b + "<br>");
		
		// boolean - true
		var c= true; // true
		// var c= false; // false
		document.write(typeof c +" - "+ c + "<br>");

		// undefined - undefined
		var d ;
		document.write(typeof d +" - "+ d + "<br>");

		// object - [object Object]
		var e= {name:'Mahadev', age:34};
		document.write(typeof e +" - "+ e + "<br>");

		// array - 120,10,40,25,abc
		var f= [120, 10, 40, 25,'abc'];
		document.write(typeof f +" - "+ f + "<br>");

		// object - null
		var g= null ;
		document.write(typeof g +" - "+ g + "<br>");
	</script>

</body>
</html>