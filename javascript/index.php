<!doctype html>

<html>
<head>
	
	<meta charset="utf-8">
	
	<title>  </title>
	
	<style>

	#bild{
		width: 100px;
		height: 100px;
		display: block;
	}
	
	</style>
	
	<script>
	
	function myFunction(){
		alert("Hello, World!");
	}
	
	function big(bild){
		bild.style.width = "200px";
		bild.style.height = "200px";
	}
	
	function small(bild){
		bild.style.width = "";
		bild.style.height = "";
	}
	
	function viewHide(){
		var edit = document.getElementById("bild");
		if(edit.style.display === "none"){
			edit.style.display = "block";
		}
		else{
			edit.style.display = "none";
		}
	}
	
	</script>

</head>

<body>

	<button onClick="myFunction()"> Alert </button>

	<img src="bild.jpg" id="bild" onmouseenter="big(this)" onmouseleave="small(this)">
	
	<button onClick="viewHide()"> Dölj/Visa </button>


</body>
</html>