<h1>Consumo API "Frase del dia"</h1>

<style>
    .caja{
        font-family: sans-serif;
        font-size: 23px;
        font-weight: 400;
        color: black;
        background: #87CEEB;
        text-align: center;
        
        /* padding: 20px;            padding muy general 20px en cada lado

        padding-top: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        padding-left: 20px;  */

        padding: 20px 20px 20px 20px; /* Es lo mismo que lo de arriba solo que en una sola linea */
        margin: 0 0 30px;
        overflow: hidden;



        border-radius: 15px 15px 15px 15px;
        -moz-border-radius: 15px 15px 15px 15px;
        -webkit-boder-radius: 15px 15px 15px 15px;
        border: 3px solid #0303b5;
        /* background: pink;
        border: 2px, solid black;
        color: white;
        size: 10px; */
    }
    .boton{
        font-family: sans-serif;
        font-size: 23px;
        font-weight: 400;
        color: black;
        background: white;
        text-align: center;
        border: 2px solid black;
    }
    .caja-ajustable{
        display: inline-block;
        padding: 10px;
        border: 1px solid #000;
        border-radius: 5px;
    }
</style>
<?php
//          ---+++++     consumo de API "Frase del motivadora"     +++++---

// Usando cURL
$ch = curl_init();      // iniciamos el cURL

// Configuramos la URl
curl_setopt($ch, CURLOPT_URL, "https://frasedeldia.azurewebsites.net/api/phrase");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutamos la solicitud y Almacenamos la respuesta
$response =  curl_exec($ch);

// Cerramos cURL
curl_close($ch);

// Decodificamos la respuesta JSON
$data = json_decode($response, true);

// Verificamos si la decodificacion tuvo exito
if(json_last_error() === JSON_ERROR_NONE){
    $phrase = $data ['phrase'] ?? 'NO phrase funnd';
    $author = $data['author'] ?? 'Unknown author funnd';
    echo '<p class = "caja" >' . "Phrase: $phrase " . "<br>" . " Author: $author" . "</p>";
    echo '<p class = "caja-ajustable">' . $phrase .'</p>';
    echo '<br>';
}else{
    echo "Failed to decode JSON response";
}
?>
<!-- echo '<div class = "caja1"> ¡Hola soy una caja muy estilosa! </div>'; -->
<button class = "boton" name = "enviar">Enviar</button>
<!-- <div class = "caja-ajustable"> ¡Hola soy una caja muy estilosa! </div> -->