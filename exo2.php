<?php
$numbers = [5, 2, 8, 1, 9, 3]; // Vos nombres (vous pouvez les modifier selon vos besoins)

$min = $numbers[0]; // Initialisation du minimum avec le premier nombre
$max = $numbers[0]; // Initialisation du maximum avec le premier nombre

foreach ($numbers as $number) {
    if ($number < $min) {
        $min = $number;
    }
    if ($number > $max) {
        $max = $number;
    }
}

echo "Le minimum est : $min <br>";
echo "Le maximum est : $max";
?>
