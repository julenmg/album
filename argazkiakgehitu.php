<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Argazkia gehitu</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
  <script type="text/javascript" src="js/ajax.js"></script>
 </head>

<body>

	<section id="container">
		<span class="chyron"><em><a href="./">&laquo; atzera</a></em></span>
		<h2>Argazkiaren datuak sartu</h2>
		<form name="erregistro" id="hongkiat-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
		<div id="wrapping" class="clearfix">
			<section id="aligned">
			<p>Etiketa:</p> <input type="text" name="ETIKETA" id="name" placeholder="Adb:Loreak" autocomplete="off" tabindex="1" class="txtinput" required>

			<p>Izena:</p> <input type="text" name="IZENA" id="name" placeholder="Adb:Tulipanak" autocomplete="off" tabindex="1" class="txtinput" required>
		
			</section>
			
			<section id="aside" class="clearfix">
				<section id="prioritycase">
					
				    <br/>
					<input name="irudiaIgo"type="file" onchange="showMyImage(this)" />
					<img id="thumbnil" style="width:60%; height:60%; margin-top:10px;"  src="" alt="image"/>
					<div id="passmezua" style="height:50px;">
					
					</div>
					<?php
				
							if ($_SERVER["REQUEST_METHOD"] == "POST"){
								$izena = $_POST['IZENA'];
								$etiketa = $_POST['ETIKETA'];
								$datuokerrakMezua = "";								
								if($datuokerrakMezua == ""){
									include('php/gehituargazkiak.php');
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
