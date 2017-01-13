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
					<a href="index.php?dossier=<?=dirname($_GET['dossier'])?>/" class="folder_name">Retour en arrière</a></br>
					<?php next($download); ?>
				</div>
			<?php } else { ?>
				<div>
					<?php if(isset($_GET['dossier'])) { ?>
						<div class="col-xs-12 col-sm-6 col-md-4 carre">
							<img src="images/02.jpg" alt="image de projet">
							<div class="description">blablabla</div>
							<div class="titre"><h2><a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/" class="folder_name"><?=$dir?></a></br></h2>
							<a href="http://laurianep.marmier.codeur.online/<?=$_GET['dossier']?><?=current($download)?>" download filename="<?=$dir?>">Télécharger</a>
							<?php next($download); ?>
						</div>
					<?php } else { ?>
						<div class="col-xs-12 col-sm-6 col-md-4 carre">
							<img src="images/02.jpg" alt="image de projet">
							<div class="description">blablabla</div>
							<div class="titre"><h2><a href="index.php?dossier=<?=$dir?>/" class="folder_name"><?=$dir?></a></br>
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
			<div class="titre"><h2><?=$dir;?></h2>
			<a href="http://laurianep.marmier.codeur.online/<?=$_GET['dossier']?><?=current($download)?>" download filename="<?=$dir?>">Télécharger</a></div>
			<?php next($download); ?>
		</div>
	<?php } ?>
<?php } ?>