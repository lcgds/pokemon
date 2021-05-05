<?php

interface iPokémon
{
    public function falar(): void;
    public function atacar($ataque): void;
    public function receberDano($tipo, $pontos): void;
}
