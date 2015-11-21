<!doctype html>
<html lang="en">
<head>
<?php
include "php/sesioa.php";
iralogeatuDa();
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Galderak berrikusi</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyleReviewingQuizzes.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
    <script type="text/javascript" src="js/reviewingQuizzes.js"></script>
 </head>
<body onload="galderakIkusi()" >
	<section id="container">
		<span class="chyron"><em><a href="./">&laquo; atzera</a></em></span>
		<h2>Galdera editatu/ikusi</h2>
		<form name="erregistro" id="hongkiat-form" action="POST">
		<div id="wrapping" class="clearfix">
				<br style="clear:both;">
			<section id="aligned">
				<section id="buttons">
					<input type="button" name="edit" id="editbtn" class="submitbtn" tabindex="1" value="Editatu" onclick="editatzekoPrestatu()">
					<input type="button" name="save" id="savebtn" class="submitbtn" tabindex="2" value="Gorde" onclick="galderaEditatu(question_id.value,question.value,answer.value,difficult_level.value)"style="display:none">
					<div id="erakutsiMezua"></div>
				</section>
				<br style="clear:both;">
			<p>Id:</p><input type="text" name="GALDERAID" id="question_id" autocomplete="off" tabindex="3" class="txtinput" onchange="osatu(question_id.value)">
			<p>Galdera:</p><input type="text" name="GALDERA" id="question" autocomplete="off" tabindex="4" class="txtinput" disabled="disabled">
			<p>Erantzuna:</p><input type="text" name="ERANTZUNA" id="answer" autocomplete="off" tabindex="5" class="txtinput" disabled="disabled" >
			<p>Zailtasuna:</p></p><input type="text" name="ZAILTASUNA" id="difficult_level" autocomplete="off" tabindex="4" class="txtinput" disabled="disabled" >
			
		</section>
		
			<section id="aside1" class="clearfix">
				<section id="prioritycase">
					<div  id="erakutsiGalderak"> </div>
				</section>
			</section>
			
		</div>
		
		</form>
	</section>

</body>
</html>
