<?php
$A = 23; // Dividende
$B = 4;  // Diviseur

$quotient = 0;
while ($A >= $B) {
    $A -= $B;
    $quotient++;
}

$reste = $A;

echo "Quotient : $quotient <br>";
echo "Reste : $reste";
?>
