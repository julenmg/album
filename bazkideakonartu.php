<!doctype html>
<html lang="en">
<head>
<?php
include "php/sesioa.php";
adminlogeatuDa();
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Galderak berrikusi</title>
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
		<h2>Galdera editatu/ikusi</h2>
		<form name="erregistro" id="hongkiat-form" action="POST">
		<div id="wrapping" class="clearfix">
				<br style="clear:both;">
			<section id="aligned">

			<p>Posta:</p><input type="email" name="BAZKIDEPOSTA" id="bazkide_posta" placeholder="Adb:myname@gmail.ehu.es" autocomplete="off" tabindex="2" class="txtinput" pattern="/\w*[0-9]{0,9}+@(gmail|hotmail|yahoo)\.[A-Za-z]{2,4}/" required onchange="osatu(bazkide_posta.value)">
			<p>Izena:</p><input type="text" name="IZENA" id="name" autocomplete="on" tabindex="4" class="txtinput" disabled="disabled">
			<p>Abizenak:</p><input type="text" name="ABIZENAK" id="surname" autocomplete="on" tabindex="5" class="txtinput" disabled="disabled" >
		<section id="buttons">
			<input type="submit" name="Onartu" id="submitbtn" class="submitbtn" tabindex="7" value="ONARTU">
			<input type="submit" name="Ezabatu" id="submitbtn" class="submitbtn" tabindex="7" value="EZABATU">
			<br style="clear:both;">
		</section>
			
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
