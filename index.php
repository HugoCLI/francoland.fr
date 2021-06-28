<!--



	Design crée par BDV Community

	Sous license Creative Commons Attribution 3.0 Project 846274

	Plus d'information sur http://developer.beefac.com/project/846274/



--> 

<!DOCTYPE html>

<html>

<head>

	<title>Accueil - Francoland</title>

	<link http-equiv="Cache-Control: max-age=31557600" rel="stylesheet" href="assets/<?php include('assets/load_versionweb.php'); ?>" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<meta name="description" content="Découvrez Francoland un serveur Mini-Jeux sur Minecraft, Rush, Créatif, Skywars, Bedwars, Loup-Garou, Build Battle, découvrez des jeux inédits de la version 1.8x à la version actuelle.">

	<link rel="icon" href="favicon.ico" />

	<meta charset="utf-8" />

</head>

<body>

<div class="navigation">

	<a href="/" alt="accueil">Accueil</a>

	<a href="/membre" alt="membre">Membre</a>

	<a href="/boutique" alt="shop">Boutique</a>

	<a href="/jouer" alt="jouer">Jouer</a>

	<span> </span>

	<a target="_blank" href="https://discord.gg/CjvMKWU" alt="discord"><i class="fab fa-discord"></i></a>

	<a target="_blank" href="https://twitter.com/Francoland_MC" alt="twitter"><i class="fab fa-twitter"></i></a>

</div>

<div class="title">

		<h2>Francoland</h2>

		<span> </span>

		<a id="online"><?php
    		$lobby = 'http://api.serveurs-minecraft.com/api.php?Joueurs_En_Ligne_Ping&ip=play.francoland.fr&port=25581';
    		$bungee = 'http://api.serveurs-minecraft.com/api.php?Joueurs_En_Ligne_Ping&ip=play.francoland.fr&port=25577';
    		$staff = 'http://api.serveurs-minecraft.com/api.php?Joueurs_En_Ligne_Ping&ip=play.francoland.fr&port=25591';
    		
    		function get_players($url){
                if (is_file($url)) {
                    $res = file_get_contents($url);
                    return $res;
                }
            }
            
            $playeronline = get_players($lobby) + get_players($bungee) + get_players($staff);
            echo $playeronline;
    
            if($playeronline <= 1) {
            	echo ' joueur';
            } else {
            	echo ' joueurs';
            }
        ?> en ligne</a>

		<a id="ip">play.francoland.fr</a>

</div>
<div id="alert">
	
</div>
<script src="assets/javascript.js"></script>
</body>
</html>