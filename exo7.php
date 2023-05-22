<?php
$X = 24; // Entier pour lequel vous souhaitez trouver les diviseurs

echo "Les diviseurs de $X sont : ";

for ($i = 1; $i <= $X; $i++) {
    if ($X % $i == 0) {
        echo $i . " ";
    }
}
?>
