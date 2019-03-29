<?php   header ( 'Content-Type: text/html;charset=UTF-8' );


/**
 * CLASSE Armure
 * 
 * @author Maître Will
 */
class Armure extends Objet {
    
    public $défense;
    
    
        /**
         * CONSTRUCTEUR
         * 
         * @param string $_nom
         * @param string $_description
         * @param int $_défense
         */
        public function __construct ( string $_nom, string $_description, int $_défense ) {
            
            parent :: __construct ( $_nom, $_description );
            
            $this -> défense = $_défense;
            
        }
    
    
    /**
     * 
     */
    public function getArme() {
        echo '<pre>'; print_r ( $this ); echo '</pre>';
    }
    
    
    
    
}?>
