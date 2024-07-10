document.addEventListener("DOMContentLoaded", function(){
    var fecha = new Date();
    var ano = fecha.getFullYear();
    var mes = fecha.getMonth() + 1;
    var dia = fecha.getDate();
    var fechaActual = dia + '/' + mes + '/' + ano;
    var elementoFecha = document.getElementById("actualizacion-fecha");
    elementoFecha.innerHTML = fechaActual;

    var horario = new Date();
    var hora = horario.getHours();
    var min = horario.getMinutes();
    var sec = horario.getSeconds();
    var horaActual = hora + ':' + min + ':' + sec;
    var elementoHora = document.getElementById("dame-hora");
    elementoHora.innerHTML = horaActual;
});