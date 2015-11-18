<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Erregistratu</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
  <script type="text/javascript" src="js/myscript.js"></script>
 </head>

<body>

	<section id="container">
		<span class="chyron"><em><a href="./">&laquo; atzera</a></em></span>
		<h2>Zure datuak sartu</h2>
		<form name="erregistro" id="hongkiat-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
		<div id="wrapping" class="clearfix">
			<section id="aligned">
			<p>Izena:</p> <input type="text" name="IZENA" id="name" placeholder="Adb:Jon" autocomplete="off" tabindex="1" class="txtinput">
		
			<p>Abizenak:</p><input type="text" name="ABIZENAK" id="name" placeholder="Adb:Egana Granado" autocomplete="off" tabindex="1" class="txtinput">
		
			<p>Posta-korreoa:</p><input type="email" name="POSTA" id="email" placeholder="Adb:myname001@ikasle.ehu.es" autocomplete="off" tabindex="2" class="txtinput" >
		
			<p>Pasahitza:</p><input type="password" name="PASAHITZA" id="password" placeholder="Adb:123456" autocomplete="off" tabindex="3" class="txtinput" >
		
			<p>Telefonoa:</p><input type="tel" name="TELEFONOA" id="telephone" placeholder="Adb:987654321" maxlength="9" tabindex="4" class="txtinput">
			
			<p>Interesa duzun teknologia:</p>
			<textarea name="message" id="message" tabindex="5" class="txtblock"></textarea>
			</section>
			
			<section id="aside" class="clearfix">
				<section id="prioritycase">
					<p>Espezialitatea:</p>
					<span class="radiobadge">
						<input type="radio" id="SI" name="ESPEZIALITATEA" onchange="besterik()" value="SI" checked>
						<label for="SI">Software Ingeneritza</label>
					</span>
				
					<span class="radiobadge">
						<input type="radio" id="K" name="ESPEZIALITATEA" onchange="besterik()" value="K">
						<label for="K">Konputazioa</label>
					</span>
				
					<span class="radiobadge">
						<input type="radio" id="KI" name="ESPEZIALITATEA" onchange="besterik()" value="KI">
						<label for="KI">Konputagailuen Ingeniaritza</label>
					</span>
					
					<span class="radiobadge">
						<input type="radio" id="B" name="ESPEZIALITATEA" onchange="besterik()" value="B">
						<label for="B">Besterik</label>
					</span>
					<input type="text" id="besterikTextarea" name="BTT"/>
				    <br/>
					<input name="irudiaIgo"type="file" onchange="showMyImage(this)" />
					<img id="thumbnil" style="width:60%; height:60%; margin-top:10px;"  src="" alt="image"/>
					<?php
				
							if ($_SERVER["REQUEST_METHOD"] == "POST"){
								$izena = $_POST['IZENA'];
								$abizenak = $_POST['ABIZENAK'];
								$posta = $_POST['POSTA'];
								$pasahitza = $_POST['PASAHITZA'];
								$telefonoa = $_POST['TELEFONOA'];
								$espezialitatea = $_POST['ESPEZIALITATEA'];
								$regex1 = "/([a-zA-z]*\s[a-zA-z]*)*/";
								$regex2 = "/^[a-z]*[0-9]{3}(\@irakasle|\@ikasle)\.ehu(\.es|\.eus)$/";
								$datuokerrakMezua = "";
			 
								if($izena == ""){
									$datuokerrakMezua  = $datuokerrakMezua . "Izena falta,";
								}
								
								if(!preg_match($regex1,$abizenak)){
									$datuokerrakMezua  = $datuokerrakMezua . "Abizenak falta,";
								}
								
								if (!preg_match( $regex2, $posta ) ){
									$datuokerrakMezua  = $datuokerrakMezua . "Sartu duzun emaila ez da egokia,";
								}
								
								if(strlen($pasahitza) < 6){
									$datuokerrakMezua  = $datuokerrakMezua . "Pasahitzaren tamaina, gutxienez 6koa,";
								}
								
								if(strlen($telefonoa) < 9){
									$datuokerrakMezua  = $datuokerrakMezua . "Telefonoaren luzera 9koa izan behar da,";
								}
								
								if(strcmp($espezialitatea, "B") == 0){
									$espezialitatea = $_POST['BTT'];
									if($espezialitatea == "")
										$datuokerrakMezua  = $datuokerrakMezua . "Espezialitatea espezifikatu,";
								}
								
								if($datuokerrakMezua == ""){
									include('php/Erregistratu.php');
								}else{
									echo "<h2>". $datuokerrakMezua . "</h2>";
								}
							}
								
						?>
				</section>
			</section>
		</div>


		<section id="buttons">
			<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="RESET">
			<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="SUBMIT">
			<br style="clear:both;">
		</section>
		</form>
	</section>

</body>
</html>
