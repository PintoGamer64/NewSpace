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
            presentacion.classList.toggle("active");
            contenedor1.classList.toggle("active");
}