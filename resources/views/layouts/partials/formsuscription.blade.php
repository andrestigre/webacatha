<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="form frm_suscripcioncion">
    {{--
      <p class="title"></p>
      --}}
      

      {!! Form::open(['url' => '/suscription', 'id'=>'formulariosuscripcion', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data' , 'files' => true, 'method'=>'POST', 'accept-charset'=>'UTFF-8']) !!}




      <div class="form-group form-group-margin">
        <label for="inputPassword" class="control-label  label_suscr">Nombre</label>
        {!! Form::text('namesuscripcion', null, ['class' => 'form-control', 'required' => 'required', 'autofocus'=>'autofocus']) !!}
      </div>


      <div class="form-group form-group-margin">
        <label for="inputEmail" class="control-label label_suscr">Email</label>
        {!! Form::email('emailsuscripcion', null, ['class' => 'form-control', 'required' => 'required', 'autofocus'=>'autofocus']) !!}
      </div>


      <div class="form-group form-group-margin">
        <label for="inputPassword" class="control-label label_suscr">Teléfono</label>
        {!! Form::text('telefonosuscripcion', null, ['class' => 'form-control', 'required' => 'required', 'autofocus'=>'autofocus']) !!}
      </div>



      <div class="form-group">
        <button id="submit-form-button" class="btn btn-sm btn-suscrib blue"
        type="submit">Contáctanos</button>
      </div>

       {!! Form::close() !!}
      {{--
       --}}


       <p class="new-login">¿Ya tienes una cuenta? <a href="" class="link_ingresar">Ingresar</a></p>


     </div>
   </div>

   <style type="text/css">



   .frm_suscripcioncion p, .frm_suscripcioncion label{
    font-size: 18px;
    letter-spacing: -1px;
    font-weight: 300;
    color: #FFFFFF;
  }


  p.title{
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
  }

  label.label_suscr{
    font-size: 15px;
    font-weight: 400;
  }

  .btn-suscrib {
    cursor: pointer;
    margin: 10px;
    border-radius: 5px;
    text-decoration: none;
    padding: 10px;
    font-size: 15px;
    transition: .3s;
    -webkit-transition: .3s;
    -moz-transition: .3s;
    -o-transition: .3s;
    display: inline-block;
    background-color: rgba(8, 27, 35, 0.6);
  }

  .btn-suscrib:hover {
    cursor: url(http://cur.cursors-4u.net/symbols/sym-1/sym46.cur), auto;
  }

  .blue {
    color: #55acee;
    border: 2px #55acee solid;
  }

  .blue:hover {
    background-color: #55acee;
    color: #fff
  }

  .frm_suscripcioncion{
    height: 400px;
  }

  .frm_suscripcioncion{
    bottom: : 150px;
    padding: 29px 54px 23px;
    -webkit-border-radius:3px;
    -moz-border-radius:3px;
    border-radius:3px;
    background-color: rgba(8, 27, 35, 0.6);
    margin-top: 7px;
  }

  p.new-login{
    position: relative;
    margin-top: -25px;
    height: 40px;
    padding:5px 0px;
    clear: both;
    text-align: center;
    color: #fff;
  }

  .link_ingresar{
    color: #55acee;
  }




</style>