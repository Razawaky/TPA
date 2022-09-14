<?php

$i = $_POST['idade'];

if ($i >= 18) {
    echo "Acesso liberado";
}

else {
    echo "Acesso negado" ."<br>" ."Menor de idade";
}