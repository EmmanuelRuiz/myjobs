$(document).ready(function(){
	
	//alert('entro');

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
		src: URL+'/../assets/images/ajax-loader.gif'
	}));
	
	// Mensaje para cuando no existan mas resultados
	ias.extension(new IASNoneLeftExtension({
		text: 'No hay mas resultados'
	}));
	
	ias.on('ready', function(event){
		followButton();
	});
	
	ias.on('rendered', function(event){
		followButton();
	});
	
});


//logica para el boton de follow
function followButton(){
	$(".btn-follow").unbind("click").click(function(){
		$.ajax({
			url: URL+'/follow',
			type: 'POST',
			data: {followed: $(this).attr("data-followed")},
			success: function(response){
				console.log(response);
			}
		});
	});
	
	$(".btn-unfollow").unbind("click").click(function(){
		$.ajax({
			url: URL+'/unfollow',
			type: 'POST',
			data: {followed: $(this).attr("data-followed")},
			success: function(response){
				console.log(response);
			}
		});
	});
}


