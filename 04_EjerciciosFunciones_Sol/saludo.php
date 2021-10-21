<?php

include "includes/cabecera.php";

function saludar()
{
    echo "Hola, esto es un saludo sin parámetros<br/>\n";
}

function saludarPersonalizado($nombre)
{
    echo "Hola $nombre, ¿Cómo estás?<br/>\n";
}

echo "Primer saludo<br/>";
saludar();

echo "Segundo saludo<br/>";
saludarPersonalizado("Luis");

echo"<hr/>";
$i = 1;
while ($i <= 7) {
    echo"Saludo " . $i . " ";
    saludar();
    $i++;
}
include "includes/pie.php";
?>
