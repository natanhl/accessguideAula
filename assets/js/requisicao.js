//Usuário
function validarUsuario(usuario,senha,response){
    var parametros = {
        usuario: usuario,
        senha: senha
    }

    enviarRequisicao("Classe", "Metodo", parametros, "GET OR PULL", function(retorno){
        response(retorno)
    })
}

function consultarUsuario(usuario,senha,response){
    var parametros = {
        usuario: usuario,
        senha: senha
    }

    enviarRequisicao("Classe", "Metodo", parametros, "GET OR PULL", function(retorno){
        response(retorno)
    })
}