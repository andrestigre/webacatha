$(document).ready(function () {

    var paquete_id = $('#paquete_id').val();
    recargar_charpaquete(paquete_id)
    //recarga_itemscrt();

});

$(document).ready(function () {


    ////----- Create the item caracteristica desde modal por ajaxs-----////
    
    $('#btn-saveitemcharpaquete').click(function(e){
        e.preventDefault();
        var token = $("input[name=_token]").val();
        var data = $('#formitemcharpaquete').serialize();
        var url = $('#formitemcharpaquete').attr('action');
        var post = $('#formitemcharpaquete').attr('method');
        console.log(url);
        $.ajax({
            type : post,
            url : url,
            headers:{'X-CSRF-TOKEN':token},
            data : data,
            dataType : 'json',
            success: function (data) {
                //console.clear();
                recargar_charpaquete(data.paquete_id);
                $('#formitemcharpaquete').trigger("reset");
                $('#createItemCaracteristica').modal('hide').delay(3000).fadeOut(350);
                showAlert('notifiitemcrt','success','Realizado con exito...');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    $('#btn_veritemchar').click(function () {
        var token = $("input[name=_token]").val();
        var paquete_id = $('#paquete_id').val();
                console.log('Recarga');

        recargar_charpaquete(paquete_id)
    });


    
    $('#btn-updateitemchar').click(function(e){
        e.preventDefault();
        var token = $("input[name=_token]").val();
        var data = $('#formitrmcharupdate').serialize();
        var id = $('#idmod').val();

        var url = '/admin/updateitemchar/'+id;
        $.ajax({
            type : 'post',
            url : url,
            headers:{'X-CSRF-TOKEN':token},
            data : data,
            dataType : 'json',
            success: function (data) {
                console.log(data);
                if(data.success == 'true'){
                    console.log('si llega');
                    //console.clear();
                $('#formitrmcharupdate').trigger("reset");
                $('#updateItemCaracteristica').modal('hide').delay(3000).fadeOut(350);
                showAlert('notifiitemcrt','success','Realizado con exito...');
                recargar_charpaquete(data.paquete_id);
                
                }
            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo realizar su peticion...');
                console.log('Error:', data);
            }
        });
    });
    

    


});



function recargar_charpaquete(id){
        //recargar este div id=listitemssoportes
        var token = $("input[name=_token]").val();
        var url = '/admin/read_itemcharpaquete';
        var data = {
            id: id
        };
        //console.clear();
        $.ajax({
            type : 'get',
            url : url,
            headers:{'X-CSRF-TOKEN':token},
            data : data,
            success: function (data) {
                //console.clear();
                $('#listitemspaquete').empty().html(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }

    



    //DELETE ITEM CARACTERISTICAS Y ACTUALIZA LA TABLA DE VISUALIZACION//

    var EliminarItemChar = function(id, name, paquete_id){
    
    $.alertable.confirm('Esta seguro de eliminar el registro?').then(function() {
        var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();

        $.ajax({
            type: "get",
            url: '/admin/delete_itemchar',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                console.clear();
                showAlert('notifiitemcrt','success','Item eliminado con exito...');
                recargar_charpaquete(paquete_id);

            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo realizar la peticion...');
                console.log('Error:', data);
            }
        });

    });

}

    //UPDATE ITEM CARACTERISTICAS Y ACTUALIZA LA TABLA DE VISUALIZACION//


var EditarItemChar = function(id){
    
    var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();
                $('#formitrmcharupdate').trigger("reset");


        $.ajax({
            type: "get",
            url: '/admin/select_itemchar',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                //console.clear();
                $("#car_paquetemod").val(data.car_paquete);
                $("#idmod").val(data.id);
                $("#paquete_idmod").val(data.paquete_id);
                if(data.estado=='1'){
                    $('#formitrmcharupdate').find(':radio[id=estadomod][value="1"]').prop('checked', true);
                }else{
                    $('#formitrmcharupdate').find(':radio[id=estadomod][value="0"]').prop('checked', true);
                }
                console.log('copiado');
            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo encontrar el item...');
                console.log('Error:', data);
            }
        });
}


var VerItemChar = function(id){
    var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();
                $('#formitrmcharview').trigger("reset");


        $.ajax({
            type: "get",
            url: '/admin/select_itemchar',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                $("#car_paquetev").val(data.car_paquete);
                $("#idv").val(data.id);
                $("#paquete_idv").val(data.paquete_id);
                if(data.estado=='1'){
                    $('#formitrmcharview').find(':radio[id=estadov][value="1"]').prop('checked', true);
                }else{
                    $('#formitrmcharview').find(':radio[id=estadov][value="0"]').prop('checked', true);
                }
                console.log('copiado');
            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo encontrar el item...');
                console.log('Error:', data);
            }
        });
}

