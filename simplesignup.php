<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Erregistratu 2</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
    <script type="text/javascript" src="js/ajax.js"></script>
 </head>

<body>

	<section id="container">
		<span class="chyron"><em><a href="./">&laquo; atzera</a></em></span>
		<h2>Zure datuak sartu</h2>
		<form name="erregistro" id="hongkiat-form" method="GET" enctype="multipart/form-data">
		<div id="wrapping" class="clearfix">
			<section id="aligned">
			<p>Posta-korreoa:</p><input type="email" name="POSTA" id="email" placeholder="Adb:myname001@ikasle.ehu.es" autocomplete="off" tabindex="1" class="txtinput" onChange="epostaKonprobatu(email.value)"> 
			<p>Pasahitza:</p><input type="password" name="PASAHITZA" id="password" placeholder="Adb:123456" autocomplete="off" tabindex="2" class="txtinput" >
			<p>Tiketa:</p><input type="text" name="TIKETA" id="tiketa" placeholder="Adb:1234" autocomplete="off" tabindex="3" class="txtinput" >

			</section>
			
			<section id="aside" class="clearfix">
				<section id="prioritycase">
					<div id="epostamezua" style="height:50px;">
					</div>
					<br/>
					<div id="passmezua" style="height:50px;">
					
					</div>
				</section>
			</section>
		</div>

		<section id="buttons">
			<input type="button" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="KONPROBATU" onclick="konprobatu()">
			<br style="clear:both;">
		</section>
		</form>
	</section>

</body>
</html>
