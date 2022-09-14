<?php

$n = $_POST['num'];
switch($n) {
    case 0:
        echo "Vc perdeu a vez";
    break;
    case 1: 
        echo "avance 1 casa";
    break;
    case 2:
        echo "vc ganhou um bonus! avance 3 casas";
    break;
    default:
        echo "Jogue novamente";
    break;
}
?>