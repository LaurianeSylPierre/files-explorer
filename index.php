<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Explorateur de fichier</title>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/styles.css" rel="stylesheet"/>
		<script src="js/jquery-3.1.1.min.js"></script>
        
	</head>
    
    <body class="row">
		<div class="container">
			<header class="col-sm-3">
				<div>
					<nav>
						<ul>Catégories
							<li><input type="checkbox">Catégorie 1</li>
							<li><input type="checkbox">Catégorie 2</li>
							<li><input type="checkbox">Catégorie 3</li>
							<li><input type="checkbox">Catégorie 4</li>
							<li><input type="checkbox">Catégorie 5</li>
						</ul>
					</nav>
				</div>
			</header>
			<main class="col-sm-9">
				<div id="cadre" class="row cadre">
					<?php
					require('php/fonction.php');
					?>
				</div>
			</main>
			<!--zigouigoui en haut à droite qui doit s'étendre-->
				<div class="infos">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae ligula sem. Sed quam magna, sollicitudin ac erat quis,
					feugiat euismod mi. Suspendisse ac porttitor nisi. Sed aliquet consectetur massa bibendum dignissim. Pellentesque congue augue
					ut ullamcorper congue. Aenean ac risus lacinia, ullamcorper felis nec, volutpat ligula. Curabitur risus mi, tempus sed sapien eu,
					fermentum consectetur nunc. Donec at ex fringilla purus laoreet viverra in in ante. Morbi id efficitur ex. Suspendisse potenti.
					Donec sed ultrices lectus, at suscipit augue. Nam porta libero nec porta pharetra. Etiam pharetra consectetur magna ut porttitor.
					Praesent et cursus urna. Vivamus interdum auctor elit, sed blandit ligula. Nunc vitae orci sed metus aliquam sollicitudin.</p>
				</div>
		</div>
		<div class="container">
			<footer>
					eriuhguihg
			</footer>
		</div>
	</body>
	
	<script>
		console.log("pouet");
		$(document).ready(function() {
		    $(document).on("click", ".folder_name", function(e){
				e.preventDefault();
				var $a = $(this);
				var adresse = $a.attr("href");
				var arr = adresse.split('?')[1];
				$.ajax({
					type : "GET",
					data: arr,
					url: "php/fonction.php",
					success : function(data){
						$(".cadre").html(data);
					}
				});
			});
		});
	</script>
</html>

