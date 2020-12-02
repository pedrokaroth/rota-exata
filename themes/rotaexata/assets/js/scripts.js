$("form").submit(function (e) {
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