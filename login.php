<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Formularioa</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
  <script type="text/javascript" src="js/myscript.js"></script>
 </head>

<body>

	<section id="container">
		<span class="chyron"><em><a href="layout.html">&laquo; atzera</a></em></span>
		<h2>Zure datuak sartu</h2>
		<form name="erregistro" id="hongkiat-form" action="loginbalidatu.php" method="POST" >
		<div id="wrapping" class="clearfix">
			<section id="aligned">

			<!--<p>Posta-korreoa:</p><input type="email" name="POSTA" id="email" placeholder="Adb:myname001@ikasle.ehu.es" pattern="^[a-z]*[0-9]{3}\@ikasle\.ehu(\.es|\.eus)$" autocomplete="off" tabindex="2" class="txtinput" required>
			<p>Pasahitza:</p><input type="password" name="PASAHITZA" id="password" placeholder="Adb:123456" pattern=".{6,}"required autocomplete="off" tabindex="3" class="txtinput" required>
			-->
			<p>Posta-korreoa:</p><input type="email" name="POSTA" id="email" placeholder="Adb:myname001@ikasle.ehu.es"  autocomplete="off" tabindex="2" class="txtinput" required>
			<p>Pasahitza:</p><input type="password" name="PASAHITZA" id="password" placeholder="Adb:123456" pattern=".{6,}"required autocomplete="off" tabindex="3" class="txtinput" required>
			</section>
			
		</div>
		<section id='aside' class='clearfix'>
		<h2><?php echo $_GET["id"]?></h2>
		</section>
		<section id="buttons">
			<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="LOGIN">
			<br style="clear:both;">
		</section>
	
		</form>
	</section>

</body>
</html>