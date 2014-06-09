<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter for ofxWebSimpleGuiToo</title>
	<style>
		h1 {font-family: 'Arial', serif; font-size:32px; color:rgb(10,10,10); text-decoration: none;}
		h2 {font-family: 'Arial', serif; font-size:28px; color:rgb(100,100,100); text-decoration: none;}
		h4 {font-family: 'Arial', serif; font-size:22px; color:rgb(10,10,10); text-decoration: none;}
		body {background-color:white; font-family: 'Arial', serif; font-size:14px; color:rgb(10,10,10); text-decoration: none;}
	</style> 
	<!--Load JQUERY from Google's network -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script> 
    // using JQUERY's 
    $(document).ready(function () {
		$togglevalue = false;
		$("#red").change(function () {
			// http://www.w3schools.com/html/tryit.asp?filename=tryhtml5_input_type_range
			$("#res").append("red slider ");
			$.get("http://localhost:8910/control", { key: "r", value: $('input[name=red]').val() })
				.always(function() {
					$("#res").append($('input[name=red]').val() + " + ");
			});
		});
		$("#green").change(function () {
			$("#res").append("green slider ");
			$.get("http://localhost:8910/control", { key: "g", value: $('input[name=green]').val() })
				.always(function() {
					$("#res").append($('input[name=green]').val() + " + ");
			});
		});
		$("#blue").change(function () {
			$("#res").append("blue slider ");
			$.get("http://localhost:8910/control", { key: "b", value: $('input[name=blue]').val() })
				.always(function() {
					$("#res").append($('input[name=blue]').val() + " + ");
			});
		});
		$("#sizex").change(function () {
			$("#res").append("sizex slider ");
			$.get("http://localhost:8910/control", { key: "sizeX", value: $('input[name=sizex]').val() })
				.always(function() {
					$("#res").append($('input[name=sizex]').val() + " + ");
			});
		});
		$("#sizey").change(function () {
			$("#res").append("sizey slider ");
			$.get("http://localhost:8910/control", { key: "sizeY", value: $('input[name=sizey]').val() })
				.always(function() {
					$("#res").append($('input[name=sizey]').val() + " + ");
			});
		});
		$("#buttonexample").click(function () {
			$("#res").append("button pressed ");
			$.get("http://localhost:8910/control", { key: "drawcenter", value: "true" })
				.always(function() {
					$("#res").append("ok + ");
			});
		});
		$("#tooglexample").click(function () {
			$("#res").append("toogle pressed ");
			$.get("http://localhost:8910/control", { key: "fillfigure", value: !$togglevalue })
				.always(function() {
					$("#res").append(!$togglevalue + " + ");
					$togglevalue = !$togglevalue;
			});
		});
		$("#radioform input[name='radioexample']").click(function () {
			// http://jsfiddle.net/yeyene/kbAk3/
			$("#res").append("radio pressed ");
			$.get("http://localhost:8910/control", { key: "figure", value: $('input:radio[name=radioexample]:checked').val() })
				.always(function() {
					$("#res").append($('input:radio[name=radioexample]:checked').val() + " + ");
			});
		});
	});
	</script>
</head>
<body>
<h1>Codeigniter + OF (ofxWebSimpleGuiToo)</h1>
<h2>remote GUI to control an OF app from your browser</h2>
<br>
<h4>slider</h4>
<input type="range" name="red" id="red" min="0" max="255">red</input><br>
<input type="range" name="green" id="green" min="0" max="255">green</input><br>
<input type="range" name="blue" id="blue" min="0" max="255">blue</input><br>
<input type="range" name="sizex" id="sizex" min="50" max="800">sizex</input><br>
<input type="range" name="sizey" id="sizey" min="50" max="600">sizey</input>
<h4>button</h4>
<button id="buttonexample" type="button">button</button>
<h4>toogle</h4>
<button id="tooglexample" type="button">toggle</button>
<h4>rad</h4>
<div id="radioform">
	<form name="radioexample">
		<input type="radio" name="radioexample" id="radform0" value="0" checked>rectangle</input>
		<input type="radio" name="radioexample" id="radform1" value="1">circle</input>
		<input type="radio" name="radioexample" id="radform2" value="2">ellipse</input>
	</form>
</div>
<br>
<p id="res"><b>ACTION:</b> </p>
</body>
</html>