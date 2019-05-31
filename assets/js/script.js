function ocultarBloco(bloco) {
    document.getElementById(bloco).style.display = "none"
}

function exibirBloco(bloco) {
    document.getElementById(bloco).style.display = "block"
}

function checarEmail() {
    var email = document.getElementById('email')
    if (email.value == "" ||
        email.value.indexOf('@') == -1 ||
        email.value.indexOf('.') == -1) {
        $("#mensagem").html('')    
        $("#mensagem").append('<i class="fas fa-exclamation"></i> Frormato do e-mail inválido')    
        $("#alerta").fadeIn(1000).fadeOut(2000)
        email.focus
        return false
    } else {
        return true
    }
}