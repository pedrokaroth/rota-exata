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

    return;
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

function validate(id) {

    let val = document.getElementById(id).value

    return val === "";

}