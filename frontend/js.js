$("#button-blue").on("click", function () {

    var txt_name = $("#name").val();
    var txt_email = $("#email").val();
    var txt_comment = $("#comment").val();

    $.ajax({
        url: "",

        type: "post",
        data: {name: txt_name, comment: txt_comment, email: txt_email},
        beforeSend: function () {

            console.log("Tentando enviar os dados....");

        }
    }).done(function (e) {
        alert("Dados Salvos");
    })

});