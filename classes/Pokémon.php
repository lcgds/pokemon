<?php

require (__DIR__ . '/TipoDePokémon.php');
require (__DIR__ . '/../interfaces/iPokémon.php');

class Pokémon extends TipoDePokémon implements iPokémon {
    
    //protected $tipo;
    //protected $fraqueza;
    
    private $som;
    
    public $pontos_de_vida = 100;

    private $ataque1;
    private $ataque2;

    public function __construct($tipo, $som, $ataque1, $ataque2) {
        $this->tipo = $tipo;
        $this->setFraqueza($tipo);
        $this->som = $som;
        $this->ataque1 = $ataque1;
        $this->ataque2 = $ataque2;
    }

    public function falar(): void {
        echo ("\n $this->som \n");
    }

    public function receberDano($tipo, $pontos): void {
        echo ("\n Vida = $this->pontos_de_vida (antes do ataque) \n");

        if ($this->getFraqueza($tipo) === true) {
            echo ("\n Dano crítico! \n");
            $this->pontos_de_vida = $this->pontos_de_vida - ($pontos * 1.5); 
        } else {
            echo ("\n Dano normal. \n");
            $this->pontos_de_vida = $this->pontos_de_vida - $pontos;
        }

        echo ("\n Vida = $this->pontos_de_vida (depois do ataque) \n");
    }

    public function atacar($ataque): void {
        switch ($ataque) {
            case 1:
                echo ("\n $this->ataque1 \n");
                break;
            case 2:
                echo ("\n $this->ataque2 \n");
                break;
        }
    }
}