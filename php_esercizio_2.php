<?php
//<- CALCOLIAMO LA MEDIA DATO IL SEGUENTE ARRAY
$numeri_pari = [1, 2, 3, 4, 5, 6, 7, 8, 9, 234, 564, 324, 677, 878, 56, 59, 521,];

$media_numeri_pari=0;
$counter=0;
//<- CICLO FOR CON FUNZIONE COUNT PER SAPERE L'INDICE MASSIMO DELL'ARRAY
for ($i = 0; $i < count($numeri_pari); $i++) {
    if ($numeri_pari[$i] % 2 === 0) {
        //<- AGGIORNIAMO LA VARIABILE $MEDIA
        $media_numeri_pari= $media_numeri_pari+$numeri_pari[$i];
        $counter++;
        
    }
    
};
$media_numeri_pari= $media_numeri_pari/$counter;


echo "La media dei numeri nell' array e' di:" . $media_numeri_pari . "\n e i numeri contenuti divisibili per 2 in totale erano:" . $counter;