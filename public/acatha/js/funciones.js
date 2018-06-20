
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
                console.log(data);
                //console.clear();
                
                $("#detallemodal").val(data.detalle);
                $("#preciomodal").val(data.precio);
                $("#idmodal").val(data.id);

                $("#detallelabel").text(data.detalle);
                if((data.precio) == null){
                	var precio = "Por definir";
                }else{
                	var precio = data.precio+' / '+data.periodo;
                }
                $("#preciolabel").text('$ '+precio);
                /*
                $('#formselecpaquete input[id=detallemodal]').val(data.detalle);
                $('#formselecpaquete input[id=preciomodal]').val(data.precio);
                $('#formselecpaquete input[id=idmodal]').val(data.id);
                */
                console.clear();
                /*
                document.getElementById("detallemodal").value = data.detalle;
                document.getElementById("preciomodal").value = data.precio;
                document.getElementById("idmodal").value = data.id;
                */
                console.log('copiado');
            },
            error: function (data) {
                //showAlert('notifiitemcrt','danger','No se pudo encontrar el item...');
                console.log('Error:', data);
            }
        });
}