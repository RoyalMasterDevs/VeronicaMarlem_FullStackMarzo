<?php
// Función para verificar si un número es entero
function esEntero($numero) {
    return is_int($numero);
}

// Función para identificar los números enteros en una secuencia
function identificarEnteros($secuencia) {
    $enteros = [];

    foreach ($secuencia as $numero) {
        if (esEntero($numero)) {
            $enteros[] = $numero;
        }
    }

    return $enteros;
}

// Ejemplo
$secuencia = array(1, 2, 3, 4, 5.5, 6, 7.2, 8, 9);
$numerosEnteros = identificarEnteros($secuencia);
echo "Números enteros encontrados: " . implode(", ", $numerosEnteros);
?>