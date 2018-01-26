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
	
	#5050{
		background-color: red;
		width: 50px;
		height: 50px;
	}
	
	#main{
		
		margin-left: 40%;
		
	}
	
	#movingDiv{
		position: absolute;
		background-color: red;
		width: 100px;
		height: 100px;
		border: solid;
	}
	
	#divMovingDiv{
		
		position: absolute;
		height: 400px;
		width: 400px;
		border: solid;
		
	}
	
	#movingdivBtn{
		
		position: fixed;
		
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
		document.body.innerHTML = "Hello, World!";
	}
	
	function changeColorDiv(div){
		if(div.style.backgroundColor == "red"){
			div.style.backgroundColor = "green";
		}
		else if(div.style.backgroundColor == "green"){
			div.style.backgroundColor = "blue";
		}
		else if(div.style.backgroundColor == "blue"){
			div.style.backgroundColor = "red";
		}
	}
	
	var numberr = 0;
	
	
	function upBy1(){
		
		numberr = numberr + 1;
		document.getElementById("numberDisplay").innerHTML = numberr;
		
	}
	
	function upBy10(){
		
		numberr = numberr + 10;
		document.getElementById("numberDisplay").innerHTML = numberr;
		
	}
	
	function upBy100(){
		
		numberr = numberr + 100;
		document.getElementById("numberDisplay").innerHTML = numberr;
		
	}
	
	function numberReset(){
		
		numberr = 0;
		document.getElementById("numberDisplay").innerHTML = numberr;
		
	}
	
	function leftUp(){
		
		document.getElementById("movingDiv").style.left = "0px";
		document.getElementById("movingDiv").style.top = "0px";
		document.getElementById("movingDiv").style.right = "";
		document.getElementById("movingDiv").style.bottom = "";
		
		
	}
	
	function leftDown(){
		
		document.getElementById("movingDiv").style.left = "0px";
		document.getElementById("movingDiv").style.top = "";
		document.getElementById("movingDiv").style.right = "";
		document.getElementById("movingDiv").style.bottom = "0px";
		
	}
	
	function rightDown(){
		
		document.getElementById("movingDiv").style.left = "";
		document.getElementById("movingDiv").style.top = "";
		document.getElementById("movingDiv").style.right = "0px";
		document.getElementById("movingDiv").style.bottom = "0px";
		
	}
	
	function rightUp(){
		
		document.getElementById("movingDiv").style.left = "";
		document.getElementById("movingDiv").style.top = "0px";
		document.getElementById("movingDiv").style.right = "0px";
		document.getElementById("movingDiv").style.bottom = "";
		
	}
	
	</script>

</head>

<body>

	<div id="main">

		<div id="5050" style="height:50px;width:50px;background-color:red;border:solid;" onmousedown="changeColorDiv(this)"></div> <!--CSS fungerade inte så skrev det direkt i elementet ist.-->
	
		<button onClick="myFunction()"> Alert </button><br>

		<img src="bild.jpg" id="bild" onmouseenter="big(this)" onmouseleave="small(this)">
		
		<button onClick="viewHide()"> Dölj/Visa </button><br>
		
		<button onClick="changeColor()"> Byt Färg </button><br>
		
		<button onClick="reset()"> Ta bort allt </button><br>
		
		<div id="number"> <p id="numberDisplay"> 0 </p> </div>
		<button onClick="upBy1()"> Öka med 1 </button>
		<button onClick="upBy10()"> Öka med 10 </button>
		<button onClick="upBy100()"> Öka med 100 </button>
		<button onClick="numberReset()"> Reset </button><br><br>

		<div id="movingdivBtn">
		
			<button onClick="leftUp()"> Vänster Uppe Hörn </button>
			<button onClick="leftDown()"> Vänster Nedre Hörn </button>
			<button onClick="rightDown()"> Höger Nedre Hörn </button>
			<button onClick="rightUp()"> Höger Uppe Hörn </button>
			
		</div>

	</div>
	
	<div id="divMovingDiv"> <div id="movingDiv"> <b> Moving Div <b> </div> </div>
		
</body>
</html>












