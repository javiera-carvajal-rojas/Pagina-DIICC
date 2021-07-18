function normal(){
    for (i = 0; i < arguments.length; i++) {
        document.getElementById(arguments[i]).style.boxShadow = null;
    }
}
function seleccionado(celda){
        document.getElementById(celda).style.boxShadow = "inset 0px 0px 15px 5px rgba(0,128,255,0.9)";
}
function requiere(){
    for (i = 0; i < arguments.length; i++) {
        document.getElementById(arguments[i]).style.boxShadow = "inset 0px 0px 15px 5px rgba(204,0,0,0.9)";
    }
}
function correquiere(){
    for (i = 0; i < arguments.length; i++) {
        document.getElementById(arguments[i]).style.boxShadow = "inset 0px 0px 15px 5px rgba(122,0,204,0.9)";
    }
}
function habilita(){
    for (i = 0; i < arguments.length; i++) {
        document.getElementById(arguments[i]).style.boxShadow = "inset 0px 0px 15px 5px rgba(51,214,51,0.9)";
    }
}
function habilitaParcial(){
    for (i = 0; i < arguments.length; i++) {
        document.getElementById(arguments[i]).style.boxShadow = "inset 0px 0px 15px 5px rgba(255,255,51,0.9)";
    }
}