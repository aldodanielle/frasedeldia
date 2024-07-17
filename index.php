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

    <script>
        document.getElementById('buscar').addEventListener('click', function(){
            var xhr = new XMLHttpRequest();
            // cremos la solicitud
            xhr.open('GET', 'php/main.php', true);
            // manejamos la solicitud
            xhr.onload = function(){
                if(xhr.status === 200){
                    console.log('PHP ejecutado correctamente' , xhr.responseText);
                    document.getElementById('respuesta').innerHTML = xhr.responseText;
                }else{
                    console.error('Error al ejecutar PHP', xhr.status, xhr.statusText);
                }
            };
            xhr.send();
        });
    </script>

    <footer class = "footer">
        Consumo de la API "frase del dia" ©
        <br>
        <a class = "fecha-hora" id = "actualizacion-fecha"></a> &emsp;
        <a class = "fecha-hora" id = "dame-hora"></a>
    </footer>
</body>
</html>