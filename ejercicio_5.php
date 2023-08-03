<?php

$numero = intval(readline("Ingrese un numero del 1 al 7 para mostrar un dia de la semana. "));

$Dia1=1;
$Dia2=2;
$Dia3=3;
$Dia4=4;
$Dia5=5;
$Dia6=6;
$Dia7=7;

$action = match($numero){
    $Dia1 => "Lunes",
    $Dia2 => "Martes",
    $Dia3 => "Miercoles",
    $Dia4 => "Jueves",
    $Dia5 => "Viernes",
    $Dia6 => "Sábado",
    $Dia7 => "Domingo",
    default => 'Error!!! El numero ingresado no corresponde con la petición. '
};

echo $action;

?>