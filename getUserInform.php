<!doctype html>
<html lang="en">
<head>
<?php
include "php/sesioa.php";
iralogeatuDa();
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Login</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
  <script type="text/javascript" src="js/getUserInform.js"></script>
 </head>

<body>

	<section id="container">
		<span class="chyron"><em><a href="./">&laquo; atzera</a></em></span>
		<h2>Buscar teléfono ...</h2>
<OBJECT id="datuak" data="xml/erabiltzaileak.xml" type="text/xml" style="display:none"> </OBJECT>
		<form name="erregistro" id="hongkiat-form"   method="POST"  autocomplete="on">
		<div id="wrapping" class="clearfix">
			<section id="aligned">

			<p>Posta-korreoa:</p><input type="email" name="POSTA" id="email" placeholder="Adb:myname001@ikasle.ehu.es" autocomplete="off" tabindex="1" class="txtinput" >

			<p>Izena:</p> <input type="text" name="IZENA" id="name" placeholder="Adb:Jon" autocomplete="on" tabindex="1" class="txtinput">
		
			<p>Abizena1:</p><input type="text" name="ABIZEN1" id="surname1" placeholder="Adb:Egana" autocomplete="on" tabindex="1" class="txtinput">

			<p>Abizena2:</p><input type="text" name="ABIZEN2" id="surname2" placeholder="Adb:Granado" autocomplete="on" tabindex="1" class="txtinput">
		
			<p>Telefonoa:</p><input type="tel" name="TELEFONOA" id="telephone" placeholder="Adb:687654321" pattern=".{9,9}"required autocomplete="on" tabindex="2" class="txtinput" required>

			
			</section>
			<section id="aside" class="clearfix">
				<section id="prioritycase">
					<h2 id="erreg" style="display:none"></h2>
				</section>
			</section>
		</div>


		<section id="buttons">
			<input type="button" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="osatze_automatikoa" onClick="javascript:osatu()">
			<br style="clear:both;">
		</section>
		</form>
	</section>

</body>
</html>
