<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Frase del dia</title>
</head>
<body>

    <div class = "seccion-principal">
        <h1>La frase del dia es</h1>
        <h2>En lenguaje PHP</h2>

    </div>

    <?php
    include('php/main.php');
    ?>

    <div class = "acciones">
        <button class = "boton generar-frase" id = "generar-frase">Frase</button>
        <button class = "boton nueva-frase" id = "nueva-frase">Nueva Frase</button>
        <button class = "boton enviar" id = "enviar">Enviar</button>
    </div>

    <footer class = "fooster">
        <!-- <p class = "text-center">Consumo de la API "frase del dia"</p> -->
        Consumo de la API "frase del dia"  © 2024
    </footer>
</body>
</html>