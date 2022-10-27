<?php
require_once __DIR__ . "Ospite.php";

class Utente extends Ospite {

    public $username;
    private $password;
    
    public function completaOrdine() {
        $scontoUtenteRegistrato = (parent::completaOrdine()) * (80/100);
        return $scontoUtenteRegistrato;
    }

}


?>