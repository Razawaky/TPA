<?php

$usu = $_POST['usuario'];
$sen = $_POST['senha'];

if ($usu == "Etec" && $sen == "Etec062") {
    echo "Bem-Vindo" . "<br>" . $usu;
}

else if ($usu !==="Etec" && $sen !=== "Etec062") {
    echo "Acesso negado";
}



?>