<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Explorateur de fichier</title>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/styles.css" rel="stylesheet"/>
        
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
				<div class="row cadre">
					<?php
						$base_url = "/home/laurianep/";
						
						if (isset($_GET['dossier'])){
							$base_url = $base_url.$_GET['dossier']; /*associe l'url de base avec le nom de dossier*/
						}
						
						$dirs = scandir($base_url); /*scan le nombre de dossier*/
						$download = scandir($base_url);
						$crumbs = explode("/",$_SERVER["REQUEST_URI"]); /*récupère l'url en array*/
						
					foreach($dirs as $dir){ ?>
						<?php if (is_dir($base_url.$dir)){ ?>
								<?php if ($dir == ".." || $dir == ".") { ?>
									<div class="row retour">
										<a href="index.php?dossier=<?=dirname($_GET['dossier'])?>/">Retour en arrière</a></br>
										<?php next($download); ?>
									</div>
								<?php } else { ?>
									<div>
										<?php if(isset($_GET['dossier'])) { ?>
											<div class="col-xs-12 col-sm-6 col-md-4 carre">
												<img src="images/02.jpg" alt="image de projet">
												<div class="description">blablabla</div>
												<div class="titre"><h2><a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><?=$dir?></a></br></h2>
												<a href="http://laurianep.marmier.codeur.online/<?=$_GET['dossier']?><?=current($download)?>" download filename="<?=$dir?>">Télécharger</a>
												<?php next($download); ?>
											</div>
										<?php } else { ?>
											<div class="col-xs-12 col-sm-6 col-md-4 carre">
												<img src="images/02.jpg" alt="image de projet">
												<div class="description">blablabla</div>
												<div class="titre"><h2><a href="index.php?dossier=<?=$dir?>/"><?=$dir?></a></br>
												<a href="http://laurianep.marmier.codeur.online/<?=$_GET['dossier']?><?=current($download)?>" download filename="<?=$dir?>">Télécharger</a></br></h2>
												<?php next($download); ?>
											</div>
										<?php } ?>
									</div>
								<?php } ?>
						<?php } else { ?>
							<div class="col-xs-12 col-sm-6 col-md-4 carre">
								<img src="images/03.jpg" alt="image de projet">
								<div class="description">blablabla</div>
								<div class="titre"><h2><p><?=$dir;?></br>
								<a href="http://laurianep.marmier.codeur.online/<?=$_GET['dossier']?><?=current($download)?>" download filename="<?=$dir?>">Télécharger</a></p></div>
								<?php next($download); ?>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
				
				<!--zigouigoui en haut à droite qui doit s'étendre-->
				<div class="infos"></div>
			</main>
		</div>
		<div class="container">
			<footer>
					eriuhguihg
			</footer>
		</div>
	</body>	
</html>

//<?php //Version FOR & ECHO
//					$dir = "/home/laurianep/";
//					
//					$a = scandir($dir);
//					
//					$taillea = count($a);
//					
//					for($i = 0 ; $i < $taillea ; $i++){
//						
//						echo '<div class="row fichiers">
//								<div class="col-md-4 carre">
//									<img src="images/02.jpg" alt="image de projet">
//									<div class="description">blablabla</div>
//									<div class="titre"><h2><a href="http://'.$_SERVER['SERVER_NAME'].'/'.current($a).'">' .current($a). '</a></h2></div>
//								</div>';
//								
//						next($a);
//						
//						echo '<div class="col-md-4 carre">
//									<img src="images/02.jpg" alt="image de projet">
//									<div class="description">blablabla</div>
//									<div class="titre"><h2><a href="http://'.$_SERVER['SERVER_NAME'].'/'.current($a).'">' .current($a). '</a></h2></div>
//								</div>';
//								
//						next($a);
//						
//						echo '<div class="col-md-4 carre">
//									<img src="images/02.jpg" alt="image de projet">
//									<div class="description">blablabla</div>
//									<div class="titre"><h2><a href="http://'.$_SERVER['SERVER_NAME'].'/'.current($a).'">' .current($a). '</a></h2></div>
//								</div>
//							</div>';
//							
//						next($a);
//						$i += 2;
//					
//					}
//				?>