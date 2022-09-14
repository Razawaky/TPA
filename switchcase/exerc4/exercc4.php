<?php

$cond = $_POST['cond'];

switch($cond) {
    case 1: 
        echo "Inclusão";
    break;
    case 2:
        echo "Exclusão";
    break;
    case 3:
        echo "Alteração";
    break;
    case 4: 
        echo "Consulta";
    break;
    case 5:
        echo "Relatório";
    break;

    default:
        echo "Opção inválida";
    break;
}

?>