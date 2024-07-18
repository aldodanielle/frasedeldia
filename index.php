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
<body onload="actualizaReloj()">
    <main>
        <div class="container">
            <figure>
                <img src="img/google-logo.png" alt="">
            </figure>
            <div class="searcher">
                <span class="search-logo"></span>
                <!-- <input type="text"> -->
                <?php
                    echo '<p id = "respuesta" style = "color: white;">';
                ?>
                <button><span class="micro-logo"></span></button>
                <button><span class="camera-logo"></span></button>
            </div>
            <div class="searcher-buttons">
                <button id = "buscar">Buscar frase</button>
                <button id = "enviar">Enviar frase</button>
            </div>
            <p>Ofrecido por API: "frase del dia"</p>
        </div>
    </main>

    <script src = "js/resultados.js"></script>

    <footer class = "footer">
        Consumo de la API "frase del dia" ©
        <a class = "fecha-hora" id = "actualizacion-fecha"></a> &emsp;
        <!-- <a class = "fecha-hora" id = "dame-hora"></a> -->
        <form name="form_reloj">
            <input type="text" name="reloj" size="10" 
                style = "background-color : transparent; 
                    color : White; width: 100%; height: 40px; text-align: center"
                    onfocus="window.document.form_reloj.reloj.blur()">
        </form>
    </footer>
</body>
</html>