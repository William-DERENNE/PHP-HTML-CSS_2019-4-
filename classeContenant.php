<?php   header ( 'Content-Type: text/html;charset=UTF-8' );


/**
 * CLASSE Contenant
 * 
 * @author Maître Will
 */
class Contenant extends Objet {
    
    public $nbEmplacements;
    public $contenu;
    public $nbObjetsContenus;
    public $plein = false;
    public $vide = true;
    public $porté = true;
    
        
        /**
         * CONSTRUCTEUR
         * 
         * @param string $_nom: Le nom humainement lisible.
         * @param string $_description: ...
         * @param int $_nbEmplacements: Nombre maximal d'emplacements disponibles dans le 'Contenant'.
         */
        public function __construct ( string $_nom, string $_description, int $_nbEmplacements ) {
            
            parent :: __construct ( $_nom, $_description );
            $this -> nbEmplacements = $_nbEmplacements;
            $this -> nbObjetsContenus = 0;
            
        }
    
    
    /**
     * Permet de rajouter un 'Objet' dans le 'Contenant'.
     * 
     * @param Objet $_objet: Le fameux 'Objet' à rajouter.
     */
    public function insérerObjet ( Objet $_objet ) {
        if ( $this -> plein ) {
            echo '<br />!!! CONTENANT PLEIN !!!<br />';
        } else {
            $this -> contenu[$this -> nbObjetsContenus] = $_objet;
            $this -> nbObjetsContenus ++;
            if ( $this -> nbObjetsContenus >= 7 ) {
                $this -> plein = true;
            }
            if ( $this -> nbObjetsContenus > 0 ) {
                $this -> vide = false;
            }
        }
    }    
    
    public function getContenant() {
        echo '<pre>'; print_r ( $this ); echo '</pre>';
    }
}?>
