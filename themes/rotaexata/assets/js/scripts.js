$("#login").submit(function (e) {
    e.preventDefault();

    var form = $(this);

    $.ajax({
        url: form.attr("action"),
        type: "POST",
        data: form.serialize(),
        dataType: "json",
        success: function (response) {
            //redirect
            if (response.redirect) {
                window.location.href = response.redirect;
            }

            //Message
            if (response.message) {
                alert(response.message);
            }
        },
    });
});

$("#products").submit(function (e) {
    e.preventDefault();

    if(validate("name")) {alert("Digite o Nome do Produto"); return }
    if(validate("value")) {alert("Digite o Valor do Produto"); return }
    if(validate("desc")) {alert("Digite a descrição do Produto"); return }

    let c = confirm("Nome: " + value("name") +
                  "\n\nValor: " + value("value") +
                  "\n\nOpcionais:" + " \nOpcional " + value("opA")  + "\nOpcional " + document.querySelector('input[name="opB"]:checked').value+
                  "\n\nDescrição: " + value("desc") + "\n\nAs informações enviadas estão corretas?")


    if(!c) {
        alert("Verifique e tente novamente!")
        return;
    }

    let form = $(this);

    $.ajax({
        url: form.attr("action"),
        type: "POST",
        data: form.serialize(),
        dataType: "json",
        success: function (response) {
            //redirect
            if (response.redirect) {
                window.location.href = response.redirect;
            }

            //Message
            if (response.message) {
                alert(response.message);
            }
        },
    });
});

function validate(id) {

    let val = document.getElementById(id).value

    return val === "";

}

function value(id) {
    return document.getElementById(id).value
}