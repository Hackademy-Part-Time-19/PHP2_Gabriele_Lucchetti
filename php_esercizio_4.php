<?php
/* CREARE UNA VARIABILE TEMPERATURA E STAMPARE "FA FREDDO" SE INFERIORE A 15, 
"FA CALDO" SE MAGGIORE UGUALE A 15 E "FA MOLTO CALDO" SE MAGGIORE DI 25 */

$temperatura=30;

if($temperatura<15){
    echo "FA FREDDO";
}elseif($temperatura>= 15 && $temperatura< 25){
    echo "FA CALDO";
}elseif($temperatura>25){
    echo "FA MOLTO CALDO";
}