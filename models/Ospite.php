<?php

class Ospite {

    public $nome;
    public $cognome;
    public $email;
    public $dettagliPagamento;
    public $indirizzoConsegna;
    public $carrello = [];

    public function aggiungiProdotto($prodotto) {
        $this->carrello[] = $prodotto;
    }

    public function completaOrdine() {
        $daPagare = 0;
        foreach($this->prodotti as $prodotto) {
            $daPagare += $prodotto->prezzo;
        }
        return $daPagare;
    }

}


?>