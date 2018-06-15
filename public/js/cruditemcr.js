$(document).ready(function () {

    var caracteristica_id = $('#caracteristica_id').val();
    recargar_itemcaracteristica(caracteristica_id)
    //recarga_itemscrt();

});

$(document).ready(function () {


    ////----- Create the item caracteristica desde modal por ajaxs-----////
    

    $('#btn-saveitemcrtc').click(function(e){
        e.preventDefault();
        var token = $("input[name=_token]").val();
        var data = $('#formitrmcaracteristica').serialize();
        var url = $('#formitrmcaracteristica').attr('action');
        var post = $('#formitrmcaracteristica').attr('method');
        console.log(url);
        $.ajax({
            type : post,
            url : url,
            headers:{'X-CSRF-TOKEN':token},
            data : data,
            dataType : 'json',
            success: function (data) {
                console.clear();
                recargar_itemcaracteristica(data.caracteristica_id);
                $('#formitrmcaracteristica').trigger("reset");
                $('#createItemCaracteristica').modal('hide').delay(3000).fadeOut(350);
                showAlert('notifiitemcrt','success','Realizado con exito...');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    
    $('#btn-updateitemcrtc').click(function(e){
        e.preventDefault();
        var token = $("input[name=_token]").val();
        var data = $('#formitrmcaracteristicaupdate').serialize();
        var id = $('#idmod').val();

        var url = '/admin/updateitemcrt/'+id;
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
                    console.clear();
                recargar_itemcaracteristica(data.caracteristica_id);
                $('#formitrmcaracteristicaupdate').trigger("reset");
                $('#updateItemCaracteristica').modal('hide').delay(3000).fadeOut(350);
                showAlert('notifiitemcrt','success','Realizado con exito...');
                
                }
            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo realizar su peticion...');
                console.log('Error:', data);
            }
        });
    });


    $('#btn_veritemcrt').click(function () {
        var token = $("input[name=_token]").val();
        var caracteristica_id = $('#caracteristica_id').val();
        var data = {
            id: caracteristica_id
        };
        $.ajax({
            type : 'get',
            url : '/admin/listartodo',
            headers:{'X-CSRF-TOKEN':token},
            data : data,
            success: function (data) {
                console.clear();
                console.log('carga correcta...');
                $('#listitemscaracteristicas').empty().html(data);
            }
        });
    });


    


});

function recarga_itemscrt(){
    var token = $("input[name=_token]").val();
    var data = '';
    $.ajax({
        type : 'get',
        url : '/admin/listartodo',
        headers:{'X-CSRF-TOKEN':token},
        data : data,
        success: function (data) {
            console.log(data);
            $('#listitemscaracteristicas').empty().html(data);
        }
    });
    console.log('salto ajaxs');
}

function recargar_itemcaracteristica(id){
        //recargar este div id=listitemscaracteristicas
        var token = $("input[name=_token]").val();
        var url = '/admin/read_itemcrt';
        var data = {
            id: id
        };
        console.clear();
        $.ajax({
            type : 'get',
            url : url,
            headers:{'X-CSRF-TOKEN':token},
            data : data,
            success: function (data) {
                console.clear();
                $('#listitemscaracteristicas').empty().html(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }

    function showAlert(containerId, alertType, message) {
        $("#" + containerId).append('<div class="alert alert-' + alertType + '" id="alert' + containerId + '">' + message + '</div>');
        $("#alert" + containerId).alert();
        window.setTimeout(function () { $("#alert" + containerId).alert('close'); }, 3000);
    }



    //DELETE ITEM CARACTERISTICAS Y ACTUALIZA LA TABLA DE VISUALIZACION//

    var EliminarItemCrt = function(id, name, categoriaid){
    
    $.alertable.confirm('Esta seguro de eliminar el registro?').then(function() {
        var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();

        $.ajax({
            type: "get",
            url: '/admin/delete_itemcrt',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                console.clear();
                showAlert('notifiitemcrt','success','Item eliminado con exito...');
                recargar_itemcaracteristica(categoriaid);

            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo realizar la peticion...');
                console.log('Error:', data);
            }
        });

    });

}

    //UPDATE ITEM CARACTERISTICAS Y ACTUALIZA LA TABLA DE VISUALIZACION//


var EditarItemCrt = function(id){
    
    var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();
                $('#formitrmcaracteristicaupdate').trigger("reset");


        $.ajax({
            type: "get",
            url: '/admin/select_itemcrt',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                console.clear();
                $("#item_caracteristicamod").val(data.item_caracteristica);
                $("#detallemod").val(data.detalle);
                $("#iconunomod").val(data.iconuno);
                $("#icondosmod").val(data.icondos);
                $("#icontresmod").val(data.icontres);
                $("#iconcuatromod").val(data.iconcuatro);
                $("#iconcincomod").val(data.iconcinco);
                $("#iconseismod").val(data.iconseis);
                $("#caracteristica_idmod").val(data.caracteristica_id);
                if(data.estado=='1'){
                    //$("#estadomodon").val(data.estado);
                    $('#formitrmcaracteristicaupdate').find(':radio[id=estadomod][value="1"]').prop('checked', true);
                }else{
                    //$("#estadomodup").val(data.estado);
                    $('#formitrmcaracteristicaupdate').find(':radio[id=estadomod][value="0"]').prop('checked', true);
                }
                if(data.alinear=='1'){
                    $('#formitrmcaracteristicaupdate').find(':radio[id=alinearmod][value="1"]').prop('checked', true);
                }else{
                    $('#formitrmcaracteristicaupdate').find(':radio[id=alinearmod][value="0"]').prop('checked', true);
                }


                $("#idmod").val(data.id);
                console.log('copiado');
            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo encontrar el item...');
                console.log('Error:', data);
            }
        });
}

var VerItemCrt = function(id){
    var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();
                $('#formitrmcaracteristicaview').trigger("reset");


        $.ajax({
            type: "get",
            url: '/admin/select_itemcrt',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                console.clear();
                $("#item_caracteristicamodv").val(data.item_caracteristica);
                $("#detallemodv").val(data.detalle);
                $("#iconunomodv").val(data.iconuno);
                $("#icondosmodv").val(data.icondos);
                $("#icontresmodv").val(data.icontres);
                $("#iconcuatromodv").val(data.iconcuatro);
                $("#iconcincomodv").val(data.iconcinco);
                $("#iconseismodv").val(data.iconseis);
                $("#caracteristica_idmodv").val(data.caracteristica_id);
                $("#idmodv").val(data.id);
                
                if(data.estado=='1'){
                    //$("#estadomodon").val(data.estado);
                    $('#formitrmcaracteristicaview').find(':radio[id=estadomodv][value="1"]').prop('checked', true);
                }else{
                    //$("#estadomodup").val(data.estado);
                    $('#formitrmcaracteristicaview').find(':radio[id=estadomodv][value="0"]').prop('checked', true);
                }
                if(data.alinear=='1'){
                    $('#formitrmcaracteristicaview').find(':radio[id=alinearv][value="1"]').prop('checked', true);
                }else{
                    $('#formitrmcaracteristicaview').find(':radio[id=alinearv][value="0"]').prop('checked', true);
                }
                console.log('copiado');
            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo encontrar el item...');
                console.log('Error:', data);
            }
        });
}