
<!--MODAL ADD NEW-->

<div class="modal fade" id="createItemComprobante" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="favoritesModalLabel">Add Item Comprobante</h4>
            </div>
            <div class="modal-body">

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif


                <form method="POST" id="formitrmcomprobante" action="{{ url('/admin/storeitemcomp') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                    <div class="form-group {{ $errors->has('item_comprobante') ? 'has-error' : ''}}">
                        <label for="item_comprobante" class="col-md-4 control-label">{{ 'Item Comprobante' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="item_comprobante" type="text" id="item_comprobante" value="{{ $itemcomprobante->item_comprobante or ''}}" >
                            {!! $errors->first('item_comprobante', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
                        <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="contenido" type="textarea" id="contenido" >{{ $itemcomprobante->contenido or ''}}</textarea>
                            {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('efecto') ? 'has-error' : ''}}">
                        <label for="efecto" class="col-md-4 control-label">{{ 'Efecto' }}</label>
                        <div class="col-md-6">
                            <select name="efecto" class="form-control" id="efecto" >
                                @foreach (json_decode('{"fadeInLeft":"fadeInLeft","zoomIn":"zoomIn","fadeInRight":"fadeInRight"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($caracteristica->efecto) && $caracteristica->efecto == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('efecto', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                        <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label><input name="estado" type="radio" value="1" {{ (isset($itemcomprobante) && 1 == $itemcomprobante->estado) ? 'checked' : '' }}> Yes</label>
                            </div>
                            <div class="radio">
                                <label><input name="estado" type="radio" value="0" @if (isset($itemcomprobante)) {{ (0 == $itemcomprobante->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
                            </div>
                            {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('textalinear') ? 'has-error' : ''}}">
                        <label for="textalinear" class="col-md-4 control-label">{{ 'Alinear Text' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label>
                                    <input name="textalinear" type="radio" value="0" > Derecha</label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="textalinear" type="radio" value="1" checked> Izquierda</label>
                                    </div>
                                    {!! $errors->first('textalinear', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <input class="form-control" name="comprobante_id" type="hidden" id="comprobante_id" value="{{ $comprobante->id or ''}}" >
                            {!! $errors->first('comprobante_id', '<p class="help-block">:message</p>') !!}

                        </form>

                    </div>


                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                <button type="button" 
                                class="btn btn-default" 
                                data-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-success" id="btn-saveitemcomp">
                                 ADD
                             </button>
                         </div>
                     </div>
                 </div>



             </div>
         </div>
     </div>


     <!-- MODAL UPDATE -->

     <div class="modal fade" id="updateItemComprobante" tabindex="-1" role="dialog" aria-labelledby="UpdateItemCrtModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="UpdateItemCrtModalLabel">Update Item Comprobante</h4>
                </div>
                <div class="modal-body">

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif


                    <form method="POST" id="formitrmcomprobanteupdate" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                         <div class="form-group {{ $errors->has('item_comprobante') ? 'has-error' : ''}}">
                        <label for="item_comprobante" class="col-md-4 control-label">{{ 'Item Comprobante' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="item_comprobante" type="text" id="item_comprobantemod" value="{{ $itemcomprobante->item_comprobante or ''}}" >
                            {!! $errors->first('item_comprobante', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
                        <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="contenido" type="textarea" id="contenidomod" >{{ $itemcomprobante->contenido or ''}}</textarea>
                            {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('efecto') ? 'has-error' : ''}}">
                        <label for="efecto" class="col-md-4 control-label">{{ 'Efecto' }}</label>
                        <div class="col-md-6">
                            <select name="efecto" class="form-control" id="efectomod" >
                                @foreach (json_decode('{"fadeInLeft":"fadeInLeft","zoomIn":"zoomIn","fadeInRight":"fadeInRight"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($caracteristica->efecto) && $caracteristica->efecto == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('efecto', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                        <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label><input name="estado" type="radio" id="estadomod" value="1" > Yes</label>
                            </div>
                            <div class="radio">
                                <label><input name="estado" type="radio" id="estadomod" value="0" > No</label>
                            </div>
                            {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('textalinear') ? 'has-error' : ''}}">
                        <label for="textalinear" class="col-md-4 control-label">{{ 'Alinear Text' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label>
                                    <input name="textalinear" type="radio" id="textalinearmod" value="0" > Derecha</label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="textalinear" type="radio" id="textalinearmod" value="1" checked> Izquierda</label>
                                    </div>
                                    <div class="radio">
                                    <label>
                                        <input name="textalinear" type="radio" id="textalinearmod" value="2" checked> Centro</label>
                                    </div>
                                    {!! $errors->first('textalinear', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <input class="form-control" name="comprobante_id" type="hidden" id="comprobante_id" value="{{ $comprobante->id or ''}}" >
                            <input class="form-control" name="id" type="hidden" id="idmod" >
                            {!! $errors->first('comprobante_id', '<p class="help-block">:message</p>') !!}


                            </form>

                        </div>


                        <div class="modal-footer">
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-4">
                                    <button type="button" 
                                    class="btn btn-default" 
                                    data-dismiss="modal">Close</button>

                                    <button type="submit" class="btn btn-success" id="btn-updateitemcomp">
                                     UPDATE
                                 </button>
                             </div>
                         </div>
                     </div>



                 </div>
             </div>
         </div>

         <!-- MODAL VIEW -->

         <div class="modal fade" id="viewItemComprobante" tabindex="-1" role="dialog" aria-labelledby="ViewItemCrtModalLabel">
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


                        <form method="POST" id="formitrmcomprobanteview" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                
                                <div class="form-group {{ $errors->has('item_comprobante') ? 'has-error' : ''}}">
                        <label for="item_comprobante" class="col-md-4 control-label">{{ 'Item Comprobante' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="item_comprobante" type="text" id="item_comprobantev" value="{{ $itemcomprobante->item_comprobante or ''}}" >
                            {!! $errors->first('item_comprobante', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
                        <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="contenido" type="textarea" id="contenidov" >{{ $itemcomprobante->contenido or ''}}</textarea>
                            {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('efecto') ? 'has-error' : ''}}">
                        <label for="efecto" class="col-md-4 control-label">{{ 'Efecto' }}</label>
                        <div class="col-md-6">
                            <select name="efecto" class="form-control" id="efectov" >
                                @foreach (json_decode('{"fadeInLeft":"fadeInLeft","zoomIn":"zoomIn","fadeInRight":"fadeInRight"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($caracteristica->efecto) && $caracteristica->efecto == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('efecto', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                        <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label><input name="estado" type="radio" id="estadov" value="1" {{ (isset($itemcomprobante) && 1 == $itemcomprobante->estado) ? 'checked' : '' }}> Yes</label>
                            </div>
                            <div class="radio">
                                <label><input name="estado" type="radio" id="estadov" value="0" @if (isset($itemcomprobante)) {{ (0 == $itemcomprobante->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
                            </div>
                            {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('textalinear') ? 'has-error' : ''}}">
                        <label for="textalinear" class="col-md-4 control-label">{{ 'Alinear Text' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label>
                                    <input name="textalinear" type="radio" id="textalinearv" value="0" > Derecha</label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="textalinear" type="radio" id="textalinearv" value="1" checked> Izquierda</label>
                                    </div>
                                    {!! $errors->first('textalinear', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <input class="form-control" name="comprobante_id" type="hidden" id="comprobante_idv" value="{{ $comprobante->id or ''}}" >
                            <input class="form-control" name="id" type="hidden" id="idv" >
                            {!! $errors->first('comprobante_id', '<p class="help-block">:message</p>') !!}

                            
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