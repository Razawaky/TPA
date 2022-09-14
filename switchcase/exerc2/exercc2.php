<?php

$ano = $_POST['ano'];

switch($ano) {
    case 1: 
        echo "Férias";
    break;
    case 2:
        echo "1º semestre letivo";
    break;
    case 3:
        echo "1º semestre letivo";
    break;
    case 4: 
        echo "1º semestre letivo";
    break;
    case 5:
        echo "1º semestre letivo";
    break;
    case 6:
        echo "1º semestre letivo";
    break;
    case 7:
        echo "Recesso";
    break;
    case 8:
        echo "2º semestre letivo";
    break;
    case 9:
        echo "2º semestre letivo";
    break;
    case 10: 
        echo "2º semestre letivo";
    break;
    case 11: 
        echo "2º semestre letivo";
    break;
    case 12:
        echo "Férias";
    break;

    default:
        echo "Escolha um mês de 1 a 12.";
    break;
}

?>



