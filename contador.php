<?php
// Nombre del archivo donde se almacenará el conteo de visitas
$archivo = 'contador.txt';

// Verifica si el archivo ya existe
if (!file_exists($archivo)) {
    $conteo = 0;  // Si no existe, empieza en 0
} else {
    $conteo = file_get_contents($archivo); // Lee el número de visitas del archivo
}

$conteo++; // Incrementa el contador en 1

// Guarda el nuevo conteo en el archivo
file_put_contents($archivo, $conteo);

// Muestra el número de visitas
echo "Número de visitas: " . $conteo;
?>