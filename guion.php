<?php
$cadena_de_texto = 'Esta es frase donde - haremos la búsqueda';
$cadena_buscada   = '-';
$todosloscaracteres = count($cadena_de_texto);
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);

//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    echo "NO se ha encontrado la palabra deseada!!!!";
    } else {
            echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia."<br>";
            echo "El Array tiene un valor de ".$todosloscaracteres;
            }

$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada, 20);
if ($posicion_coincidencia === false) {
    echo "NO se ha encontrado la palabra deseada!!!!";
    } else {
            echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia."<br>";
            echo "El Array tiene un valor de ".$todosloscaracteres;
            }

?>
