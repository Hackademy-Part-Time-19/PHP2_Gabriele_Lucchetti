<?php
/* SCRIVIAMO UN PROGRAMMA CHE STAMPI IN CONSOLE TUTTI I NUMERI DA 1 A 100 SE DIVISIBILE PER 3 STAMPA PHP, SE DIVISIBILE PER 5 STAMPA JAVASCRIPT E 
SE DIVISIBILE PER ENTRAMBI STAMPA HACKADEMY */
for ($i = 0; $i <= 100; $i++) {

    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "HACKADEMY\n";
    } elseif ($i % 5 === 0) {
        echo "JAVASCRIPT\n";
    } elseif ($i % 3 === 0 ) {
        echo "PHP\n";
    } else {
        echo $i . "\n";
    }
}
