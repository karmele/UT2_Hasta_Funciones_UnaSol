ón<?php
    include "cabecera.php";
    echo "<h3>Generando casillas de verificación</h3>\n";
    echo "<form action='#' method='get' >";
    echo "<div>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<input type='checkbox' value='" . $i . "'  name='casilla " . $i . "' /> Casilla " . $i . "<br/>\n";
    }

    echo "</div></form>";
    include "pie.php";
    ?>