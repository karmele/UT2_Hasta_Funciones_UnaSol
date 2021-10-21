<?php

//      function calcularCantidad($cantidad,$years)
//      {
//          $total = $cantidad+(($cantidad*(INTERES/100))*$years);
//          return $total;
//      }
function pruebaPrede($a, $b = 6, $c = 3)
{
    $total = $a + $b + $c;
    return $total;
}

$a = 12;

pruebaPrede($a, 100);

$resultado = "";
$resultado .= "La suma con el parámetro \$a= $a es " . pruebaPrede($a) . "<br />"
        . "La suma con \$a= $a y 100 es " . pruebaPrede($a, 100) . "<br />"
        . "La suma con \$a= $a 100 y 200 es " . pruebaPrede($a, 100, 200);
include "includes/vista_resultado.php";
?>
