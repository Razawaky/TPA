<?php

$texto = $_POST['texto'];

switch($texto) {
    case "a": 
        echo "Vogal";
    break;
    case "e":
        echo "Vogal";
    break;
    case "i":
        echo "Vogal";
    break;
    case "o": 
        echo "Vogal";
    break;
    case "u":
        echo "Vogal";
    break;

    default:
        echo "Consoante";
    break;
}

?>