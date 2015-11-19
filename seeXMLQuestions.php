<!doctype html>
<html lang="en">
<head>
<?php
include "php/sesioa.php";
ikalogeatuDa();
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Galderak ikusi</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="icon" href="stylesPWS\images\form.png">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/mystyle.css">
  <link rel="stylesheet" type="text/css" media="all" href="stylesPWS/responsive.css">
  <script type="text/javascript" src="js/myscript.js"></script>
 </head>

<body>

	<section id="container">
		<span class='chyron'><em><a href='./'>&laquo; atzera</a></em></span>
		<h2>Galdera guztiak</h2>
		<center style="font-size: 2em;" >
		<?php
			include "php/xmlquizzes.php";
		?>
		</center>
	</section>

</body>
</html>
