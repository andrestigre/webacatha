$(document).ready(function () {

    var comprobante_id = $('#comprobante_id').val();
    recargar_itemcomprobante(comprobante_id)
    //recarga_itemscrt();

});

$(document).ready(function () {


    ////----- Create the item caracteristica desde modal por ajaxs-----////
    

    $('#btn-saveitemcomp').click(function(e){
        e.preventDefault();
        var token = $("input[name=_token]").val();
        var data = $('#formitrmcomprobante').serialize();
        var url = $('#formitrmcomprobante').attr('action');
        var post = $('#formitrmcomprobante').attr('method');
        console.log(url);
        $.ajax({
            type : post,
            url : url,
            headers:{'X-CSRF-TOKEN':token},
            data : data,
            dataType : 'json',
            success: function (data) {
                //console.clear();
                recargar_itemcaracteristica(data.comprobante_id);
                $('#formitrmcomprobante').trigger("reset");
                $('#createItemComprobante').modal('hide').delay(3000).fadeOut(350);
                showAlert('notifiitemcrt','success','Realizado con exito...');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

                
    });

    
    $('#btn-updateitemcomp').click(function(e){
        e.preventDefault();
        var token = $("input[name=_token]").val();
        var data = $('#formitrmcomprobanteupdate').serialize();
        var id = $('#idmod').val();

        var url = '/admin/updateitemcomp/'+id;
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
                $('#formitrmcomprobanteupdate').trigger("reset");
                $('#updateItemComprobante').modal('hide').delay(3000).fadeOut(350);
                showAlert('notifiitemcrt','success','Realizado con exito...');
                recargar_itemcomprobante(data.comprobante_id);
                
                }
            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo realizar su peticion...');
                console.log('Error:', data);
            }
        });
    });


    /*$('#btn_veritemcrt').click(function () {
        var token = $("input[name=_token]").val();
        var comprobante_id = $('#comprobante_id').val();
        var data = {
            id: comprobante_id
        };
        $.ajax({
            type : 'get',
            url : '/admin/listartodocomp',
            headers:{'X-CSRF-TOKEN':token},
            data : data,
            success: function (data) {
                //console.clear();
                console.log('carga correcta...');
                $('#listitemscomprobantes').empty().html(data);
            }
        });
    });
    */


    


});

/*
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
*/

function recargar_itemcomprobante(id){
        //recargar este div id=listitemscaracteristicas
        var token = $("input[name=_token]").val();
        var url = '/admin/read_itemcomp';
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
                $('#listitemscomprobantes').empty().html(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }

    



    //DELETE ITEM CARACTERISTICAS Y ACTUALIZA LA TABLA DE VISUALIZACION//

    var EliminarItemComp = function(id, name, comprobanteid){
    
    $.alertable.confirm('Esta seguro de eliminar el registro?').then(function() {
        var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();

        $.ajax({
            type: "get",
            url: '/admin/delete_itemcomp',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                console.clear();
                showAlert('notifiitemcrt','success','Item eliminado con exito...');
                recargar_itemcomprobante(comprobanteid);

            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo realizar la peticion...');
                console.log('Error:', data);
            }
        });

    });

}

    //UPDATE ITEM CARACTERISTICAS Y ACTUALIZA LA TABLA DE VISUALIZACION//


var EditarItemComp = function(id){
    
    var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();
                $('#formitrmcomprobanteupdate').trigger("reset");


        $.ajax({
            type: "get",
            url: '/admin/select_itemcomp',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                //console.clear();
                $("#item_comprobantemod").val(data.item_comprobante);
                $("#contenidomod").val(data.contenido);
                $("#efectomod").val(data.efecto);
                $("#comprobante_idmod").val(data.comprobante_id);
                if(data.estado=='1'){
                    $('#formitrmcomprobanteupdate').find(':radio[id=estadomod][value="1"]').prop('checked', true);
                }else{
                    $('#formitrmcomprobanteupdate').find(':radio[id=estadomod][value="0"]').prop('checked', true);
                }
                if(data.textalinear=='1'){
                    $('#formitrmcomprobanteupdate').find(':radio[id=textalinearmod][value="1"]').prop('checked', true);
                }else{
                    $('#formitrmcomprobanteupdate').find(':radio[id=textalinearmod][value="0"]').prop('checked', true);
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

var VerItemComp = function(id){
    var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();
                $('#formitrmcomprobanteview').trigger("reset");


        $.ajax({
            type: "get",
            url: '/admin/select_itemcomp',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                $("#item_comprobantev").val(data.item_comprobante);
                $("#contenidov").val(data.contenido);
                $("#efectov").val(data.efecto);
                $("#estadov").val(data.estado);
                $("#comprobante_idv").val(data.comprobante_id);
                if(data.estado=='1'){
                    $('#formitrmcomprobanteupdate').find(':radio[id=estadov][value="1"]').prop('checked', true);
                }else{
                    $('#formitrmcomprobanteupdate').find(':radio[id=estadov][value="0"]').prop('checked', true);
                }
                if(data.textalinear=='1'){
                    $('#formitrmcomprobanteupdate').find(':radio[id=textalinearv][value="1"]').prop('checked', true);
                }else{
                    $('#formitrmcomprobanteupdate').find(':radio[id=textalinearv][value="0"]').prop('checked', true);
                }
                $("#idv").val(data.id);
                console.log('copiado');
            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo encontrar el item...');
                console.log('Error:', data);
            }
        });
}