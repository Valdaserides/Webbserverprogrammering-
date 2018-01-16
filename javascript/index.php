<!doctype html>

<html>
<head>
	
	<meta charset="utf-8">
	
	<title>  </title>
	
	<style>

	#bild{
		width: 100px;
		height: 100px;
	}
	
	</style>
	
	<script>
	
	function big(bild){
		bild.style.width = "200px";
		bild.style.height = "200px";
	}
	
	function small(bild){
		bild.style.width = "";
		bild.style.height = "";
	}
	
	</script>

</head>

<body>

	<img src="bild.jpg" id="bild" onmouseenter="big(this)" onmouseleave="small(this)">


</body>
</html>