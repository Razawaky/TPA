<?php

$mess = $_POST['mes'];

switch($mess) {
    case 1: 
        echo "Mês atual: Janeiro";
    break;
    case 2:
        echo "Mês atual: Fevereiro";
    break;
    case 3:
        echo "Mês atual: Março";
    break;
    case 4: 
        echo "Mês atual: Abril";
    break;
    case 5:
        echo "Mês atual: Maio";
    break;
    case 6:
        echo "Mês atual: Junho";
    break;
    case 7:
        echo "Mês atual: Julho";
    break;
    case 8:
        echo "Mês atual: Agosto";
    break;
    case 9:
        echo "Mês atual: Setembro";
    break;
    case 10: 
        echo "Mês atual: Outubro";
    break;
    case 11: 
        echo "Mês atual: Novembro";
    break;
    case 12:
        echo "Mês atual: Dezembro";
    break;

    default:
        echo "Escolha um mês de 1 a 12.";
    break;
}

?>