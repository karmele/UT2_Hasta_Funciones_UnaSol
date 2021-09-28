<?php
include "cabecera.php";
echo "<h4>¿Cuántos libros puedes comprar con 250 euros?</h4>";
$i = 0;
$suma = 0;
while ($suma < 250) {
    $suma += 16;
    ++$i;
    echo $i . " : " . $suma . "<br/>\n";
}
echo "Por 250 euros se pueden comprar " . ($i - 1) . " libros de 16 euros";
include "pie.php";
