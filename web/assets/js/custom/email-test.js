$(document).ready(function(){
	
	$('.js-datepicker').datepicker({
		format: 'yyyy-mm-dd'
	});
	
	$(".email-input").blur(function(){
		var email = this.value;
		
		$.ajax({
			url: URL+'/email-test',
			data: {email: email},
			type: 'POST',
			success: function(response){
				if(response == "used"){
					$(".email-input").css("border", "1px solid red");
				} else {
					$(".email-input").css("border", "1px solid green");
				}
			}
		});
	});
});




$(document).ready(function () {
    function inicio(){
        //en caso de querer usar el span
        //$("span.help-block").hide();
        $(".btnvalidar").click(validarfinal);
        $("#backendbundle_customer_name").keyup(validarName);
        $("#backendbundle_customer_flastname").keyup(validarFlastname);
        $("#backendbundle_customer_mlastname").keyup(validarMlastname);
        $("#backendbundle_customer_address").keyup(validarAddress);
        $("#backendbundle_customer_email").blur(validarEmail);
        $("#backendbundle_customer_username").blur(validarUsername);
        $("#backendbundle_customer_phone").keyup(validarPhone);
        $("#backendbundle_customer_birthdate").keyup(validarBirthdate);
    }
    inicio();
    /*
    campo username
    */
    function validarUsername(){
        // var expNombre2 = /^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/;
        var expNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
        var customer_usernamename = document.getElementById("backendbundle_customer_username").value;
        if(!expNombre.exec(customer_usernamename)){
            $("#spanUsername").remove();
            $("#backendbundle_customer_username").attr("class", "invalid");
            $("#backendbundle_customer_username").parent().append("<span id='spanUsername'>Solo se permiten letras</span>");
            return false;
        } else if(/^\s+$/.test(customer_usernamename)){
            $("#spanUsername").remove();
            $("#backendbundle_customer_username").attr("class", "invalid");
            $("#backendbundle_customer_username").parent().append("<span id='spanUsername' >Ingresa un usuario</span>");
            return false;
        } else if(!isNaN(customer_usernamename)){
            $("#spanUsername").remove();
            $("#backendbundle_customer_username").attr("class", "invalid");
            $("#backendbundle_customer_username").parent().append("<span id='spanUsername' >Ingresa un usuario valido</span>");
            return false;
        } else {
            $.ajax({
                url: URL + '/verificando-usuario',
                data: {username: customer_usernamename},
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
            $("#spanUsername").remove();
            $("#backendbundle_customer_username").attr("class", "valid");
            return true;
        }
    }

    /*  
    campo email
    */
    function validarEmail(){
        var customer_email = document.getElementById("backendbundle_customer_email").value;
        var expEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if(!expEmail.exec(customer_email)){
            $("#spanEmail").remove();
            $("#backendbundle_customer_email").attr("class", "invalid");
            $("#backendbundle_customer_email").parent().append("<span id='spanEmail'>El E-mail no es correcto</span>");
            return false;
        } else if(/^\s+$/.test(customer_email)){
            $("#spanEmail").remove();
            $("#backendbundle_customer_email").attr("class", "invalid");
            $("#backendbundle_customer_email").parent().append("<span id='spanEmail'>Ingresa un E-mail</span>");
            return false;
        } else if(!isNaN(customer_email)){
            $("#spanEmail").remove();
            $("#backendbundle_customer_email").attr("class", "invalid");
            $("#backendbundle_customer_email").parent().append("<span id='spanEmail'>Ingresa un E-mail valido</span>");
            return false;
        } else {
            $.ajax({
                url: URL + '/verificando-correo',
                data: {email: customer_email},
                type: 'POST',
                success: function (response) {
                    if (response == 'used') {
                        Materialize.toast('El correo electronico ya esta en uso. Prueba con uno distinto', 6000, 'rounded red');
                    } else {
                        Materialize.toast('Dirección de correo valido, Continua.', 6000, 'rounded green');
                    }
                }
            });
            
            $("#spanEmail").remove();
            $("#backendbundle_customer_email").attr("class", "valid");
            return true;
        }
    }


    

    function validarfinal(){
        var customer_name = document.getElementById("backendbundle_customer_name").value;
        if(customer_name.length < 2){
            $("#spanName").remove();
            $("#backendbundle_customer_name").attr("class", "invalid");
            $("#backendbundle_customer_name").parent().append("<span id='spanName'>Ingresa un nombre correcto</span>");
            return false;
        }
        var customer_flastname = document.getElementById("backendbundle_customer_flastname").value;
        if(customer_flastname.length < 2){
            $("#spanFlastname").remove();
            $("#backendbundle_customer_flastname").attr("class", "invalid");
            $("#backendbundle_customer_flastname").parent().append("<span id='spanFlastname'>Ingresa un apellido correcto</span>");
            return false;
        }
        var customer_mlastname = document.getElementById("backendbundle_customer_mlastname").value;
        if(customer_mlastname.length < 2){
            $("#spanMlastname").remove();
            $("#backendbundle_customer_mlastname").attr("class", "invalid");
            $("#backendbundle_customer_mlastname").parent().append("<span id='spanMlastname'>Ingresa un apellido correcto</span>");
            return false;
        }
        var customer_address = document.getElementById("backendbundle_customer_address").value;
        if(customer_address.length < 10){
            $("#spanAddress").remove();
            $("#backendbundle_customer_address").attr("class", "invalid");
            $("#backendbundle_customer_address").parent().append("<span id='spanAddress'>Necesitamos una Dirección más específica</span>");
            return false;
        }
        var customer_phone = document.getElementById("backendbundle_customer_phone").value;
        if(customer_address.length < 10){
            $("#spanPhone").remove();
            $("#backendbundle_customer_phone").attr("class", "invalid");
            $("#backendbundle_customer_phone").parent().append("<span id='spanPhone'>Necesitamos tu número de teléfono completo</span>");
            return false;
        }

        var customer_password = document.getElementById("backendbundle_customer_password").value;
        if(customer_password.length < 6){
            $("#spanPassword").remove();
            $("#backendbundle_customer_password").attr("class", "invalid");
            $("#backendbundle_customer_password").parent().append("<span id='spanPassword'>Tu contraseña debe tener 6 o más carácteres</span>");
            return false;
        }
        var repetir_password = document.getElementById("repetirpass").value;
        if (customer_password != repetir_password) {
            $("#spanPassword").remove();
            $("#backendbundle_customer_password").attr("class", "invalid");
            $("#backendbundle_customer_password").parent().append("<span id='spanPassword'>Las contraseñas que ingresaste no coinciden</span>");
            return false;
        }
    }

    /*
    campo name
    */
    function validarName(){
        // var expNombre2 = /^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/;
        var expNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
        var customer_name = document.getElementById("backendbundle_customer_name").value;
        if(!expNombre.exec(customer_name)){
            $("#spanName").remove();
            $("#backendbundle_customer_name").attr("class", "invalid");
            $("#backendbundle_customer_name").parent().append("<span id='spanName'>Solo se permiten letras y espacios</span>");
            return false;
        } else if(/^\s+$/.test(customer_name)){
            $("#spanName").remove();
            $("#backendbundle_customer_name").attr("class", "invalid");
            $("#backendbundle_customer_name").parent().append("<span id='spanName' >Ingresa un nombre</span>");
            return false;
        } else if(!isNaN(customer_name)){
            $("#spanName").remove();
            $("#backendbundle_customer_name").attr("class", "invalid");
            $("#backendbundle_customer_name").parent().append("<span id='spanName' >Ingresa un nombre valido</span>");
            return false;
        } else {
            $("#spanName").remove();
            $("#backendbundle_customer_name").attr("class", "valid");
            return true;
        }
    }

    /*  
    campo flastname
    */
    function validarFlastname(){
        var customer_flastname = document.getElementById("backendbundle_customer_flastname").value;
        var expNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;

        if(!expNombre.exec(customer_flastname)){
            $("#spanFlastname").remove();
            $("#backendbundle_customer_flastname").attr("class", "invalid");
            $("#backendbundle_customer_flastname").parent().append("<span id='spanFlastname'>Solo se permiten letras y espacios</span>");
            return false;
        } else if(/^\s+$/.test(customer_flastname)){
            $("#spanFlastname").remove();
            $("#backendbundle_customer_flastname").attr("class", "invalid");
            $("#backendbundle_customer_flastname").parent().append("<span id='spanFlastname'>Ingresa un apellido</span>");
            return false;
        } else if(!isNaN(customer_flastname)){
            $("#spanFlastname").remove();
            $("#backendbundle_customer_flastname").attr("class", "invalid");
            $("#backendbundle_customer_flastname").parent().append("<span id='spanFlastname'>Ingresa un apellido valido</span>");
            return false;
        } else {
            $("#spanFlastname").remove();
            $("#backendbundle_customer_flastname").attr("class", "valid");
            return true;
        }
    }

    /*  
    campo mlastname
    */
    function validarMlastname(){
        var customer_mlastname = document.getElementById("backendbundle_customer_mlastname").value;
        var expNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
        if(!expNombre.exec(customer_mlastname)){
            $("#spanMlastname").remove();
            $("#backendbundle_customer_mlastname").attr("class", "invalid");
            $("#backendbundle_customer_mlastname").parent().append("<span id='spanMlastname'>Solo se permiten letras y espacios</span>");
            return false;
        } else if(/^\s+$/.test(customer_mlastname)){
            $("#spanMlastname").remove();
            $("#backendbundle_customer_mlastname").attr("class", "invalid");
            $("#backendbundle_customer_mlastname").parent().append("<span id='spanMlastname'>Ingresa un apellido</span>");
            return false;
        } else if(!isNaN(customer_mlastname)){
            $("#spanMlastname").remove();
            $("#backendbundle_customer_mlastname").attr("class", "invalid");
            $("#backendbundle_customer_mlastname").parent().append("<span id='spanMlastname'>Ingresa un apellido valido</span>");
            return false;
        } else {
            $("#spanMlastname").remove();
            $("#backendbundle_customer_mlastname").attr("class", "valid");
            return true;
        }
    }
    
    /*  
    campo address
    */
    function validarAddress(){
        var customer_address = document.getElementById("backendbundle_customer_address").value;
        if(/^\s+$/.test(customer_address)){
            $("#spanAddress").remove();
            //$("#backendbundle_customer_address").attr("class", "invalid");
            $("#backendbundle_customer_address").parent().append("<span id='spanAddress'>Ingresa tu Dirección</span>");
            return false;
        } else {
            $("#spanAddress").remove();
            //$("#backendbundle_customer_address").attr("class", "valid");
            return true;
        }
    }

    /*  
    campo phone
    */
    function validarPhone(){
        var customer_phone = document.getElementById("backendbundle_customer_phone").value;

        if(/^\s+$/.test(customer_phone)){
            $("#spanPhone").remove();
            $("#backendbundle_customer_phone").attr("class", "invalid");
            $("#backendbundle_customer_phone").parent().append("<span id='spanPhone'>Ingresa un número de teléfono</span>");
            return false;
        } else if(isNaN(customer_phone)){
            $("#spanPhone").remove();
            $("#backendbundle_customer_phone").attr("class", "invalid");
            $("#backendbundle_customer_phone").parent().append("<span id='spanPhone'>Ingresa un número de teléfono</span>");
            return false;
        } else {
            $("#spanPhone").remove();
            $("#backendbundle_customer_phone").attr("class", "valid");
            return true;
        }
    }    
});

/*  
    campo birthdate
    
    function validarBirthdate(){
        var customer_birthdate = document.getElementById("backendbundle_customer_birthdate").value;

        if(customer_birthdate < 18 || customer_birthdate > 60){
    
        } else if(/^\s+$/.test(customer_birthdate)){
            $("#spanPhone").remove();
            $("#backendbundle_customer_birthdate").attr("class", "invalid");
            $("#backendbundle_customer_birthdate").parent().append("<span id='spanPhone'>Ingresa un número de teléfono</span>");
            return false;
        } else if(isNaN(customer_birthdate)){
            $("#spanPhone").remove();
            $("#backendbundle_customer_birthdate").attr("class", "invalid");
            $("#backendbundle_customer_birthdate").parent().append("<span id='spanPhone'>Ingresa un número de teléfono</span>");
            return false;
        } else {
            $("#spanPhone").remove();
            $("#backendbundle_customer_birthdate").attr("class", "valid");
            return true;
        }
    }
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




