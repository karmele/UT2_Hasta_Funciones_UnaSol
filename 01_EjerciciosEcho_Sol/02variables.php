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
    </header>

    <nav>
        <a href="#">Enlace1</a>
        <a href="#">Enlace2</a>
        <a href="#">Enlace3</a>
    </nav>

    <main>
        <section>
            <h3>Variables, tipos de datos, operadores y constantes</h3>
            <hr />
            <h4>Datos de un alumno</h4>
            <?php
            define('INSTITUTO', "CI Mª Ana Sanz");
            define('HORAS', 8);
            $nombre = "María Huici";
            $edad = 23;
            $modulo = "Desarrollo en entorno servidor";
            $nota1 = 8.6;
            $nota2 = 6.5;
            $media = ($nota1 + $nota2) / 2
            ?>
            <p>Instituto: <?php echo INSTITUTO; ?></p>
            <p>Nombre: <?php echo $nombre; ?></p>
            <p>Edad: <?php echo $edad; ?></p>
            <?php
            echo "<p>Módulo: $modulo de " . HORAS . " horas</p>";
            echo "<p>La nota media de \$nota1=$nota1 y \$nota2=$nota2 es $media </p>";
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