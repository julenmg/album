<?php include "php/sesioa.php";?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Home</title>
    <link rel='stylesheet' type='text/css' href='stylesPWS/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='stylesPWS/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='stylesPWS/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<?php goikoMenua();?>
	<h2>ARGAZKI ALBUMA</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<?php mainMenua();?>
	</nav>
    <section class="main" id="s1">
	<center>
    <h2>Hasiera</h2>
        <article>
			<img src="image/image2.png" height="200" width="400"/>
		</article>
	</center>
    </section>
</div>
</body>
</html>
