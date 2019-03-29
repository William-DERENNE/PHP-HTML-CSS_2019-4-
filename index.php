<?php   header ( 'Content-Type: text/html;charset=UTF-8' );
    require_once 'classeObjet.php';
    require_once 'classeArme.php';
    require_once 'classeArmure.php';
    require_once 'classeContenant.php';
    require_once 'classePersonnage.php';
    
    /**
     * FIN de l'entête PHP, DéBUT de l'entête HTML.
     */
?>

<!doctype html>
<html lang="fr">
    <head>
    	<meta charset="utf-8">
      	<title>Kryptosphère 2019  -  Initiation PHP7-HTML5-CSS3 n°4: JdR Partie 4 -  Maître Will;)</title>
      	<link rel="stylesheet" href="style.css">
      	<script src="fonctions.js"></script>
    </head>


    <body>
    
    	<div name = "affPHP" align = "center">
    		<font color = "orange">
    			<?php
                    $_personnage = new Personnage ( 'Marcelus GORDON', '-aucune description-', 40, 8, 6, 4, 5 );
                        
                        $_personnage -> getPersonnage();

                    echo '<hr />';
                    
                    $_mainsNues = new Arme ( 'Mains nues', '-aucune description-', 1 );
                    $_épée = new Arme ( 'Epée De Chevalier', '-aucune description-', 15 );
                    
                    $_habitsTissus = new Armure ( 'Habits De Tissus', '-aucune description-', 1 );
                    $_armure = new Armure ( 'Armure De Lumière', '-aucune description-', 20 );
                    
                    $_sacADos = new Contenant ( 'Sac A Dos', '-aucune description-', 8 );
                    $_personnage -> sacADos = $_sacADos;
                    $_personnage -> sacADos -> porté = true;    // Le personnage porte le sac à dos.
                    
                    $_poches = new Contenant ( 'Poches', '-aucune description', 4 );
                    $_personnage -> poches = $_poches;
                                        
                        $_personnage -> ajouterArme ( $_épée );
                        
                        $_personnage -> ajouterArmure ( $_armure );
                        
                        $_personnage -> getPersonnage();
                        
                    echo '<hr />';
                        
                    $_torche = new Objet ( 'Torche Pourrie', '-aucune description-' );
                    $_corde = new Objet ( 'Corde de 5m', '-aucune description-' );
                    $_briquet = new Objet ( 'Briquet D\'Amadou', '-aucune description-' );
                                            
                        $_personnage -> sacADos -> insérerObjet ( $_torche );
                        $_personnage -> sacADos -> insérerObjet ( $_corde );
                        
                        $_personnage -> poches -> insérerObjet ( $_briquet );
                        
                    
                        $_personnage -> PO += 975;
                    
                        $_personnage -> getPersonnage();
                                            
                    echo '<hr />';
    			?>
        	</font>
    	</div>
    </body>
</html>
