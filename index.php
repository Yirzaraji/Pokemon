<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Poke-Battle</title>
</head>
<body>
	<div class="container" id="center">
		<div class="row">
			<h1 class="col-12" id="Titre">Poke-Battle</h1>
			<div class="col-12" id="background">
				<img src="img/logo.png" id="image">
			</div>
			<div class="col-12" id="btn">
	<button type="button" class="btn btn-warning" id="bold">JOUER !</button>
			</div>
		</div>
	</div>
		<div id="elem">
					<div class="cardParent">
						<div class="test"><a href=""><img src="img/carte_mime.jpg"></a></div>
						<div class="selectplayer">Choisissez votre pokémon</div>
						<div class="test" id="imgredim"><a href=""><img src="img/Carte_Qul.png"></a></div>
					
					</div>
					<div class="col-12" id="background">
					
					</div>
					
		</div>
	<?php
		require './classes/pokemon.php';
	?>
		<script type  ="text/javascript" src="./javascript/function.js"></script>
</body>
</html>