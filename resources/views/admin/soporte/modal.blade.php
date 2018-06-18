
<!--MODAL ADD NEW-->

<div class="modal fade" id="createItemSoporte" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="favoritesModalLabel">Add Item soporte</h4>
            </div>
            <div class="modal-body">

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif


                <form method="POST" id="formitrmsoporte" action="{{ url('/admin/storeitemsop') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
                        <label for="titulo" class="col-md-4 control-label">{{ 'Titulo' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="titulo" type="textarea" id="titulo" >{{ $itemsoporte->titulo or ''}}</textarea>
                            {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
                        <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="contenido" type="textarea" id="contenido" >{{ $itemsoporte->contenido or ''}}</textarea>
                            {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('enlace') ? 'has-error' : ''}}">
                        <label for="enlace" class="col-md-4 control-label">{{ 'Enlace' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="enlace" type="textarea" id="enlace" >{{ $itemsoporte->enlace or ''}}</textarea>
                            {!! $errors->first('enlace', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('tituloenlace') ? 'has-error' : ''}}">
                        <label for="tituloenlace" class="col-md-4 control-label">{{ 'Titulo Enlace' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="tituloenlace" type="textarea" id="tituloenlace" >{{ $itemsoporte->tituloenlace or ''}}</textarea>
                            {!! $errors->first('tituloenlace', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('icono') ? 'has-error' : ''}}">
                        <label for="icono" class="col-md-4 control-label">{{ 'Icono' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="icono" type="text" id="icono" value="{{ $itemsoporte->icono or ''}}" >
                            {!! $errors->first('icono', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('tituloanexo') ? 'has-error' : ''}}">
                        <label for="tituloanexo" class="col-md-4 control-label">{{ 'Titulo Anexo' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="tituloanexo" type="text" id="tituloanexo" value="{{ $itemsoporte->tituloanexo or ''}}" >
                            {!! $errors->first('tituloanexo', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('textoanexo') ? 'has-error' : ''}}">
                        <label for="textoanexo" class="col-md-4 control-label">{{ 'Texto Anexo' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="textoanexo" type="text" id="textoanexo" value="{{ $itemsoporte->textoanexo or ''}}" >
                            {!! $errors->first('textoanexo', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                        <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label>
                                    <input name="estado" type="radio" value="0" {{ (isset($itemsoporte) && 0 == $itemsoporte->estado) ? 'checked' : '' }}> No</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input name="estado" type="radio" value="1" @if (isset($itemsoporte)) {{ (1 == $itemsoporte->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
                            </div>
                            {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <input class="form-control" name="soporte_id" type="hidden" id="soporte_id" value="{{ $soporte->id or ''}}" >

                </form>

            </div>


            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-4">
                        <button type="button" 
                        class="btn btn-default" 
                        data-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-success" id="btn-saveitemsop">
                           ADD
                       </button>
                   </div>
               </div>
           </div>



       </div>
   </div>
</div>


<!-- MODAL UPDATE -->

<div class="modal fade" id="updateItemsoporte" tabindex="-1" role="dialog" aria-labelledby="UpdateItemCrtModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="UpdateItemCrtModalLabel">Update Item soporte</h4>
            </div>
            <div class="modal-body">

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif


                <form method="POST" id="formitrmsoporteupdate" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                   
                <div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
                        <label for="titulo" class="col-md-4 control-label">{{ 'Titulo' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="titulo" type="textarea" id="titulomod" >{{ $itemsoporte->titulo or ''}}</textarea>
                            {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
                        <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="contenido" type="textarea" id="contenidomod" >{{ $itemsoporte->contenido or ''}}</textarea>
                            {!! $errors->first('contenido', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('enlace') ? 'has-error' : ''}}">
                        <label for="enlace" class="col-md-4 control-label">{{ 'Enlace' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="enlace" type="textarea" id="enlacemod" >{{ $itemsoporte->enlace or ''}}</textarea>
                            {!! $errors->first('enlace', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('tituloenlace') ? 'has-error' : ''}}">
                        <label for="tituloenlace" class="col-md-4 control-label">{{ 'Titulo Enlace' }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="5" name="tituloenlace" type="textarea" id="tituloenlacemod" >{{ $itemsoporte->tituloenlace or ''}}</textarea>
                            {!! $errors->first('tituloenlace', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('icono') ? 'has-error' : ''}}">
                        <label for="icono" class="col-md-4 control-label">{{ 'Icono' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="icono" type="text" id="iconomod" value="{{ $itemsoporte->icono or ''}}" >
                            {!! $errors->first('icono', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('tituloanexo') ? 'has-error' : ''}}">
                        <label for="tituloanexo" class="col-md-4 control-label">{{ 'Titulo Anexo' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="tituloanexo" type="text" id="tituloanexomod" value="{{ $itemsoporte->tituloanexo or ''}}" >
                            {!! $errors->first('tituloanexo', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('textoanexo') ? 'has-error' : ''}}">
                        <label for="textoanexo" class="col-md-4 control-label">{{ 'Texto Anexo' }}</label>
                        <div class="col-md-6">
                            <input class="form-control" name="textoanexo" type="text" id="textoanexomod" value="{{ $itemsoporte->textoanexo or ''}}" >
                            {!! $errors->first('textoanexo', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                        <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label>
                                    <input name="estado" type="radio" id="estadomod" value="0" {{ (isset($itemsoporte) && 0 == $itemsoporte->estado) ? 'checked' : '' }}> No</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input name="estado" type="radio" id="estadomod" value="1" @if (isset($itemsoporte)) {{ (1 == $itemsoporte->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
                            </div>
                            {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <input class="form-control" name="soporte_id" type="hidden" id="soporte_idmod" value="{{ $soporte->id or ''}}" >
                    <input class="form-control" name="idmod" type="hidden" id="idmod" value="" >


                        </form>

                    </div>


                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                <button type="button" 
                                class="btn btn-default" 
                                data-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-success" id="btn-updateitemsop">
                                   UPDATE
                               </button>
                           </div>
                       </div>
                   </div>



               </div>
           </div>
       </div>

       <!-- MODAL VIEW -->

       <div class="modal fade" id="viewItemsoporte" tabindex="-1" role="dialog" aria-labelledby="ViewItemCrtModalLabel">
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


                    <form method="POST" id="formitrmsoporteview" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                        <div class="form-group {{ $errors->has('item_soporte') ? 'has-error' : ''}}">
                            <label for="item_soporte" class="col-md-4 control-label">{{ 'Item soporte' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="item_soporte" type="text" id="item_soportev" value="{{ $itemsoporte->item_soporte or ''}}" >
                                {!! $errors->first('item_soporte', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div><div class="form-group {{ $errors->has('contenido') ? 'has-error' : ''}}">
                            <label for="contenido" class="col-md-4 control-label">{{ 'Contenido' }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="5" name="contenido" type="textarea" id="contenidov" >{{ $itemsoporte->contenido or ''}}</textarea>
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
                                    <label><input name="estado" type="radio" id="estadov" value="1" {{ (isset($itemsoporte) && 1 == $itemsoporte->estado) ? 'checked' : '' }}> Yes</label>
                                </div>
                                <div class="radio">
                                    <label><input name="estado" type="radio" id="estadov" value="0" @if (isset($itemsoporte)) {{ (0 == $itemsoporte->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
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

                                <input class="form-control" name="soporte_id" type="hidden" id="soporte_idv" value="{{ $soporte->id or ''}}" >
                                <input class="form-control" name="id" type="hidden" id="idv" >
                                {!! $errors->first('soporte_id', '<p class="help-block">:message</p>') !!}


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