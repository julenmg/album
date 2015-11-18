<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Credits</title>
    <link rel='stylesheet' type='text/css' href='stylesPWS/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='stylesPWS/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='stylesPWS/smartphone.css' />
	<script type="text/javascript" src="js/geolokalizazioa.js"></script>
  </head>
  <body onload="javascript:initGeolocation()">
  <div id='page-wrap'>
	<header class='main' id='h1'>
    <?php
		include "php/sesioa.php";
		goikoMenua();
	?>
	<h2>Quiz: crazy questions</h2>
    </header>
    <section class="main" id="s1">
	<center>
		<h2>Credits</h2>
		<article>
			<h3>Nire datuak</h3>
			<p>Deiturak: Jon Egaña</p>
			<p>Espezialitatea: Software Ingeniaritza</p>
			<img src="image/image1.jpg" alt="Smiley face" height="200" width="400"/>
			<div id="map" style="{width:100px;height:100px;}">
				<img id="static-map" />
			</div> 
		</article>
	</center>
	</section>
	<footer class='main' id='f1'>
		<p><a href="http://en.wikipedia.org/wiki/Quiz" target="_blank">What is a Quiz?</a></p>
		<a href='credits.php'>Credits</a>
		<a href='./'>Home</a>
	</footer>
</div>
</body>
</html>
