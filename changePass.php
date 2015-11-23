<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Pasahitza aldatu</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
    <script type="text/javascript" src="js/ajax.js"></script>
 </head>

<body>

	<section id="container">
		<span class="chyron"><em><a href="./">&laquo; atzera</a></em></span>
		<h2>Zure pasahitzak sartu</h2>
		<form name="erregistro" id="hongkiat-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
		<div id="wrapping" class="clearfix">
			<section id="aligned">
			<p>Pasahitz berria:</p><input type="password" name="PASAHITZA" id="password" placeholder="Adb:123456" autocomplete="off" tabindex="3" class="txtinput" >

			<p>Errepikatu pasahitza:</p><input type="password" name="PASAHITZA2" id="password2" placeholder="Adb:123456" autocomplete="off" tabindex="4" class="txtinput" onchange="pasahitzaBalidatu(password.value,password2.value)">
		

			</section>
			
			<section id="aside" class="clearfix">
				<section id="prioritycase">
					<div id="epostamezua" style="height:50px;">
					</div>
					<br/>
					<div id="passmezua" style="height:50px;">
					
					</div>
					<div id="passmezua2" style="height:50px;">
					
					</div>
				</section>
			</section>
		</div>

		<section id="buttons">
			<input type="button" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="ALDATU" 
onClick="pasahitzaAldatu(password.value)">
			<br style="clear:both;">
		</section>
		</form>
	</section>

</body>
</html>
