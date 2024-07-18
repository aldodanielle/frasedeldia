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


function actualizaReloj(){
    time = new Date()
    hora = time.getHours()
    minutos = time.getMinutes()
    segundos = time.getSeconds()

    str_seg = new String (segundos)
    if (str_seg.length == 1)
       segundos = "0" + segundos

    str_min = new String (minutos)
    if (str_min.length == 1)
       minutos = "0" + minutos

    str_hor = new String (hora)
    if (str_hor.length == 1)
       hora = "0" + hora

    horaActual = hora + " : " + minutos + " : " + segundos
    document.form_reloj.reloj.value = horaActual
    setTimeout("actualizaReloj()",1000)
}