<!--

	Design crée par BDV Community
	Sous license Creative Commons Attribution 3.0 Project 846274
	Plus d'information sur http://developer.beefac.com/project/846274/

--> 
<!DOCTYPE html>
<html>
<head>
	<title>Membre - Francoland</title>
	<link rel="stylesheet" href="assets/membre.<?php include('assets/load_versionweb.php'); ?>" />
	<link rel="icon" href="favicon.ico" />
	<meta charset="utf-8" />
</head>
<body>
<div class="navigation">
	<img src="https://i.goopics.net/WLNAV.png">
	<a href="/" alt="accueil">Accueil</a>
	<a href="/membre" alt="membre">Membre</a>
	<a href="/boutique" alt="shop">Boutique</a>
	<a href="/jouer" alt="jouer">Jouer</a>
	<a target="_blank" href="https://discord.gg/CjvMKWU" alt="discord"><i class="fab fa-discord"></i></a>
	<a target="_blank" href="https://twitter.com/Francoland_MC" alt="twitter"><i class="fab fa-twitter"></i></a>
	<div class="white"> </div>
</div>
<div class="search">
	<form action="" method="get">
		<input minlength="3" maxlength="16" name="profil" type="text" <?php if(isset($_GET['profil'])) { if(!empty($_GET['profil'])) { echo 'value="'.$_GET['profil'].'"'; } } ?> placeholder="Saisir le pseudo du joueur (exemple Inspecteur_X)">
		<input type="submit" value="Envoyer">
	</form>
	<?php 
	if(isset($_GET['profil'])) { 
		if(!empty($_GET['profil'])) { 
			echo '<span>Connexion au serveur impossible (Mysql connexion impossible)</span>'; 
		}
    } ?>
	<?php if(isset($_GET['profil'])) { 
			if(!empty($_GET['profil'])) { 
			include('profil.php');
			}
		}
	?>
</div>
</body>
</html>