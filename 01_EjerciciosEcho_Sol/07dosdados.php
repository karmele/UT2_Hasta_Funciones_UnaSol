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
        <h1>Ejercicios de la UT2</h1>

    </header>

    <nav>
        <a href="#">Enlace1</a>
        <a href="#">Enlace2</a>
        <a href="#">Enlace3</a>
    </nav>

    <main>
        <section>
            <h3>Simulando lanzamiento de dados</h3>
            <hr />
            <?php
            $cara1 = rand(1, 6);
            $cara2 = rand(1, 6);
            echo "<p><img src='img/$cara1.gif' border='0' width='100' height='100' alt='imagen de un dado'>"
                . "<img src='img/$cara2.gif' border='0' width='100' height='100' alt='imagen de un dado'></p>\n";
            echo "<p><a href='07dosdados.php'>Recargar</a></p>\n";
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