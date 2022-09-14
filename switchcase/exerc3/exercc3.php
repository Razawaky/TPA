<?php

$mat = $_POST['mat'];
$name = $_POST['nome'];
$curso = $_POST['curso'];

switch($curso) {

    case 1:
        echo "Matricula " .$mat ." $name" ." cursando Matemática";
    break;
    case 2:
        echo "Matricula " .$mat ." $name" ." cursando Linguagem de Programação";
    break;
    case 3:
        echo "Matricula " .$mat ." $name" ." cursando Português";
    break;
    case 4:
        echo "Matricula " .$mat ." $name" ." cursando Inglês";
    break;

    default:
        echo "User ou curso inválidos";
    break;
}

?>