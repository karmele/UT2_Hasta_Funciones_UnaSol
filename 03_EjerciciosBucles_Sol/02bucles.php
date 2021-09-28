<?php
include "cabecera.php";
define('TOTAL', 20);
$aprobados = 0;
echo "<h4>Simulando notas de una clase de ". TOTAL. " alumnos y comprobando aprobados</h4>";
for ($i = 1; $i <= TOTAL; $i++) {
    $nota = rand(1, 10);
    if ($nota > 5) {
        $aprobados++;
    }
}
echo"El total de aprobados es: " . $aprobados . "\n";
include "pie.php";
