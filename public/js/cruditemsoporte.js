$(document).ready(function () {

    var soporte_id = $('#soporte_idprincipal').val();
    recargar_itemsoporte(soporte_id)
    //recarga_itemscrt();

});

$(document).ready(function () {


    ////----- Create the item caracteristica desde modal por ajaxs-----////
    

    $('#btn-saveitemsop').click(function(e){
        e.preventDefault();
        var token = $("input[name=_token]").val();
        var data = $('#formitrmsoporte').serialize();
        var url = $('#formitrmsoporte').attr('action');
        var post = $('#formitrmsoporte').attr('method');
        console.log(url);
        $.ajax({
            type : post,
            url : url,
            headers:{'X-CSRF-TOKEN':token},
            data : data,
            dataType : 'json',
            success: function (data) {
                //console.clear();
                recargar_itemsoporte(data.soporte_id);
                $('#formitrmsoporte').trigger("reset");
                $('#createItemSoporte').modal('hide').delay(3000).fadeOut(350);
                showAlert('notifiitemcrt','success','Realizado con exito...');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

                
    });

    
    $('#btn-updateitemsop').click(function(e){
        e.preventDefault();
        var token = $("input[name=_token]").val();
        var data = $('#formitrmsoporteupdate').serialize();
        var id = $('#idmod').val();

        var url = '/admin/updateitemsop/'+id;
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
                $('#formitrmsoporteupdate').trigger("reset");
                $('#updateItemsoporte').modal('hide').delay(3000).fadeOut(350);
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

function recargar_itemsoporte(id){
        //recargar este div id=listitemssoportes
        var token = $("input[name=_token]").val();
        var url = '/admin/read_itemsop';
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
                $('#listitemssoportes').empty().html(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }

    



    //DELETE ITEM CARACTERISTICAS Y ACTUALIZA LA TABLA DE VISUALIZACION//

    var EliminarItemSop = function(id, name, soporteid){
    
    $.alertable.confirm('Esta seguro de eliminar el registro?').then(function() {
        var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();

        $.ajax({
            type: "get",
            url: '/admin/delete_itemsop',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                console.clear();
                showAlert('notifiitemcrt','success','Item eliminado con exito...');
                recargar_itemsoporte(soporteid);

            },
            error: function (data) {
                showAlert('notifiitemcrt','danger','No se pudo realizar la peticion...');
                console.log('Error:', data);
            }
        });

    });

}

    //UPDATE ITEM CARACTERISTICAS Y ACTUALIZA LA TABLA DE VISUALIZACION//


var EditarItemSop = function(id){
    
    var token = $("input[name=_token]").val();
        var data = {
            id: id
        };
        console.clear();
                $('#formitrmsoporteupdate').trigger("reset");


        $.ajax({
            type: "get",
            url: '/admin/select_itemsop',
            headers:{'X-CSRF-TOKEN':token},
            data: data,
            dataType: 'json',
            success: function (data) {
                //console.clear();
                $("#titulomod").val(data.titulo);
                $("#contenidomod").val(data.contenido);
                $("#enlacemod").val(data.enlace);
                $("#tituloenlacemod").val(data.tituloenlace);
                $("#iconomod").val(data.icono);
                $("#tituloanexomod").val(data.tituloanexo);
                $("#textoanexomod").val(data.textoanexo);
                $("#soporte_idmod").val(data.soporte_id);
                $("#idmod").val(data.id);
                if(data.estado=='1'){
                    $('#formitrmsoporteupdate').find(':radio[id=estadomod][value="1"]').prop('checked', true);
                }else{
                    $('#formitrmsoporteupdate').find(':radio[id=estadomod][value="0"]').prop('checked', true);
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