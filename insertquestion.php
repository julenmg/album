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
 </head>

<body>

	<section id="container">
		<span class="chyron"><em><a href="layoutBalidatuta.html">&laquo; atzera</a></em></span>
		<h2>Zure datuak sartu</h2>
		<form name="erregistro" id="hongkiat-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST"  >
		<div id="wrapping" class="clearfix">
			<section id="aligned">

			<p>Galdera:</p><input type="text" name="GALDERA" id="galdera" autocomplete="off" class="txtinput" required>
		
			<p>Erantzuna:</p><input type="text" name="ERANTZUNA" id="erantzuna" autocomplete="off" tabindex="3" class="txtinput" required>

			<p>Zailtasuna:</p></p><input type="text" name="ZAILTASUNA" id="zailtasuna" autocomplete="off" tabindex="3" class="txtinput" >

			
			</section>
			
			<section id="aside" class="clearfix">
				<section id="prioritycase">
				<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$galdera = $_POST['GALDERA'];
					$erantzuna = $_POST['ERANTZUNA'];
					$zailtasuna = $_POST['ZAILTASUNA'];
					
					if($galdera != "" && $erantzuna != ""){
						include "php/insertquestionbalidatu.php";
					}
					
					
				}
				
				



				?>
				</section>
			</section>
		</div>


		<section id="buttons">
			<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Galdera Gehitu">
			<br style="clear:both;">
		</section>
		</form>
	</section>

</body>
</html>
