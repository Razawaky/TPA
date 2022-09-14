<?php

$val1 = $_POST['val1'];
$val2 = $_POST['val2'];

if ($val1 > $val2) {
    echo $val1 ." É maior que" .$val2;
} else {
    echo $val1 ." É menor que" .$val2;
}

?>