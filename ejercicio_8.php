<?php

$palabra = readline("Digite una de las dos palabras: 'Hamburguesa' o 'Auto'. ");
$cantidad = strlen($palabra);

 $resultado = match(true) {
     $cantidad > 10 => "La palabra es larga",
     default => "La palabra es corta",
 };
 
 echo $resultado;

?> 