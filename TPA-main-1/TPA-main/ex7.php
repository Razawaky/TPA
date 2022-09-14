<?php

$horastr = 6;
$salariohr = 30;
$numdep = 1;
$inss = 0;
$impostorenda = 0;

$salariob = $horastr * $salariohr + (50 * $numdep);

if($salariob <= 1212){
    echo $inss = $salariob * 0.075;
}else if($salariob <= 2427.35){
    echo $inss = $salariob * 0.09;
}else if($salariob <= 3641){
    echo $inss = $salariob * 0.12;
}else if($salariob <= 7087.22){
    echo $inss = $salariob * 0.14;
}

if($salariob <= 1903.98){
    echo $impostorenda = $salariob;
}else if($salariob >= 1903.99 && $salariob <= 2826.65){
    echo $impostorenda = $salariob * 0.075;
}else if ($salariob >= 2826.66 && $salariob <= 3751.05){
    echo $impostorenda = $salariob * 0.15;
}else if ($salariob >= 3751.06 && $salariob <= 4664.68){
    echo $impostorenda = $salariob * 0.225;
}else if ($salariob > 4664.68){
    echo $impostorenda = $salariob * 0.275;
}

?>