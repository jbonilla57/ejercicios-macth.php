<?php

/* $dia = "34";
$mes = "Marzo";
$año = "1972"; */

$dia = intval(readline("Ingrese una fecha "));
$mes = readline("Ingrese uno de los tres meses: Enero, Febrero, Marzo. ");
$año = readline("Ingrese un año ");

$action1 = match($dia){
    $dia => $dia
};
$action2 = match($mes){
    'Enero' => 'Enero. OH MAN!!! ',
    'Febrero' => 'Febrero. OH SHIT!! ',
    'Marzo' => 'Marzo. <br> HOLY SHIT!!! ',
    default => 'Error. '
};

$action3 = match($año){
    $año => $año
};

echo $action1." - Dia  ";
echo $action2."- Mes  ";
echo $action3." - Año  ";
?>