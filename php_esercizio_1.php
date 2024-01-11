<?php


$users = [
    ['name' => 'Gabriele', 'surname' => 'Lucchetti', 'gender' => 'M'],
    ['name' => 'Stefania', 'surname' => 'Ricci', 'gender' => 'F'],
    ['name' => 'Fabbrica', 'surname' => 'Scarpe', 'gender' => 'ND']
];

foreach ($users as $user) {

    if ($user['gender'] === 'M') {
        echo 'Buongiorno SIG.' . " " . $user['name'] . " " . $user['surname'] . "\n";
    } elseif ($user['gender'] === 'F') {
        echo 'Buongiorno SIG.RA' . " " . $user['name'] . " " . $user['surname'] . "\n";
    } else {
        echo 'NON FACCIO PARTE DI NESSUN GENERE E SONO ' . $user['name'] . " " . $user['surname'] . "\n";
    }
}
;
