<?php

$numeroEntero = intval(readline("Ingrese uno de los sigui. numeros: 1, 2, 3 "));

$numero1 = 1;
$numero2 = 2;
$numero3 = 3;

$action = match ($numeroEntero){
    $numero1 => "Ferrari F12",
    $numero2 => "Pagani Huyaira",
    $numero3 => "Nissan Skyline GTR R34",
    default => "Numero no valido. Por favor, digite un numero del 1 al 3.
    Sabes cuanto es 12+3? Exacto!!! Aqui tienes pa' que me la beses."
};

echo $action;

?>