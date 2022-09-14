<?php

$num = $_POST ['numero'];

if ($num % 2 == 0) {
    echo $num ." É par";
} else {
    echo $num . " É impar";
}

?>