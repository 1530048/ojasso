
function mostrar() {
    document.getElementById("sidebar").style.width = "300px";
    document.getElementById("contenido").style.marginLeft = "300px";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline";
}

function ocultar() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("contenido").style.marginLeft = "0";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";
}
function mostrar1() {
    document.getElementById("sidebar1").style.width = "300px";
    document.getElementById("contenido1").style.marginLeft = "300px";
    document.getElementById("abrir1").style.display = "none";
    document.getElementById("cerrar1").style.display = "inline";
}

function ocultar1() {
    document.getElementById("sidebar1").style.width = "0";
    document.getElementById("contenido1").style.marginLeft = "0";
    document.getElementById("abrir1").style.display = "inline";
    document.getElementById("cerrar1").style.display = "none";
}