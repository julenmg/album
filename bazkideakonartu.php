<!doctype html>
<html lang="en">
<head>
<?php
include "php/sesioa.php";
adminlogeatuDa();
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Bazkideak kudeatu</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyleReviewingQuizzes.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
    <script type="text/javascript" src="js/bazkideakonartu.js"></script>
 </head>
<body onload="erabiltzaileakIkusi()" >
	<section id="container">
		<span class="chyron"><em><a href="./">&laquo; atzera</a></em></span>
		<h2>Bazkideak onartu/blokeatu</h2>
		<form name="erregistro" id="hongkiat-form" action="POST">
		<div id="wrapping" class="clearfix">
				<br style="clear:both;">
			<section id="aligned">

			<p>Posta:</p><input type="email" name="BAZKIDEPOSTA" id="bazkide_posta" placeholder="Adb:myname@gmail.ehu.es" autocomplete="off" tabindex="2" class="txtinput" pattern="/\w*[0-9]{0,9}+@(gmail|hotmail|yahoo)\.[A-Za-z]{2,4}/" required >

		<section id="buttons">
			<input type="submit" name="Onartu" id="submitbtn" class="submitbtn" tabindex="7" value="ONARTU" 
onClick="erabiltzaileaonartu(bazkide_posta.value)">
			<input type="submit" name="Blokeatu" id="submitbtn2" class="submitbtn" tabindex="7" value="BLOKEATU" onClick="erabiltzaileablokeatu(bazkide_posta.value)">
			<br style="clear:both;">
		</section>
			<div id="erakutsiMezua"> </div>
		</section>
		
			<section id="aside1" class="clearfix">
				<section id="prioritycase">
					<div  id="erakutsiErabiltzaileak"> </div>
				</section>
			</section>
			
		</div>
		
		</form>
	</section>

</body>
</html>
