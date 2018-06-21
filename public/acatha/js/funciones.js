
$(document).ready(function () {

$('.completarpago').click(function(e){
        e.preventDefault();
        var token = $("input[name=_token]").val();
        var paquete_id = $('#tipopaquete_idmodal').val();
        var precio = $('#preciomodal').val();
        var paqueteseleccionado = $('#paqinputmodal').val();
        var tipopago = $('#tipopago').val();
        if(tipopago=='0'){
        	alert("Deposito o transferencia");
        }
        if(tipopago=='1'){
        	alert("PayPal");
        }
        if(tipopago=='2'){
        	alert("PayPhone");
        }

        $.ajax({
            type : 'post',
            url : url,
            headers:{'X-CSRF-TOKEN':token},
            data : data,
            dataType : 'json',
            success: function (data) {
                //console.clear();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

                
    });

});

var ComprarPaquete = function(id){
	if(id=='4'){
	$('#divdescripcion').show();
	}else{
	$('#divdescripcion').hide();
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