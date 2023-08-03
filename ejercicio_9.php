<?php

$hora = intval(readline("Por favor, ingresa una hora en punto desde la 1 p.m. hasta las 12 p.m. "));
$mes = readline("Ingresa un mes del año. Recuerda ingresar el mes con la primera letra en mayúscula. ");

$horaigresanda1=1;
$horaigresanda2=2;
$horaigresanda3=3;
$horaigresanda4=4;
$horaigresanda5=5;
$horaigresanda6=6;
$horaigresanda7=7;
$horaigresanda8=8;
$horaigresanda9=9;
$horaigresanda10=10;
$horaigresanda11=11;
$horaigresanda12=12;

$mesIngresado1="Enero";
$mesIngresado2="Febrero";
$mesIngresado3="Marzo";
$mesIngresado4="Abril";
$mesIngresado5="Mayo";
$mesIngresado6="Junio";
$mesIngresado7="Julio";
$mesIngresado8="Agosto";
$mesIngresado9="Septiembre";
$mesIngresado10="Octubre";
$mesIngresado11="Noviembre";
$mesIngresado12="Diciembre";


$action1 = match($mes){
    $mesIngresado1=>"Enero. Primer mes del año. ",
    $mesIngresado2=>"Febrero. El colegio comienza. ",
    $mesIngresado3=>"Marzo. Wow!!! El clima parece cambiar. ",
    $mesIngresado4=>"Abril. Buen clima es el invierno. ",
    $mesIngresado5=>"Mayo. Mes de las madres. ",
    $mesIngresado6=>"Junio VACIONES!!!",
    $mesIngresado7=>"Julio. Mes de paseo y aventuras. ",
    $mesIngresado8=>"Agosto. El trabajo y el estudio continuan. ",
    $mesIngresado9=>"Septiembre. Sol naciente",
    $mesIngresado10=>"Octubre. OOOOOOLIMMMPICA ESTEREOOOOO!!!",
    $mesIngresado11=>"Noviembre. El trababo y el colegio ya casi terminan. ",
    $mesIngresado12=>"Diciembre. Navidad!!!",
    default => "Error. Por favor, ingresa un mes del año, y recuerda ingresar el mes con la primera letra en mayúscula. "
};

    echo $action1."<br>";

$action2 = match($hora){
    $horaigresanda1 => "Son alrededor de las 1 p.m. El sol esta un poco mas adelante de su posición Y. ",
    $horaigresanda2 => "Son alrededor de las 2 p.m. Parece ser un buen momento para aprovechar el ambiente. ",
    $horaigresanda3 => "Son alrededor de las 3 p.m. El sol ya no esta tan picante. Vamos a jugar futbol. ",
    $horaigresanda4 => "Son alrededor de las 4 p.m. El clima esta muy agradable. Porqué no tomar un buen cafe con pan?  ",
    $horaigresanda5 => "Son alrededor de las 5 p.m. El sol se esconde. Tal vez se cansó de su rotundo éxito en el universo. ",
    $horaigresanda6 => "Son alrededor de las 6 p.m. El dia y la noche se estan apareciendo. Parece que la hora de soñar con los ojos abiertos ha llegado. ",
    $horaigresanda7 => "Son alrededor de las 7 p.m. Ya es de noche. Hora de cenar. ",
    $horaigresanda8 => "Son alrededor de las 8 p.m. Que buena hora para hacer ejercicio. ",
    $horaigresanda9 => "Son alrededor de las 9 p.m. Aun es temprano. Hora de leer un poco. ",
    $horaigresanda10 => "Son alrededor de las 10 p.m. Aun hay tiempo. Puedo estudiar un poco. ",
    $horaigresanda11 => "Son alrededor de las 11 p.m. Es todo por ahora. Hora de dormir. ",
    $horaigresanda12 => "Son alrededor de las 12 p.m. Es mejor descanzar. El modo guerra nos espera. ",
    default => "Error. Por favor, ingresa una hora en punto desde la 1 p.m.  hasta las 6 p.m. "
};
echo $action2."<br>";


?>