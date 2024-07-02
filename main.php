<h1>Consumo API "Frase del dia"</h1>

<style>
    .caja1{
        font-family: sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #ffffff;
        background: #ee0467;
        padding: 20px;          /*  padding mu general 120px en caddalado */


        border-radius: 35px, 0px, 35px, 0px;
        -moz-border-radius: 35px, 0px, 35px, 0px;
        -webkit-boder-radius: 35px, 0px, 35px, 0px;
        border: 2px solid #5878ca;
        /* background: pink;
        border: 2px, solid black;
        color: white;
        size: 10px; */
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
    echo '<div class = "caja1"> ¡Hola soy una caja muy estilosa! </div>';
}else{
    echo "Failed to decode JSON response";
}
