<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Login</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
 </head>

<body>

	<section id="container">
		<span class="chyron"><em><a href="./">&laquo; atzera</a></em></span>
		<h2>Buscar teléfono ...</h2>
<OBJECT id="datuak" data="xml/erabiltzaileak.xml" type="text/xml" style="display:none"> </OBJECT>
		<form name="erregistro" id="hongkiat-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST"  >
		<div id="wrapping" class="clearfix">
			<section id="aligned">

			<p>Posta-korreoa:</p><input type="email" name="POSTA" id="email" placeholder="Adb:myname001@ikasle.ehu.es" autocomplete="off" tabindex="1" class="txtinput" >
		
			<p>Telefonoa:</p><input type="password" name="PASAHITZA" id="password" placeholder="Adb:123456" pattern=".{6,}"required autocomplete="off" tabindex="2" class="txtinput" required>

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