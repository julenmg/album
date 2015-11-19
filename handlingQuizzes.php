<!doctype html>
<html lang="en">
<head>
<?php
include "php/sesioa.php";
ikalogeatuDa();
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Galderak kudeatu</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyleHandlingQuizzes.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
    <script type="text/javascript" src="js/ajax.js"></script>
 </head>
<body onload="galderakErakutsi()">
	<section id="container">
		<span class="chyron"><em><a href="./">&laquo; atzera</a></em></span>
		<h2>Galdera sortu/editatu/ikusi</h2>
		<form name="erregistro" id="hongkiat-form" action="POST">
		<div id="wrapping" class="clearfix">
			<section id="aligned">
				<p>Galdera:</p><input type="text" name="GALDERA" id="question" autocomplete="off" tabindex="1" class="txtinput" required>
				<p>Erantzuna:</p><input type="text" name="ERANTZUNA" id="answer" autocomplete="off" tabindex="2" class="txtinput" required>
				<p>Zailtasuna:</p></p><input type="text" name="ZAILTASUNA" id="difficult_level" autocomplete="off" tabindex="3" class="txtinput" >
			<section id="buttons">
			<input type="button" name="submit" id="submitbtn" class="submitbtn" tabindex="7" onClick="galderaSortu(question.value,answer.value,difficult_level.value)" value="Galdera Gehitu">
			<input type="button" name="submit" id="submitbtn" class="submitbtn" tabindex="7" onClick="galderakIkusi()" value="Bistaratu">
			
			<br style="clear:both;">
		</section>
			</section>
			<section id="aside1" class="clearfix">
				<section id="prioritycase">
					<div style="float: left">Nire galderak/Galderak guztira DB: </div>
					<div id="gald"></div>	
			
				</section>
					<section id="erakutsiGalderak">
		
				</section>
			</section>
			
		</div>
		
		</form>
	</section>

</body>
</html>
