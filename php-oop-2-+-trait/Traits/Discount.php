<?php
trait Discount {
    protected $discount;

    /**
     * questo metodo imposta lo sconto al 20% del prezzo
     */
    public function setDiscount() {
        // calcolare lo sconto  20% del prezzo corrente
        $this->discount = $this->price * 0.20;
    }

    /**
     * questo metodo applica lo sconto al prezzo
     */
    public function applyDiscount() {
        // sottrare lo sconto dal prezzo originale
        $this->price -= $this->discount;
    }
}
?>
