<?php

$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

$textoMinusculas = strtolower($texto);
$totalPalabras = explode(" ", $textoMinusculas);
//filtro palabras menor o igual a 3 letras
$palabrasFiltro = [];
foreach ($totalPalabras as $palabra){
    if (strlen($palabra) >= 3) {
        $palabrasFiltro[] = $palabra;
    }
}

$conteoPalabra = count($palabrasFiltro);
$cuantasVecesPalabra = array_count_values($palabrasFiltro);


echo "<h2> Analizador de texto </h2>";
echo "Frase: $texto <br><br>";
echo "Total de palabras $conteoPalabra <br><br>";
echo "<h2> Palabras más repetidas </h2>";
foreach ($cuantasVecesPalabra as $palabra => $veces) {
    if ($veces > 1) {
        echo "La palabra $palabra se repite $veces veces <br>";
     
    }
}

// Mostras palabra mas repetida
arsort($cuantasVecesPalabra);
$masRepetida = array_key_first($cuantasVecesPalabra);
$vecesRepetida = $cuantasVecesPalabra[$masRepetida];
