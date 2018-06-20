
$(document).ready(function () {

/*
data-paquete
*/
/*
$('#comprarPaquete').click(function(e){
        e.preventDefault();
        alert("show");
        var token = $("input[name=_token]").val();
        var paquete = $(this).data('paquete');
        console.log(paquete);
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
*/
});

var ComprarPaquete = function(id){
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
                //console.clear();
                
                $("#detallemodal").val(data.paquete.detalle);
                $("#preciomodal").val(data.paquete.precio);
                $("#idmodal").val(data.paquete.id);

                $("#detallelabel").text(data.paquete.detalle);
                if((data.paquete.precio) == null){
                	var precio = "Por definir";
                }else{
                	var precio = data.paquete.precio+' / '+data.paquete.periodo;
                }
                $("#preciolabel").text('$ '+precio);
//recibir array cadena caracteristicas de paquete
$.each(data.caracteristicas, function(key,value) {
     console.log(value.car_paquete);
}); 
                	/*$.each(data.caracteristicas,function(){
			      });*/
                
                //console.clear();
                console.log('copiado');
            },
            error: function (data) {
                //showAlert('notifiitemcrt','danger','No se pudo encontrar el item...');
                console.log('Error:', data);
            }
        });
}