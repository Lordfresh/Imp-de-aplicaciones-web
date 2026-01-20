<?php

$carrito = [
["producto" => "Portatil", "precio" => 1200, "cantidad" => 1],
["producto" => "Raton", "precio" => 25, "cantidad" => 1],
["producto" => "Teclado", "precio" => 45, "cantidad" => 1],

];

function calcularTotal($carrito){
    $suma = 0;
    foreach ($carrito as $item ){
        $subtotal = $item ["precio"] * $item["cantidad"];
        $suma = $suma + $subtotal;
    }
    return $suma;
}


$totalSinDescuento = calcularTotal($carrito);
$descuento = 0; 
$porcentajeDescuento = 0;

if ( $totalSinDescuento > 1000) {
    $descuento = $totalSinDescuento * 0.10;
    $porcentajeDescuento = "10%"; 
} elseif ($totalSinDescuento > 500) {
    $descuento = $totalSinDescuento * 0.05;
    $porcentajeDescuento = "5%"; 
}

$totalFinal = $totalSinDescuento - $descuento;

echo "<h3>Resumen de la compra:</h3>";
echo "Total sin descuento: " . $totalSinDescuento . " €<br>";
echo "Descuento aplicado ($porcentajeDescuento): -" . $descuento . " €<br>";
echo "TOTAL FINAL: " . $totalFinal . " €";

?>





