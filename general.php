<?php
session_start();
?>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="quiz.css">
	<title>QUIZ</title>
	<link href="https://fonts.googleapis.com/css?family=Macondo" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
			<div id="quiz">
				<div id="question"></div>
				<label class="option"><input type="radio" name="option" value="1" /><span id="option1"></span></label>
				<label class="option"><input type="radio" name="option" value="2" /><span id="option2"></span></label>
				<label class="option"><input type="radio" name="option" value="3" /><span id="option3"></span></label>
				<label class="option"><input type="radio" name="option" value="4" /><span id="option4"></span></label>
				<br><br><br>
				<button id="next" onclick="nextques();" style = "float: left; padding: 10px">NEXT QUESTION</button>
				<button id="quit" onclick="quit(); style = "float: right;">Quit</button>
			</div>
			<div id="result" style="display:none">
			</div>
            
            <p style = "text-align:center;"> <a href="index.php?logout='1'" style="color:red;">logout</a> </p>
			<script type="text/javascript" src="generalquestions.js"></script>
	<script type="text/javascript" src="main.js"></script>
    
	
</body>
</html>