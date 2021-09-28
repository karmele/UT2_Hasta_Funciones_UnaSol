<?php
include "cabecera.php";

echo "<h4>Tabla de una fila</h4>";

echo "<table border='1'><tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<td>" . $i . "</td>";
}
echo "</tr></table>";

echo "<h4>Tabla de una columna</h4>";
echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {

    echo "<tr><td>" . $i . "</td></tr>";
}
echo "</table>";

include "pie.php";
