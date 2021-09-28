<!DOCTYPE html>
<html lang="es">

<head>
    <title>Layout con CSS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo1.css">

</head>

<body>

    <header>
        <img src='img\logo.png' width="85" height="70" alt="El logo de Mª Ana Sanz" />
        <h1>Ejemplos de la UT2</h1>
        <p>Se debe cambiar el tamaño de la ventana del navegador para ver el efecto de respuesta.</p>
    </header>

    <nav>
        <a href="#">Enlace1</a>
        <a href="#">Enlace2</a>
        <a href="#">Enlace3</a>
    </nav>

    <main>
        <section>
            <?php
            define('INSTITUTO', "CI Mª Ana Sanz");
            define('HORAS', 8);
            $nombre = "María Huici";
            $edad = 23;
            $modulo = "Desarrollo en entorno servidor";
            $nota1 = 8.6;
            $nota2 = 6.5;
            $media = ($nota1 + $nota2) / 2;
            ?>
            <h3>Variables y tipos de datos </h3>
            <hr />
            <?php
            define('DESCUENTO', 25);
            define('IVA', .21);
            $precioProducto = 234.89;
            // Primero se aplica el DESCUENTO y luego el IVA
            $conDescuento = $precioProducto * DESCUENTO / 100;
            $precioConDescuento = $precioProducto - $conDescuento;
            $ivaProducto = $precioProducto * IVA;
            $precioFinal = $precioConDescuento + $ivaProducto;
            echo "<table border='1'>\n";
            echo "<caption>Datos de un producto</caption>";
            echo "<tr>";
            echo "<td>Precio producto: </td><td>" . $precioProducto . "</td>\n";
            echo "</tr>";
            echo "<tr>";
            echo "<td> Descuento " . DESCUENTO . "%</td><td>" . $conDescuento . "</td>\n";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Precio con descuento: </td><td>" . $precioConDescuento . "</td>\n";
            echo "</tr>";
            echo "<tr>";
            echo "<td>IVA " . (IVA * 100) . "%</td><td>" . $ivaProducto . "</td>\n";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Precio final </td><td>" . $precioFinal . "</td>\n";
            echo "</tr>";
            echo "</table>";
            ?>
        </section>
    </main>
    <footer>
        <p>Desarrollo web en entorno servidor</p>
        <p class="copyright">
            &copy;
            <?php
            setlocale(LC_TIME, 'Spanish');
            $fecha = strftime("%A, %d  %B %Y");
            echo utf8_encode($fecha);
            ?> Ejercicios iniciales de PHP
        </p>
    </footer>
</body>

</html>