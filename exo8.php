<?php
$X = 17; // Nombre entier à vérifier

$isPrime = true;

if ($X <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($X); $i++) {
        if ($X % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$X est un nombre premier";
} else {
    echo "$X n'est pas un nombre premier";
}
?>
