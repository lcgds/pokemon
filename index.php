<?php

require('classes/Pokémon.php');

//Pokémons do Tipo Planta
$Bulbasaur = new Pokémon ('Planta', 'Bulbasaur', 'Folha Navalha', 'Chicote de Vinha');
$Ivysaur = new Pokémon ('Planta', 'Ivysaur', 'Folha Navalha', 'Chicote Tóxico');
$Venusaur = new Pokémon ('Planta', 'Venusaur', 'Bomba de Pólen', 'Tufão Solar');

//var_dump($Bulbasaur);

//Pokémons do Tipo Fogo
$Charmander = new Pokémon ('Fogo', 'Charmander', 'Presas de Fogo', 'Cauda de Chamas');
$Charmeleon = new Pokémon ('Fogo', 'Charmeleon', 'Presas de Fogo', 'Lança Chamas');
$Charizard = new Pokémon ('Fogo', 'Charizard', 'Golpe de Garra', 'Chama Furacão');

//var_dump($Charizard);

//Pokémon do Tipo Água
$Squirtle = new Pokémon ('Água', 'Squirtle', 'Bolha', 'Chuva Borrifante');
$Wartortle = new Pokémon ('Água', 'Wartortle', 'Água Corte', 'Cachoeira');
$Blastoise = new Pokémon ('Água', 'Blastoise', 'Tormenta Poderosa', 'Borrifada de Foguete');

//var_dump($Squirtle);

$Bulbasaur->falar();
$Charizard->atacar(2);
$Wartortle->receberDano('Planta', 25);