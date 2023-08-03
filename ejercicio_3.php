<?php

$letraIngresada = readline("Ingrese uno de los sigui. letras: L, A, H ");

$action = match($letraIngresada){
    "L" => "La letra L es una consonante. ",
    "A" => "La letra A es una vocal. ",
    "H" => "La letra H es una semiconsonante. "
};

    echo $action;

?>