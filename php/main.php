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
    echo '<p>' . "Phrase: $phrase " . "&emsp;" . " Author: $author" . "</p>";
}else{
    echo "Failed to decode JSON response";
}
?>