<?php

$opcion = readline("Ingrese una opción del 1 al 5: opcion 1 - Suma, opcion 2 - Resta, opcion 3 - Multiplicación, opcion 4 - División, opcion 5 - Módulo. ");
$num1 = readline("Ingrese el primer número: ");
$num2 = readline("Ingrese el segundo número: ");

match ($opcion) {
    1 => {
        $resultado = $num1 + $num2;
        echo "La suma de los números es: " . $resultado;
    },
    2 => {
        $resultado = $num1 - $num2;
        echo "La resta de los números es: " . $resultado;
    },
    3 => {
        $resultado = $num1 * $num2;
        echo "El producto de los números es: " . $resultado;
    },
    4 => {
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
            echo "La división de los números es: " . $resultado;
        } else {
            echo "Error: No se puede dividir por cero.";
        }
    },
    5 => {
        $resultado = $num1 % $num2;
        echo "El módulo de los números es: " . $resultado;
    },
    default => {
        echo "Opción inválida. Elije 1 de las 5 opciones. ";
    }
}

?>