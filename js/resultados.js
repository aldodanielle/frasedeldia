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