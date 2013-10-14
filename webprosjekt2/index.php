<?php
$page = $_GET['page'];
error_reporting(E_ALL);
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Velkommen til Sondres hjemmeside!</title>
		<link rel="stylesheet" href="glass.css"> 
		<link rel="stylesheet" href="magnific-popup/magnific-popup.css"> 
		<link rel="stylesheet" href="skiftstil.css"> 
		<link rel="stylesheet" id="switch_style" href="Midlertidig.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
		<script src="magnific-popup/jquery.magnific-popup.js"></script> 
		<script src="JS/tekst.js"></script> 
		<script src="JS/knapp.js"></script>
		<script src="JS/easteregg.js"></script>
		<script src="JS/skiftstil.js"></script>
		<script src="JS/popup.js"></script>
	</head>

	<body>

		<?php
			include "navigasjon.html";
		?>

		<section>
			<header>
				<?php
	      		switch($page){
	        		case "2":
	            		include('favoritter.html');
	          			break;
	          		case "3":
	            		include('CV.html');
	          			break;
	          		default:
	              		include('index.html');
	          			break;
	      			}
	  			?>

		<footer>
			<p>&copy;2013 Sondre Husevold. &nbsp;&nbsp;Tekst farge: 
			<button id="black">Svart</button>
			<button id="white">Hvit</button>
			<button id="lightblue">Lyseblå</button>
			</p>
		</footer>
	</body>
</html>