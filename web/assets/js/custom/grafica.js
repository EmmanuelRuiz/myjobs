$(document).ready(function () {
     $(".graficar").click(function () {
        //var email = "hola";

        $.ajax({
            url: URL + '/graficar',
            //data: {email: email},
            type: 'POST',
            success: function (response) {
                $(".rellenar").text(response.age);
                console.log(response.age);
            }
        });
    });
});