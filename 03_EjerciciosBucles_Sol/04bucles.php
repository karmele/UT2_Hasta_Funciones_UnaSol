﻿<?php
include "cabecera.php";

echo "<h4>Generando enlaces</h4>";
for ($i = 1; $i <= 10; $i++) {
    echo "<a href='#'>Enlace " . $i . "</a><br/>";
}

include "pie.php";
