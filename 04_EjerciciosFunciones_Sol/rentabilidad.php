<?php

//      function calcularCantidad($cantidad,$years)
//      {
//          $total = $cantidad+(($cantidad*(INTERES/100))*$years);
//          return $total;
//      }
function calcularRentabilidad($cantidadVendida, $cantidadAcciones, $dividendos)
{
    $total = ($cantidadVendida - $cantidadAcciones + $dividendos) / $cantidadAcciones * 100;
    return $total;
}

$cantidad =  10000;//rand(12000,20000);
$ventas = 12000;
$dividendos = 500;
$resultado = "";
$resultado = "Cantidad inicial: " . $cantidad .
        "<br/>\nCantidad por la venta : $ventas" .
        "<br/>\n dividendos: $dividendos" .
        "<br/>\nLa rentabilidad es de : " . number_format(calcularRentabilidad($ventas, $cantidad, $dividendos), 2) . "%";
;
include "includes/vista_resultado.php";
?>
