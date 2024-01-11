<?php
/*CREARE UN ARRAY CONTENENTE 4 ARRAY CONTENENTI 5 NUMERI RANDOMICI     */
$numeriRandomici=[];

for ($i = 0; $i < 4; $i++) {
    $array= [];
    for ($j = 0; $j < 5; $j++) {
        $array[] = rand(1,100);
        
    }
    $numeriRandomici[]= $array;
};

var_dump($numeriRandomici);