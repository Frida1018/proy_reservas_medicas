document.getElementById("btn_Registrarse").addEventListener("click", register);
document.getElementById("btn_Iniciar_Secion").addEventListener("click", iniciarSecion);
window.addEventListener("resizer", anchopagina);



//declaracion de variables//
var contenedor_login = document.querySelector(".contenedor_login")
var form_login = document.querySelector(".form_login")
var form_register = document.querySelector(".form_register")
var caja_trasera_login = document.querySelector(".caja_trasera-login")
var caja_trasera_register = document.querySelector("caja_trasera_register")

function anchopagina(){
    if(window.innerWidth > 850) {
        caja_trasera_login.style.display="block";
        caja_trasera_register.style.display="block";
    }else{
        caja_trasera_register.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.display="none";
        form_login.style.display="block";
        form_register.style.style="none";
        contenedor_login.style.left="0px";
    }
}


function iniciarSecion() {

    if (window.innerWidth > 850) {
        form_register.style.display = "none";
        contenedor_login.style.left = "10px";
        form_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
        caja_trasera_register.style.opacity = "0";
    } else {
        form_register.style.display = "none";
        contenedor_login.style.left = "0px";
        form_login.style.display = "block";
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "none";
    }

}


function register() {
    if (window.innerWidth > 850) {
        form_register.style.display = "block";
        contenedor_login.style.left = "410px";
        form_login.style.display = "none";
        caja_trasera_login.style.opacity = "0";
        caja_trasera_register.style.opacity = "1";
    }
    else {
        form_register.style.display = "block";
        contenedor_login.style.left = "0px";
        form_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";

    }

}

