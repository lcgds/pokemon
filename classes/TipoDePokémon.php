<?php

class TipoDePokémon 
{
    protected $tipo;
    protected $fraqueza;

    function setFraqueza($tipo): void {
        switch($this->tipo) {
            case 'Planta':
                $this->fraqueza = 'Fogo';
                break;
            case 'Fogo':
                $this->fraqueza = 'Água';
                break;
            case 'Água':
                $this->fraqueza = 'Planta';
                break;
        }
    }

    function getFraqueza($dano): bool {
        if ($dano === $this->fraqueza) {
            return true;
        } else {
            return false;
        }
    }
    
}
