$(document).ready(function () {

    $.ajax({
        url: URL + '/estados',
        type: 'POST',
        success: function (countrytab) {
            $.each(countrytab, function (i, item) {
                $("#select-estados").append("<option value='" + countrytab[i].id + "'>" + countrytab[i].nombre + "</option>");
            })

        }
    });

    $("#select-estados").change(function () {
        $("#select-municipio, #select-localidad").empty();
        //alert($('#select-estados option:selected').val());
        var id = $('#select-estados option:selected').val();

        $.ajax({
            url: URL + '/municipio',
            data: {id: id},
            type: 'POST',
            success: function (municipiotab) {

                $.each(municipiotab, function (i, item) {
                    $("#select-municipio").append("<option value='" + municipiotab[i].id + "'>" + municipiotab[i].nombre + "</option>");
                });
            }

        });
    });

    $("#select-municipio").change(function () {
        $("#select-localidad").empty();
        //alert($('#select-estados option:selected').val());
        var id = $('#select-municipio option:selected').val();

        $.ajax({
            url: URL + '/localidad',
            data: {id: id},
            type: 'POST',
            success: function (localidadtab) {

                $.each(localidadtab, function (i, item) {
                    $("#select-localidad").append("<option value='" + localidadtab[i].id + "'>" + localidadtab[i].nombre + "</option>");
                });
            }

        });
    });

    //alert('entro');

    $(".repdiv").hide();

    // Instanciamos el objeto IAS
    var ias = jQuery.ias({
        container: '.box-users',
        item: '.user-item',
        pagination: '.pagination',
        next: '.pagination .next_link',
        triggerPageThreshold: 5
    });

    // Boton para ir cargando cada pagina cuando lleguemos a un limite
    ias.extension(new IASTriggerExtension({
        text: 'Ver mas',
        offset: 3
    }));

    // GIF de efecto cargando
    ias.extension(new IASSpinnerExtension({
        src: URL + '/../assets/images/ajax-loader.gif'
    }));

    // Mensaje para cuando no existan mas resultados
    ias.extension(new IASNoneLeftExtension({
        text: 'No hay mas resultados'
    }));

    $("#mostrar").click(function () {
        $(".repdiv").show();
    });

    $("#ocultar").click(function () {
        $(".repdiv").hide();
    });



});
