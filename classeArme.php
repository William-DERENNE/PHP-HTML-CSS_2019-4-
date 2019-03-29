<?php   header ( 'Content-Type: text/html;charset=UTF-8' );


/**
 * CLASSE Arme
 * 
 * @author Maître Will
 */
class Arme extends Objet {
    
    public $attaque;
    
    
        /**
         * CONSTRUCTEUR
         * 
         * @param string $_nom
         * @param string $_description
         * @param int $_attaque
         */
        public function __construct ( string $_nom, string $_description, int $_attaque ) {
            
            parent :: __construct ( $_nom, $_description );
            
            $this -> attaque = $_attaque;
            
        }
    
    
    /**
     * 
     */
    public function getArme() {
        echo '<pre>'; print_r ( $this ); echo '</pre>';
    }
    
    
    
    
}?>
