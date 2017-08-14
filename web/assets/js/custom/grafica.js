$(document).ready(function () {
     $(".graficar").click(function () {
        //var email = "hola";

        $.ajax({
            url: URL + '/graficar',
            //data: {email: email},
            type: 'POST',
            success: function (response) {
                if (response == "used") {
                    alert("ogfal");
                } else {
                    alert("iskjdam");
                }
            }
        });
    });
});