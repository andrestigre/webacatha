
<!--MODAL ADD NEW-->

<div class="modal fade" id="createItemCaracteristica" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="favoritesModalLabel">Add Característica Paquete</h4>
            </div>
            <div class="modal-body">

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif


                <form method="POST" id="formitemcharpaquete" action="{{ url('/admin/storeitemcharpaquete') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                    
                    
                    <div class="form-group {{ $errors->has('car_paquete') ? 'has-error' : ''}}">
    <label for="car_paquete" class="col-md-4 control-label">{{ 'Característica' }}</label>
    <div class="col-md-6">
        
        {!! Form::textarea('car_paquete', null, ['class' => 'form-control']) !!}        

        {!! $errors->first('car_paquete', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" type="radio" value="0" {{ (isset($caracteristicapaquete) && 0 == $caracteristicapaquete->estado) ? 'checked' : '' }}> No</label>
</div>
<div class="radio">
    <label><input name="estado" type="radio" value="1" @if (isset($caracteristicapaquete)) {{ (1 == $caracteristicapaquete->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

        <input class="form-control" name="paquete_id" type="hidden" id="paquete_id" value="{{ $paquete->id }}" >
        


                        </form>

                    </div>


                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                <button type="button" 
                                class="btn btn-default" 
                                data-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-success" id="btn-saveitemcharpaquete">
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


                    <form method="POST" id="formitrmcharupdate" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                         <div class="form-group {{ $errors->has('car_paquete') ? 'has-error' : ''}}">
    <label for="car_paquete" class="col-md-4 control-label">{{ 'Característica' }}</label>
    <div class="col-md-6">
        
        {!! Form::textarea('car_paquete', null, ['class' => 'form-control', 'id'=>'car_paquetemod']) !!}        

        {!! $errors->first('car_paquete', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" id="estadomod" type="radio" value="0" {{ (isset($caracteristicapaquete) && 0 == $caracteristicapaquete->estado) ? 'checked' : '' }}> No</label>
</div>
<div class="radio">
    <label><input name="estado" id="estadomod" type="radio" value="1" @if (isset($caracteristicapaquete)) {{ (1 == $caracteristicapaquete->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

        <input class="form-control" name="paquete_id" type="hidden" id="paquete_idmod" value="" >
        <input class="form-control" name="id" type="hidden" id="idmod" value="{{ $paquete->id }}" >
        

                            </form>

                        </div>


                        <div class="modal-footer">
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-4">
                                    <button type="button" 
                                    class="btn btn-default" 
                                    data-dismiss="modal">Close</button>

                                    <button type="submit" class="btn btn-success" id="btn-updateitemchar">
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


                        <form method="POST" id="formitrmcharview" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                
                                <div class="form-group {{ $errors->has('car_paquete') ? 'has-error' : ''}}">
    <label for="car_paquete" class="col-md-4 control-label">{{ 'Característica' }}</label>
    <div class="col-md-6">
        
        {!! Form::textarea('car_paquete', null, ['class' => 'form-control', 'id'=>'car_paquetev']) !!}        

        {!! $errors->first('car_paquete', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="estado" id="estadov" type="radio" value="0" {{ (isset($caracteristicapaquete) && 0 == $caracteristicapaquete->estado) ? 'checked' : '' }}> No</label>
</div>
<div class="radio">
    <label><input name="estado" id="estadov" type="radio" value="1" @if (isset($caracteristicapaquete)) {{ (1 == $caracteristicapaquete->estado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Yes</label>
</div>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

                            
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