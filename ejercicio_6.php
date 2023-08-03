<?php


$numero = intval(readline("Ingrese un numero del 1 al 12 para mostra un mes del año. "));

$Dia1=1;
$Dia2=2;
$Dia3=3;
$Dia4=4;
$Dia5=5;
$Dia6=6;
$Dia7=7;
$Dia8=8;
$Dia9=9;
$Dia10=10;
$Dia11=11;
$Dia12=12;

$action = match($numero){
    $Dia1 => "Enero",
    $Dia2 => "Febrero",
    $Dia3 => "Marzo",
    $Dia4 => "Abril",
    $Dia5 => "Mayo",
    $Dia6 => "Junio",
    $Dia7 => "Julio",
    $Dia8 => "Agosto",
    $Dia9 => "Septiembre",
    $Dia10 => "Octubre",
    $Dia11 => "Noviembre",
    $Dia12 => "Diciembre",
    default => 'Error!!! El numero ingresado no corresponde con la petición. '
};

echo $action;

?>