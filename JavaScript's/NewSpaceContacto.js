/*----------Indicador----------*/
    const body = document.querySelector('body');
    const toggle = document.getElementById('toggle');

        toggle.onclick = function() {
            toggle.classList.toggle('active')
            body.classList.toggle('active')
}
/*----------Código de tema oscuro----------*/
    let btn = document.querySelector("#Menu");
    let barra_lateral = document.querySelector(".barra_lateral");
    let Barra_Navegacion = document.querySelector(".Barra_Navegacion");
    let Contenido = document.querySelector(".Contenido");
    let presentacion = document.querySelector(".presentacion");
    let contenedor1 = document.querySelector(".contenedor1");
    
        btn.onclick = function() {
            barra_lateral.classList.toggle("active");
            Barra_Navegacion.classList.toggle("active");
            Contenido.classList.toggle("active");
            contenedor1.classList.toggle("active");
}
/*-------------Barra de Progreso---------------*/
let progress = document.getElementById('progressbar');
let totalHeight = document.body.scrollHeight - window.innerHeight;

    window.onscroll = function(){
        let progressHeight = (window.pageYOffset / totalHeight) * 99;
        progressbar.style.height = progressHeight + "%";
    }
    
/*-------------Verificacion---------------*/
$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        // Validado Nombre ==============================
        if( $('#names').val() == '' ){
            errores += '<p>Escriba un nombre</p>';
            $('#names').css("border-bottom-color", "#F14B4B")
        } else{
            $('#names').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Correo ==============================
        if( $('#email').val() == '' ){
            errores += '<p>Ingrese un correo</p>';
            $('#email').css("border-bottom-color", "#F14B4B")
        } else{
            $('#email').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Mensaje ==============================
        if( $('#mensaje').val() == '' ){
            errores += '<p>Escriba un mensaje</p>';
            $('#mensaje').css("border-bottom-color", "#F14B4B")
        } else{
            $('#mensaje').css("border-bottom-color", "#d1d1d1")
        }

        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
