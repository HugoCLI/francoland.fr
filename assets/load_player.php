<?php
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
        ?> en ligne