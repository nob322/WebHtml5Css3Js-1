/*
David (https://github.com/nob322)
*/ 
function validar() {
        var contieneValorCatcha = 776179;
        var catcha = document.getElementById("catcha").value;
    function cambiarClase(elIdSellama) {
        const cambio = document.getElementById(elIdSellama).className = 'error';
        return cambio;
    }
    if (catcha === "") {
        cambiarClase("errorCatcha");
        return false;
    } else if (catcha != contieneValorCatcha) {
        cambiarClase("errorCatchaIngresoErroneo");
        return false;
    } else if (catcha === contieneValorCatcha) {
        cambiarClase("okCatchaOk");
        return true;
    }
}
