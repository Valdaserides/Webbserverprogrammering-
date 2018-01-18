<!doctype html>

<html>
<head>
	
	<meta charset="utf-8">
	
	<title>  </title>
	
	<style>

	body{
		background-color: white;
	}
	
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
	
	function changeColor(){
		document.body.style.backgroundColor = "cyan";
	}
	
	function reset(){
		document.getElementById("main").innerHTML = "Hello, World!";
	}
	
	</script>

</head>

<body>

	<div id="main">

		<button onClick="myFunction()"> Alert </button>

		<img src="bild.jpg" id="bild" onmouseenter="big(this)" onmouseleave="small(this)">
		
		<button onClick="viewHide()"> Dölj/Visa </button>
		
		<button onClick="changeColor()"> Byt Färg </button>
		
		<button onClick="reset()"> Ta bort allt </button>

	</div>
		
</body>
</html>












