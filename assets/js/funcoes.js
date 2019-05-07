function enviarRequisicao(classe, metodo, parametros, tipo, retorno) {

    switch (tipo) {
        case "GET":
            var url = "http://????/?classe=" + classe + "&metodo=" + metodo + "&parametros=" + Object.values(parametros);
            break;
        case "POST":
            var url = "http://????/?classe=" + classe + "&metodo=" + metodo;
            break;
    }
    runAJAX(url, parametros, tipo, function (resposta) {
        retorno(resposta);
    });
}

function runAJAX(url, parametros, tipo, resposta) {
    $.ajax({
        url: url,
        dataType: "json",
        data: parametros,
        method: tipo,
        beforeSend: function () {
            console.log("[AJAX] Carregando a requisição...");
        },
        error: function (resultado) {
            console.log("[AJAX] Falha ao consumir informações da API. ");
        },
        success: function () {
            console.log("[AJAX] Requisição realizada com sucesso!");
        },
        complete: function (resultado) {
            resposta(resultado.responseJSON);
        }
    });
}

