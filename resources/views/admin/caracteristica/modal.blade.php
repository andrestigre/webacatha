
<!--MODAL ADD NEW-->

<div class="modal fade" id="createItemCaracteristica" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="favoritesModalLabel">Add Item Características</h4>
            </div>
            <div class="modal-body">

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif


                <form method="POST" id="formitrmcaracteristica" action="{{ url('/admin/storeitemcrt') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                    <div class="form-group {{ $errors->has('item_caracteristica') ? 'has-error' : ''}}">
                        <label for="item_caracteristica" class="col-md-4 control-label">{{ 'Item Caracteristica' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="item_caracteristica" type="text" id="item_caracteristica" value="{{ $itemcaracteristica->item_caracteristica or ''}}" >
                            {!! $errors->first('item_caracteristica', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('detalle') ? 'has-error' : ''}}">
                        <label for="detalle" class="col-md-4 control-label">{{ 'Detalle' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="detalle" type="text" id="detalle" value="{{ $itemcaracteristica->detalle or ''}}" >
                            {!! $errors->first('detalle', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconuno') ? 'has-error' : ''}}">
                        <label for="iconuno" class="col-md-4 control-label">{{ 'Iconuno' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconuno" type="text" id="iconuno" value="{{ $itemcaracteristica->iconuno or ''}}" >
                            {!! $errors->first('iconuno', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('icondos') ? 'has-error' : ''}}">
                        <label for="icondos" class="col-md-4 control-label">{{ 'Icondos' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="icondos" type="text" id="icondos" value="{{ $itemcaracteristica->icondos or ''}}" >
                            {!! $errors->first('icondos', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('icontres') ? 'has-error' : ''}}">
                        <label for="icontres" class="col-md-4 control-label">{{ 'Icontres' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="icontres" type="text" id="icontres" value="{{ $itemcaracteristica->icontres or ''}}" >
                            {!! $errors->first('icontres', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconcuatro') ? 'has-error' : ''}}">
                        <label for="iconcuatro" class="col-md-4 control-label">{{ 'Iconcuatro' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconcuatro" type="text" id="iconcuatro" value="{{ $itemcaracteristica->iconcuatro or ''}}" >
                            {!! $errors->first('iconcuatro', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconcinco') ? 'has-error' : ''}}">
                        <label for="iconcinco" class="col-md-4 control-label">{{ 'Iconcinco' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconcinco" type="text" id="iconcinco" value="{{ $itemcaracteristica->iconcinco or ''}}" >
                            {!! $errors->first('iconcinco', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconseis') ? 'has-error' : ''}}">
                        <label for="iconseis" class="col-md-4 control-label">{{ 'Iconseis' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconseis" type="text" id="iconseis" value="{{ $itemcaracteristica->iconseis or ''}}" >
                            {!! $errors->first('iconseis', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                        <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label><input name="estado" type="radio" value="1" {{ (isset($itemcaracteristica) && 1 == $itemcaracteristica->estado) ? 'checked' : '' }}> Yes</label>
                            </div>
                            <div class="radio">
                                <label><input name="estado" type="radio" value="0" @if (isset($itemcaracteristica)) {{ (0 == $itemcaracteristica->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
                            </div>
                            {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <input class="form-control" name="caracteristica_id" type="hidden" id="caracteristica_id" value="{{ $caracteristica->id or ''}}" >
                    {!! $errors->first('caracteristica_id', '<p class="help-block">:message</p>') !!}
                    

                </form>

            </div>


            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-4">
                        <button type="button" 
                        class="btn btn-default" 
                        data-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-success" id="btn-saveitemcrtc">
                         ADD
                     </button>
                 </div>
             </div>
         </div>



     </div>
 </div>
</div>


<!-- MODAL UPDATE -->

<div class="modal fade" id="updateItemCaracteristica" tabindex="-1" role="dialog" aria-labelledby="UpdateItemCrtModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="UpdateItemCrtModalLabel">Update Item Características</h4>
            </div>
            <div class="modal-body">

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif


                <form method="POST" id="formitrmcaracteristicaupdate" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                    <div class="form-group {{ $errors->has('item_caracteristica') ? 'has-error' : ''}}">
                        <label for="item_caracteristica" class="col-md-4 control-label">{{ 'Item Caracteristica' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="item_caracteristica" id="item_caracteristicamod" type="text" >
                            {!! $errors->first('item_caracteristica', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('detalle') ? 'has-error' : ''}}">
                        <label for="detalle" class="col-md-4 control-label">{{ 'Detalle' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="detalle" id="detallemod" type="text" id="detalle">
                            {!! $errors->first('detalle', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconuno') ? 'has-error' : ''}}">
                        <label for="iconuno" class="col-md-4 control-label">{{ 'Iconuno' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconuno" id="iconunomod" type="text" id="iconuno" >
                            {!! $errors->first('iconuno', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('icondos') ? 'has-error' : ''}}">
                        <label for="icondos" class="col-md-4 control-label">{{ 'Icondos' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="icondos" id="icondosmod" type="text" id="icondos" >
                            {!! $errors->first('icondos', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('icontres') ? 'has-error' : ''}}">
                        <label for="icontres" class="col-md-4 control-label">{{ 'Icontres' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="icontres" id="icontresmod" type="text" id="icontres" >
                            {!! $errors->first('icontres', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconcuatro') ? 'has-error' : ''}}">
                        <label for="iconcuatro" class="col-md-4 control-label">{{ 'Iconcuatro' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconcuatro" id="iconcuatromod" type="text" id="iconcuatro">
                            {!! $errors->first('iconcuatro', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconcinco') ? 'has-error' : ''}}">
                        <label for="iconcinco" class="col-md-4 control-label">{{ 'Iconcinco' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconcinco" id="iconcincomod" type="text" id="iconcinco" >
                            {!! $errors->first('iconcinco', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconseis') ? 'has-error' : ''}}">
                        <label for="iconseis" class="col-md-4 control-label">{{ 'Iconseis' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconseis" id="iconseismod" type="text" id="iconseis">
                            {!! $errors->first('iconseis', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                        <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label><input name="estado" id="estadomod" type="radio" value="1" > Activo</label>
                            </div>
                            <div class="radio">
                                <label><input name="estado" id="estadomod" type="radio" value="0" > Inactivo</label>
                            </div>
                            {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <input class="form-control" name="caracteristica_id" type="hidden" id="caracteristica_idmod" >
                    <input class="form-control" name="id" type="hidden" id="idmod"  >
                    {!! $errors->first('caracteristica_id', '<p class="help-block">:message</p>') !!}
                    

                </form>

            </div>


            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-4">
                        <button type="button" 
                        class="btn btn-default" 
                        data-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-success" id="btn-updateitemcrtc">
                         UPDATE
                     </button>
                 </div>
             </div>
         </div>



     </div>
 </div>
</div>

<!-- MODAL VIEW -->

<div class="modal fade" id="viewItemCaracteristica" tabindex="-1" role="dialog" aria-labelledby="ViewItemCrtModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="UpdateItemCrtModalLabel">Ver Item Características</h4>
            </div>
            <div class="modal-body">

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif


                <form method="POST" id="formitrmcaracteristicaview" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                    <div class="form-group {{ $errors->has('item_caracteristica') ? 'has-error' : ''}}">
                        <label for="item_caracteristica" class="col-md-4 control-label">{{ 'Item Caracteristica' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="item_caracteristica" id="item_caracteristicamodv" type="text" >
                            {!! $errors->first('item_caracteristica', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('detalle') ? 'has-error' : ''}}">
                        <label for="detalle" class="col-md-4 control-label">{{ 'Detalle' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="detalle" id="detallemodv" type="text" id="detalle">
                            {!! $errors->first('detalle', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconuno') ? 'has-error' : ''}}">
                        <label for="iconuno" class="col-md-4 control-label">{{ 'Iconuno' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconuno" id="iconunomodv" type="text" id="iconuno" >
                            {!! $errors->first('iconuno', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('icondos') ? 'has-error' : ''}}">
                        <label for="icondos" class="col-md-4 control-label">{{ 'Icondos' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="icondos" id="icondosmodv" type="text" id="icondos" >
                            {!! $errors->first('icondos', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('icontres') ? 'has-error' : ''}}">
                        <label for="icontres" class="col-md-4 control-label">{{ 'Icontres' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="icontres" id="icontresmodv" type="text" id="icontres" >
                            {!! $errors->first('icontres', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconcuatro') ? 'has-error' : ''}}">
                        <label for="iconcuatro" class="col-md-4 control-label">{{ 'Iconcuatro' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconcuatro" id="iconcuatromodv" type="text" id="iconcuatro">
                            {!! $errors->first('iconcuatro', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconcinco') ? 'has-error' : ''}}">
                        <label for="iconcinco" class="col-md-4 control-label">{{ 'Iconcinco' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconcinco" id="iconcincomodv" type="text" id="iconcinco" >
                            {!! $errors->first('iconcinco', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('iconseis') ? 'has-error' : ''}}">
                        <label for="iconseis" class="col-md-4 control-label">{{ 'Iconseis' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="iconseis" id="iconseismodv" type="text" id="iconseis">
                            {!! $errors->first('iconseis', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                        <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label><input name="estado" id="estadomodv" type="radio" value="1" > Activo</label>
                            </div>
                            <div class="radio">
                                <label><input name="estado" id="estadomodv" type="radio" value="0" > Inactivo</label>
                            </div>
                            {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <input class="form-control" name="caracteristica_id" type="hidden" id="caracteristica_idmodv" >
                    <input class="form-control" name="id" type="hidden" id="idmodv"  >
                    {!! $errors->first('caracteristica_id', '<p class="help-block">:message</p>') !!}
                    

                </form>

            </div>


            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-4">
                        <button type="button" 
                        class="btn btn-default" 
                        data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>