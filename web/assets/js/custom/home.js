
$(document).ready(function(){var a=jQuery.ias({container:"#timeline .box-content",item:".opinion-item",pagination:"#timeline .pagination",next:"#timeline .pagination .next_link",triggerPageThreshold:5});a.extension(new IASTriggerExtension({text:"Ver mas",offset:3}));a.extension(new IASSpinnerExtension({src:URL+"/../assets/images/ajax-loader.gif"}));a.extension(new IASNoneLeftExtension({text:"No hay mas resultados"}));a.on("ready",function(b){buttons()});a.on("rendered",function(b){buttons()})});function buttons(){$('[data-toggle="tooltip"]').tooltip();$(".btn-img").unbind("click").click(function(){$(this).parent().find(".pub-image").fadeToggle()});$(".btn-delete-pub").unbind("click").click(function(){$(this).parent().parent().parent().parent().parent().parent().addClass("hidden");$.ajax({url:URL+"/opinion/remove/"+$(this).attr("data-id"),type:"GET",success:function(a){console.log(a)}})});$(".btn-like").unbind("click").click(function(){$(this).addClass("hidden");$(this).parent().find(".btn-unlike").removeClass("hidden");$.ajax({url:URL+"/like/"+$(this).attr("data-id"),type:"GET",success:function(a){console.log(a)}})});$(".btn-unlike").unbind("click").click(function(){$(this).addClass("hidden");$(this).parent().find(".btn-like").removeClass("hidden");$.ajax({url:URL+"/unlike/"+$(this).attr("data-id"),type:"GET",success:function(a){console.log(a)}})})};