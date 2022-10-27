<php

class Prodotto {

    public $nomeProdotto;
    public $marca;
    public $prezzo = 0;
    public $descrizioneProdotto = "";

    function __construct( $_nomeProdotto, $_marca, $_prezzo ) {
        $this->nomeProdotto = $_nomeProdotto;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
    }
        

}

?>