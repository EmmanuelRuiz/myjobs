$(document).ready(function(){
	
	// Instanciamos el objeto IAS
	var ias = jQuery.ias({
		container: '.profile-box .opinion-item',
		item: '.opinion-item',
		pagination: '.profile-box .pagination',
		next: '.profile-box .pagination .next_link',
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
		buttons();
	});
	
	ias.on('rendered', function(event){
		buttons();
	});
	
});

function buttons(){
	
	$('[data-toggle="tooltip"]').tooltip();
	
	$(".btn-img").unbind("click").click(function(){
		$(this).parent().find('.pub-image').fadeToggle();
	});
	
	$(".btn-delete-pub").unbind('click').click(function(){
		//alert(URL+'/opinion/remove/'+$(this).attr('data-id'));
		
		$(this).parent().parent().parent().parent().parent().parent().addClass('hidden');
		
		$.ajax({
			url: URL+'/opinion/remove/'+$(this).attr('data-id'),
			type: 'GET',
			success: function(response){
				console.log(response);
			}
		});
	});
	
	$(".btn-like").unbind('click').click(function(){
		
		$(this).addClass("hidden");
		$(this).parent().find('.btn-unlike').removeClass("hidden");
		
		$.ajax({
			url: URL+'/like/'+$(this).attr('data-id'),
			type: 'GET',
			success: function(response){
				console.log(response);
			}
		});
	});
	
	$(".btn-unlike").unbind('click').click(function(){
		
		$(this).addClass("hidden");
		$(this).parent().find('.btn-like').removeClass("hidden");
		
		$.ajax({
			url: URL+'/unlike/'+$(this).attr('data-id'),
			type: 'GET',
			success: function(response){
				console.log(response);
			}
		});
	});
}


