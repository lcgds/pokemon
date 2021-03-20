<?php

interface iPokémon
{
    public function falar(): void;
    public function receberDano($tipo, $pontos): void;
}

class TipoDePokémon 
{
    protected $tipo = '';
    protected $fraqueza = '';
}

class Pokémon extends TipoDePokémon implements iPokémon {
    //protected $tipo = '';
    //protected $fraqueza = '';
    public $nome = '';
    private $fala = '';
    
    public $pontos_de_vida = 100;
    public $velocidade;

    public $ataque1 = '';
    public $dano1;

    public $ataque2 = '';
    public $dano2;

    public function falar(): void {
        //
    }

    public function receberDano($tipo, $pontos): void {
        //
    }
}