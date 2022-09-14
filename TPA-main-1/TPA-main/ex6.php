<?php

$peso = 54;
$altura = 1.69;
$altura² = $altura * $altura;
$imc = $peso / $altura²;

if($imc <= 18.5) {
    echo "Abaixo do Peso";
} else if($imc >= 18.6 && $imc <= 24.9) {
    echo " Esta no peso ideal";
} else if($imc >= 25 && $imc <= 29.9) {
    echo "Levemente acima do peso";
} else if($imc >= 30 && $imc <= 34.9) {
    echo "Obesidade Grau 1";
} else if($imc >= 35 && $imc <=39.9) {
    echo "Obesidade Grau 2 (severa)";
} else if($imc >= 40) {
    echo "Obesidade Grau 3 (mórbida)";
}

?>