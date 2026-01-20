<?php

$estudiantes = [
"Nahomi" => [10,10,10],
"Mathias" => [9,7,10],
"Camila" => [5,3,2],
"Valentina" => [10,9,9],

];

function calcularPromedio($notas) {
    $suma = array_sum($notas);
    $cantidad = count($notas);
    return $suma / $cantidad;
}

// Variables para las estadísticas finales
$aprobados = 0;
$suspendidos = 0;
$mejorNota = -1;
$mejorEstudiante = "";

foreach ( $estudiantes as $nombre => $notas) {

    $promedio = calcularPromedio($notas);
    
    if ($promedio >= 6){
        $estado = "aprobado";
        $aprobados++;
    }
    else{
        $estado = "suspendido";
        $suspendidos++;
    }

    // Logica para encontrar mejor promedio 

    if ($promedio > $mejorNota){
        $mejorNota = $promedio; 
        $mejorEstudiante = $nombre;
    }

echo "---<br>";
echo "Estudiante ${nombre} tiene un promedio " .number_format($promedio, 2) . " y esta ${estado} <br>";
}

echo "---<br>";
echo "<h3>Resumen Final:</h3>";
echo "Total de aprobados: $aprobados <br>";
echo "Total de suspendidos: $suspendidos <br>";
echo "El estudiante con el promedio más alto es <strong>$mejorEstudiante</strong> con un " . number_format($mejorNota, 2);

