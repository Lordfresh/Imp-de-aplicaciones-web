<?php

$texto = "PHP es un gran lenguaje porque PHP es rapido y PHP es el lenguaje mas usado en el mundo PHP";

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
echo "Frase en minúsculas: $textoMinusculas <br><br>";
echo "La frase tiene un total de $conteoPalabra palabras. <br><br>";

echo "Frase: $texto <br><br>";


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
echo "<br>La palabra más repetida es: <strong>$masRepetida</strong> con $vecesRepetida apariciones.";
