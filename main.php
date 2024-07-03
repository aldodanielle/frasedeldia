<head>
    <link rel = "stylesheet" type = "text/css" href = "style\style.css"><link>
</head>
<h1>Consumo API "Frase del dia"</h1>
<?php
//          ---+++++     consumo de API "Frase del motivadora"     +++++---

// Usando cURL
$ch = curl_init();      // iniciamos el cURL

// Configuramos la URL
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
    echo '<p class = "caja" id = "frase" >' . "Phrase: $phrase " . "<br>" . " Author: $author" . "</p>";
    echo '<p class = "caja-ajustable">' . "Phrase: "  . $phrase .'</p>';
    echo '<br>';
}else{
    echo "Failed to decode JSON response";
}
?>
<!-- echo '<div class = "caja1"> ¡Hola soy una caja muy estilosa! </div>'; -->
<button class = "boton" name = "enviar">Enviar</button>
<!-- <div class = "caja-ajustable"> ¡Hola soy una caja muy estilosa! </div> -->