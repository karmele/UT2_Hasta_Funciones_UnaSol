<?php

include "cabecera.php";
echo "<h3>Generando botones</h3>\n";
echo "<form id='form' action='' method='get' >";
echo "<div>";

for ($i = 1; $i <= 10; $i++) {
    echo "<label> Botón " . $i . "</label>\n";
    echo "<input type='submit' name='btnEditar" . $i . "'  value ='Editar'  />\n";
    echo "<input type='submit' name='btnBorrar" . $i . "'  value ='Borrar'  /><br/>\n";
}

echo "</div></form>";
include "pie.php";
