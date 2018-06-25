
$(document).ready(function () {

	$('.completarpago').click(function(e){
		e.preventDefault();

		var token = $("input[name=_token]").val();
		var paquete_id = $('#tipopaquete_idmodal').val();
		var precio = $('#preciomodal').val();
		var paqueteseleccionado = $('#paqinputmodal').val();
		var tipopago = $('#tipopago').val();
		var idpaquete = $('#idmodal').val();

		if ($('#nombrecliente').val() === '') {
			alert('Ingrese nombre porfavor');
			$('#nombrecliente').focus();
			return false;
		}else{
			var nombrecliente = $('#nombrecliente').val();
		}
		if ($('#emailcliente').val() === '') {
			alert('Ingrese un correo porfavor');
			$('#emailcliente').focus();
			return false;
		}else{
			var emailcliente = $('#emailcliente').val();
		}
		if ($('#contactocliente').val() === '') {
			alert('Ingrese un correo porfavor');
			$('#contactocliente').focus();
			return false;
		}else{
			var contactocliente = $('#contactocliente').val();
		}
		var datoscliente = nombrecliente+"&"+emailcliente+"&"+contactocliente;



		var tipopaquete = $('#tipopaquete_idmodal').val();

		if (tipopaquete === '4') {


			if ($('#descripcionmod').val() === '') {
				alert('Ingrese una descripción porfavor');
				$('#descripcionmod').focus();
				return false;
			}else{
				var descripcionmod = $('#descripcionmod').val();
			}

			var url = '/addPackCustom/'+datoscliente+'&'+descripcionmod+'&'+tipopaquete;

			window.location.href = url;

		}else{




			if(tipopago=='0'){
				alert("Deposito o transferencia");
			}
			if(tipopago=='1'){
				var url = '/addItem/'+idpaquete+'/'+datoscliente;
			}
			if(tipopago=='2'){
				alert("PayPhone");
			}

			var data = {
				id: idpaquete
			};

			window.location.href = url;


		}


	});

});

var ComprarPaquete = function(id){

//var formselecpaquete = $("#formselecpaquete").serialize();
var $form = $(this).parents('form');

	if(id=='4'){
		$('#divdescripcion').show();
	$('#ocultarmetodopago').hide();
	}else{
		$('#divdescripcion').hide();
$('#ocultarmetodopago').show();
	}
	var token = $("input[name=_token]").val();
	var data = {
		id: id
	};

	$.ajax({
		type: "get",
		url: '/admin/select_paquete',
		headers:{'X-CSRF-TOKEN':token},
		data: data,
		dataType: 'json',
		success: function (data) {
                //console.log(data.paquete.detalle);
                //console.log(data.caracteristicas);
                //console.log(data.paquete.id);
                //console.clear();
                $("ul.listchar").empty();
                $("#detallemodal").val(data.paquete.detalle);
                $("#preciomodal").val(data.paquete.precio);
                $("#idmodal").val(data.paquete.id);
                $("#tipopaquete_idmodal").val(data.paquete.tipopaquete_id);

                $("#paqueteseleccionado").text('Paquete '+data.tipopaquete.tipo_paquete);
                $("#paqinputmodal").val('Paquete '+data.tipopaquete.tipo_paquete);

                $("#detallelabel").text(data.paquete.detalle);
                if((data.paquete.precio) == null){
                	var precio = "Por definir";
                }else{
                	var precio = data.paquete.precio+' / '+data.paquete.periodo;
                }
                $("#preciolabel").text('$ '+precio);
                var listachar = $('ul.listchar');
//recibir array cadena caracteristicas de paquete
$.each(data.caracteristicas, function(key,value) {
	var li = $('<li/>')
	.addClass('list-group-item')
	.attr('role', 'menuitem')
	.appendTo(listachar);
	var aaa = $('<a/>')
	.addClass('ui-all')
	.text(value.car_paquete)
	.appendTo(li);
}); 

console.clear();
console.log('copiado');
},
error: function (data) {
                //showAlert('notifiitemcrt','danger','No se pudo encontrar el item...');
                console.log('Error:', data);
            }
        });
}