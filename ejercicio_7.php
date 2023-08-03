<?php


$numero = intval(readline("Ingrese su calificación: "));

$resultado = match (true) {
    ($numero < 25) => "Tu nota es muy baja. ",
    ($numero > 25 && $numero <= 35) => "Tu nota es aun demasiado baja. ",
    ($numero > 35 && $numero <= 45) => "Tu nota es baja. ",
    ($numero > 45 && $numero <= 55) => "Tu nota es basica. ",
    ($numero > 55 && $numero <= 65) => "Tu nota es bastante basica. ",
    ($numero > 55 && $numero <= 65) => "Tu nota es buena. ",
    ($numero > 55 && $numero <= 65) => "Tu nota es es bastante buena. ",
    ($numero > 65 && $numero <= 75) => "Tu nota es muy buena. ",
    ($numero > 75 && $numero <= 85) => "Tu nota es muy muy buena. ",
    ($numero > 85 && $numero <= 90) => "Bien hecho. ",
    ($numero > 90 && $numero <= 100) => "Excelente!!!",
    default => "La calificación que ingresate no coicide con la nota limite validada. ",
};

echo $resultado;

?>