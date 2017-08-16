$(document).ready(function() {

    function inicio() {
        $(".btnvalidar").click(validarfinal);
        $("#backendbundle_user_name").keyup(validarName);
        $("#backendbundle_user_plastname").keyup(validarPlastname);
        $("#backendbundle_user_mlastname").keyup(validarMlastname);
        $("#backendbundle_user_email").blur(validarEmail);
        $("#backendbundle_user_telephone").keyup(validarPhone);
        $("#backendbundle_user_age").keyup(validarAge);
    }
    inicio();

    function validarfinal() {
        var customer_name = document.getElementById("backendbundle_user_name").value;
        if (customer_name.length < 2) {
            $(".help-block").remove();
            $(".name-input").css("border", "2px solid red");
            $("#backendbundle_user_name").parent().append("<span class='help-block'>Ingresa tu nombre correcto</span>");
            return false;
        }
        var customer_flastname = document.getElementById("backendbundle_user_plastname").value;
        if (customer_flastname.length < 2) {
            $(".help-block").remove();
            $(".palstname-input").css("border", "2px solid red");
            $("#backendbundle_user_plastname").parent().append("<span class='help-block'>Ingresa tu apellido correctamente</span>");
            return false;
        }
        var customer_mlastname = document.getElementById("backendbundle_user_mlastname").value;
        if (customer_mlastname.length < 2) {
            $(".help-block").remove();
            $(".malstname-input").css("border", "2px solid red");
            $("#backendbundle_user_mlastname").parent().append("<span class='help-block'>Ingresa tu apellido correctamente</span>");
            return false;
        }
        
        var customer_password = document.getElementById("backendbundle_user_password").value;
        if (customer_password.length < 6) {
            $(".help-block").remove();
            $(".password-input").css("border", "2px solid red");
            $("#backendbundle_user_password").parent().append("<span class='help-block'>La contraseña debe tener 6 o mas caracteres</span>");
            return false;
        }
        var repetir_password = document.getElementById("confirmpasswordInput").value;
        if (customer_password != repetir_password) {
            $(".help-block").remove();
            $("#confirmpasswordInput").css("border", "2px solid red");
            $("#confirmpasswordInput").parent().append("<span class='help-block'>Las contraseñas no coinciden</span>");
            return false;
        }
    }

    /*
     campo name
     */
    function validarName() {
        // var expNombre2 = /^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/;
        var expNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
        var customer_name = document.getElementById("backendbundle_user_name").value;
        if (!expNombre.exec(customer_name)) {
            $(".help-block").remove();
            $(".name-input").css("border", "2px solid red");
            $("#backendbundle_user_name").parent().append("<span class='help-block'>Ingresa solo letras y/o espacios</span>");
            return false;
        } else if (/^\s+$/.test(customer_name)) {
            $(".help-block").remove();
            $(".name-input").css("border", "2px solid red");
            $("#backendbundle_user_name").parent().append("<span class='help-block'>Ingresa un nombre correctamente</span>");
            return false;
        } else if (!isNaN(customer_name)) {
            $(".help-block").remove();
            $(".name-input").css("border", "2px solid red");
            $("#backendbundle_user_name").parent().append("<span class='help-block'>Ingresa un nombre valido</span>");
            return false;
        } else {
            $(".help-block").remove();
            $(".name-input").css("border", "2px solid green");
            return true;
        }
    }

    /*  
     campo plastname
     */
    function validarPlastname() {
        var customer_flastname = document.getElementById("backendbundle_user_plastname").value;
        var expNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;

        if (!expNombre.exec(customer_flastname)) {
            $(".help-block").remove();
            $(".plastname-input").css("border", "2px solid red");
            $("#backendbundle_user_plastname").parent().append("<span class='help-block'>Ingresa solo letras y/o espacios</span>");
            return false;
        } else if (/^\s+$/.test(customer_flastname)) {
            $(".help-block").remove();
            $(".plastname-input").css("border", "2px solid red");
            $("#backendbundle_user_plastname").parent().append("<span class='help-block'>Ingresa un nombre correctamente</span>");
            return false;
        } else if (!isNaN(customer_flastname)) {
            $(".help-block").remove();
            $(".plastname-input").css("border", "2px solid red");
            $("#backendbundle_user_plastname").parent().append("<span class='help-block'>Ingresa un nombre valido</span>");
            return false;
        } else {
            $(".help-block").remove();
            $(".plastname-input").css("border", "2px solid green");
            return true;
        }
    }

    /*  
     campo mlastname
     */
    function validarMlastname() {
        var customer_mlastname = document.getElementById("backendbundle_user_mlastname").value;
        var expNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
        if (!expNombre.exec(customer_mlastname)) {
            $(".help-block").remove();
            $(".mlastname-input").css("border", "2px solid red");
            $("#backendbundle_user_mlastname").parent().append("<span class='help-block'>Ingresa solo letras y/o espacios</span>");
            return false;
        } else if (/^\s+$/.test(customer_mlastname)) {
            $(".help-block").remove();
            $(".mlastname-input").css("border", "2px solid red");
            $("#backendbundle_user_mlastname").parent().append("<span class='help-block'>Ingresa un nombre correctamente</span>");
            return false;
        } else if (!isNaN(customer_mlastname)) {
            $(".help-block").remove();
            $(".mlastname-input").css("border", "2px solid red");
            $("#backendbundle_user_mlastname").parent().append("<span class='help-block'>Ingresa un nombre valido</span>");
            return false;
        } else {
            $(".help-block").remove();
            $(".mlastname-input").css("border", "2px solid green");
            return true;
        }
    }

    /*  
     campo email
    */
    function validarEmail() {
        var customer_email = document.getElementById("backendbundle_user_email").value;
        var expEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if (!expEmail.exec(customer_email)) {
            $(".help-block").remove();
            $(".email-input").css("border", "2px solid red");
            $("#backendbundle_user_email").parent().append("<span class='help-block'>El correo elctronico no es valido</span>");
            return false;
        } else if (/^\s+$/.test(customer_email)) {
            $(".help-block").remove();
            $(".email-input").css("border", "2px solid red");
            $("#backendbundle_user_email").parent().append("<span class='help-block'>Ingresa un email correcto</span>");
            return false;
        } else if (!isNaN(customer_email)) {
            $(".help-block").remove();
            $(".email-input").css("border", "2px solid red");
            $("#backendbundle_user_email").parent().append("<span class='help-block'>Ingresa un email correcto</span>");
            return false;
        } else {
            $(".help-block").remove();
            
            $.ajax({
                url: URL + '/email-test',
                data: {
                    email: customer_email
                },
                type: 'POST',
                success: function(response) {
                    if (response == 'used') {
                        $(".email-input").css("border", "2px solid red");
						$("#backendbundle_user_email").parent().append("<span class='help-block'>El correo electronico esta en uso</span>");
                    } else {
                        $(".email-input").css("border", "2px solid green");
                    }
                }
            });
            
            
            return true;
        }
    }
    /*  
     campo phone
     */
    function validarPhone() {
        var customer_phone = document.getElementById("backendbundle_user_telephone").value;
        if(customer_phone.length < 10){
            $(".help-block").remove();
            $(".phone-input").css("border", "2px solid red");
            $("#backendbundle_user_telephone").parent().append("<span class='help-block'>Ingresa un numero de telefono valido</span>");
            return false;
        } else if (isNaN(customer_phone)) {
			$(".help-block").remove();
            $(".phone-input").css("border", "2px solid red");
            $("#backendbundle_user_telephone").parent().append("<span class='help-block'>Ingresa un numero de telefono correcto</span>");
            return false;
        } else if (/^\s+$/.test(customer_phone)) {
			$(".help-block").remove();
            $(".phone-input").css("border", "2px solid red");
            $("#backendbundle_user_telephone").parent().append("<span class='help-block'>Ingresa un numero de telefono correcto</span>");
            return false;
        } else {
            $(".help-block").remove();
            $(".phone-input").css("border", "2px solid green");
            return true;
        }
    }


    /*
     campo backendbundle_user_age
     */
    function validarAge() {
        var customer_birthdate = document.getElementById("backendbundle_user_age").value;

        if (customer_birthdate < 18 || customer_birthdate > 100) {
            $(".help-block").remove();
            $(".age-input").css("border", "2px solid red");
            $("#backendbundle_user_age").parent().append("<span class='help-block'>Es necesario que seas mayor de edad</span>");
            return false;
        } else if (/^\s+$/.test(customer_birthdate)) {
           $(".help-block").remove();
            $(".age-input").css("border", "2px solid red");
            $("#backendbundle_user_age").parent().append("<span class='help-block'>Ingresa tu edad correctamente</span>");
            return false;
        } else if (isNaN(customer_birthdate)) {
            $(".help-block").remove();
            $(".age-input").css("border", "2px solid red");
            $("#backendbundle_user_age").parent().append("<span class='help-block'>Ingresa tu edad correctamente</span>");
            return false;
        } else {
            $(".help-block").remove();
            $(".age-input").css("border", "2px solid green");
            return true;
        }
    }

});

/*$(document).ready(function () {
    $('.js-datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });

    $(".email-input").blur(function () {
        var email = this.value;

        $.ajax({
            url: URL + '/email-test',
            data: {email: email},
            type: 'POST',
            success: function (response) {
                if (response == "used") {
                    $(".email-input").css("border", "1px solid red");
                } else {
                    $(".email-input").css("border", "1px solid green");
                }
            }
        });
    });
});
*/

/*
 solo numeros
 
 else if (isNaN(valor)) {
 alert("Solo numeros")
 return false;
 }
 
 */

/*
 $('.verify-username').blur(function () {
 var username = this.value;
 
 $.ajax({
 url: URL + '/verificando-usuario',
 data: {username: username},
 type: 'POST',
 success: function (response) {
 if (response == 'used') {
 Materialize.toast('El nombre de usuario ya esta en uso. Prueba con uno distinto', 6000, 'rounded red');
 
 } else {
 //$(".verify-username").css("border", "2px solid green");
 Materialize.toast('Nombre de usuario valido. Continua', 6000, 'rounded green');
 
 }
 }
 });
 });
 
 $('.verify-email').blur(function () {
 var email = this.value;
 
 $.ajax({
 url: URL + '/verificando-correo',
 data: {email: email},
 type: 'POST',
 success: function (response) {
 if (response == 'used') {
 Materialize.toast('El correo electronico ya esta en uso. Prueba con uno distinto', 6000, 'rounded red');
 } else {
 Materialize.toast('Dirección de correo valido. Continua', 6000, 'rounded green');
 }
 }
 });
 });
 */

     /*  
     campo address
     
    function validarAddress() {
        var customer_address = document.getElementById("backendbundle_customer_address").value;
        if (/^\s+$/.test(customer_address)) {
            $("#spanAddress").remove();
            //$("#backendbundle_customer_address").attr("class", "invalid");
            $("#backendbundle_customer_address").parent().append("<span id='spanAddress'>Ingresa tu Dirección</span>");
            return false;
        } else {
            $("#spanAddress").remove();
            //$("#backendbundle_customer_address").attr("class", "valid");
            return true;
        }
    }*/