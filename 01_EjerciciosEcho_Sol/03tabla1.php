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
            <table border='1'>
                <caption>Datos de un alumno</caption>
                <tr>
                    <td>Nombre: </td>
                    <td> <?php echo $nombre; ?></td>
                </tr>
                <tr>
                    <td>Edad: </td>
                    <td> <?php echo $edad; ?></td>
                </tr>
                <tr>
                    <td>Módulo: </td>
                    <td> <?php echo $modulo; ?></td>
                </tr>
            
                    <?php
                    /*También se podían haber puesto con echo todo */
                    echo "<tr>";
                    echo "<td>Media </td><td>" . $media . "</td>";
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