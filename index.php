<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/style.css">
    <script src = "js/actualizacion.js"></script>
    <title>Frase del dia</title>
</head>
<body>

    <!-- <div class = "seccion-principal">
        <h1>La frase del dia es</h1>
    </div>

    <p id = "imprime-frase">
        Api frase del dia <br>
    </p>
    <?php
    // include('php/main.php');
    ?>

    <div class = "acciones">
        <button class = "boton generar-frase" id = "generar-frase">Frase</button>
        <button class = "boton nueva-frase" id = "nueva-frase">Nueva Frase</button>
        <button class = "boton enviar" id = "enviar">Enviar</button>
    </div> -->

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <main>
        <div class="container">
            <figure>
                <img src="img/google-logo.png" alt="">
            </figure>
            <div class="searcher">
                <span class="search-logo"></span>
                <input type="text">
                <button><span class="micro-logo"></span></button>
                <button><span class="camera-logo"></span></button>
            </div>
            <div class="searcher-buttons">
                <button>Buscar frase</button>
                <button>Enviar frase</button>
            </div>
            <p>Ofrecido por API: "frase del dia"</p>
        </div>
    </main>

    <footer class = "footer">
        Consumo de la API "frase del dia" ©
        <br>
        <a class = "fecha-hora" id = "actualizacion-fecha"></a> &emsp;
        <a class = "fecha-hora" id = "dame-hora"></a>
    </footer>
</body>
</html>