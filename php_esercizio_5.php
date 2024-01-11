<?php

/*CREARE UN ARRAY CON CHIAVE *NOMECITTA' => *TEMPERATURA E STAMPARE DOVE FA FREDDO, CALDO O MOLTO CALDO
 A SECONDA DEL VALORE DELLA TEMPERATURA    */

$temperature = [
    "Venezia" => 16,
    "Bari" => 32,
    "Roma" => 28,
    "Napoli" => 30,
    "Milano" => 13,
    "Palermo" => 14,
    "Torino" => 24,
    "Lecce" => 27,
    "Genova" => 30,
    "Catania" => 11,
    "Cosenza" => 9,
];

foreach ($temperature as $key => $value) {
    if($value<15) {
        echo "A $key fa freddo con $value gradi.\n";
    }elseif($value>=15 && $value <25) {
        echo "A $key fa caldo con $value gradi.\n";
    }elseif($value <25){
        echo "Attenzione!! A $key fa MOLTO caldo con $value gradi.\n";
    }
    
}