<?php

$colorIngresado = readline("Ingrese uno de los sigui. colores: Rojo, Azul, Negro ");

$action = match ($colorIngresado){
    "Rojo" => "El color rojo representa el amor y la pasion. ",
    "Azul" => "El color azul muestra gratitud cuando miras el cielo despejado. ",
    "Negro" => "El color negro refleja elegancia, cortesia, frialdad y muerte. ",
    default => "El color que acaba de ingresar no es valido. Por favor, digite uno de los tres colores: rojo, azul y negro. "
};

echo $action;

?>