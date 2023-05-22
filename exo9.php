<?php
function sommeChiffres($n) {
    $somme = 0;
    while ($n > 0) {
        $somme += $n % 10; // Ajoute le dernier chiffre à la somme
        $n = (int)($n / 10); // Supprime le dernier chiffre
    }
    return $somme;
}

$nombre = 12345;
$sommeChiffres = sommeChiffres($nombre);
echo "La somme des chiffres de $nombre est : $sommeChiffres";
?>
