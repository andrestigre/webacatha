
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="img/png" href="img/favicon.ico"/>
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Software, contable, administrativo, financiero, sistema, ecuador, quito, guayaquil, machala, cuenca, aplicacion, nomina, inventarios, ventas, compras, control, facturacion, electronica, programa contable, programa, sistema contable, software contable">
    <meta name="author" content="">
    <!-- Add Your favicon here -->
    <!--<link rel="icon" href="img/favicon.ico">-->

    <title>ACATHA - Software administrativo financiero contable</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('acatha/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{ asset('acatha/css/animate.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('acatha/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Custom styles for this template -->
<link href="{{ asset('acatha/css/style.css') }}" rel="stylesheet">
<!--
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
-->


</head>
<body id="page-top">




    {{-- 

        @if(\Session::has('message'))
        @include('layouts.partials.message')
        @endif
        --}}

        @include('layouts.partials.nav')



        @include('layouts.partials.slider')


        @if(!empty($caracteristicas))
        <section id="features" class="container services {{ $caracteristicas->section_color }}">
            <div class="row">
                {!! $caracteristicas->contenido !!}
            </div>
            <div class="row">
                @if(!empty($itemscaracteristicas))
                @foreach($itemscaracteristicas as $itemscaracteristica)
                <div class="col-sm-3">
                    <h2>{{ $itemscaracteristica->item_caracteristica }}</h2>
                    <p>{{ $itemscaracteristica->detalle }}</p>
                    <p>
                        @if(!empty($itemscaracteristica->iconuno))<i class="{{ $itemscaracteristica->iconuno }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@endif
                        @if(!empty($itemscaracteristica->icondos))<i class="{{ $itemscaracteristica->icondos }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@endif
                        @if(!empty($itemscaracteristica->icontres))<i class="{{ $itemscaracteristica->icontres }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@endif
                        @if(!empty($itemscaracteristica->iconcuatro))<i class="{{ $itemscaracteristica->iconcuatro }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@endif
                        @if(!empty($itemscaracteristica->iconcinco))<i class="{{ $itemscaracteristica->iconcinco }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@endif
                        @if(!empty($itemscaracteristica->iconseis))<i class="{{ $itemscaracteristica->iconseis }}" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@endif
                    </p>
                </div>
                @endforeach
                @endif
            </div>
        </section>
        @endif


        @if(!empty($caracteristicassub))
        <section  class="container features {{ $caracteristicassub->section_color }}">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    {!! $caracteristicassub->contenido !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center wow fadeInLeft">
                    @if(!empty($itemscaracteristicasleft))
                    @foreach($itemscaracteristicasleft as $itemscaracteristicaleft)
                    <div>
                        @if(!empty($itemscaracteristicaleft->iconuno))
                        <i class="{{ $itemscaracteristicaleft->iconuno }}" aria-hidden="true"></i>@endif
                        <h2>{{ $itemscaracteristicaleft->item_caracteristica }}</h2>
                        <p>{{ $itemscaracteristicaleft->detalle }}</p>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="col-md-6 text-center  wow zoomIn">
                    <img src="{{ asset($caracteristicassub->imagen) }}" alt="dashboard" class="img-responsive">
                </div>
                <div class="col-md-3 text-center wow fadeInRight">
                    @if(!empty($itemscaracteristicasrigth))
                    @foreach($itemscaracteristicasrigth as $itemscaracteristicarigth)
                    <div>
                        @if(!empty($itemscaracteristicarigth->iconuno))
                        <i class="{{ $itemscaracteristicarigth->iconuno }}" aria-hidden="true"></i>@endif
                        <h2>{{ $itemscaracteristicarigth->item_caracteristica }}</h2>
                        <p>{{ $itemscaracteristicarigth->detalle }}</p>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </section>
        @endif

        @if(!empty($comprobante))

        <section id="electronicos" class="{{ $comprobante->section_color }} features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="navy-line"></div>
                        {!! $comprobante->detalle !!}
                    </div>
                </div>
                <div class="row features-block">
                    <div class="col-lg-6 features-text wow fadeInLeft">
                        {!! $comprobante->contenido !!}
                        @if(!empty($comprobante->enlace))
                        <a href="{{ $comprobante->enlace }}" class="btn btn-primary">Saber m&aacute;s</a>
                        @endif
                    </div>
                    <div class="col-lg-6 text-right wow fadeInRight">
                        <img src="{{ asset($comprobante->imagen) }}" alt="dashboard" class="img-responsive pull-right">
                    </div>
                </div>
            </div>
        </section>



        <section class="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>&nbsp;</h1>
                        <p>{{ $comprobante->titulofinal }} </p>
                    </div>
                </div>
                <div class="row features-block">
                    @if(!empty($itemscomprobante))
                    @foreach($itemscomprobante as $itemscomp)
                    @if(($itemscomp->textalinear)=='0') <?php  $align='col-lg-2 features-text text-right'; ?> @endif
                    @if(($itemscomp->textalinear)=='1') <?php  $align='col-lg-2 features-text text-left'; ?> @endif
                    @if(($itemscomp->textalinear)=='2') <?php  $align='col-lg-4 text-center text-right'; ?> @endif
                    <div class="<?php echo $align; ?> wow {{ $itemscomp->efecto }}">
                        <h2>{{ $itemscomp->item_comprobante }}</h2>
                        <p>{{ $itemscomp->contenido }}</p>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </section>
        @endif

        @if(!empty($soporte))

        <section id="soporte" class="timeline {{ $soporte->section_color }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="navy-line"></div>
                        <h1>{{ $soporte->titulo }}</h1>
                        <p>{{ $soporte->detalle }}</p>
                    </div>
                </div>
                <div class="row features-block">
                    <div class="col-lg-12">
                        <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">

                            @foreach($itemsoportes as $itemsoporte)
                            <div class="vertical-timeline-block">
                                <div class="vertical-timeline-icon navy-bg">
                                    <i class="{{ $itemsoporte->icono }}"></i>
                                </div>

                                <div class="vertical-timeline-content">
                                    <h2>{{ $itemsoporte->titulo }}</h2>
                                    <p>{!! $itemsoporte->contenido !!}
                                    </p>
                                    @if(!empty($itemsoporte->enlace))
                                    <a href="{{ $itemsoporte->enlace }}" class="btn btn-xs btn-primary">  {{ $itemsoporte->tituloenlace }} </a>
                                    @endif
                                    <span class="vertical-date"> {{ $itemsoporte->tituloanexo }} <br/> <small>{{ $itemsoporte->textoanexo }}</small> </span>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        @if(!empty($precio))
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="row m-b-lg">
                    <div class="col-lg-12 text-center">
                        <div class="navy-line"></div>
                        <h1>{{ $precio->Itemnav->item_nav }}</h1>
                    </div>
                </div>
                <div class="row">
                    @if(!empty($paquetes))
                    @foreach($paquetes as $itempaquete)
                    <div class="col-lg-3 wow zoomIn">
                        <ul class="pricing-plan list-unstyled">
                            <li class="pricing-title">
                                {{ $itempaquete->Tipopaquete->tipo_paquete }}
                            </li>
                            <li class="pricing-desc">
                                {!! $itempaquete->detalle !!}
                            </li>
                            <li class="pricing-price">
                                <span>
                                    @if(!empty($itempaquete->precio))
                                    ${{ number_format($itempaquete->precio,2) }}
                                    @else
                                    Precio por definir
                                    @endif
                                </span> / {{ $itempaquete->periodo }}
                            </li>

                            @if(!empty($caracteristicapaquetes))
                            @foreach($caracteristicapaquetes as $itemchar)
                            @if($itempaquete->id == $itemchar->paquete_id)
                            <li>
                                {{ $itemchar->car_paquete }}
                            </li>
                            @endif
                            @endforeach
                            @endif

                            <li>

                                <a class="btn btn-primary btn-xs" id="comprarPaquete" href="{{ $itempaquete->Tipopaquete->enlace }}" data-toggle="modal" data-target="#modalCompraPaquete" onclick="ComprarPaquete({{ $itempaquete->id }});">{{ $itempaquete->Tipopaquete->totuloenlace }}</a>


                            </li>
                        </ul>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="row m-t-lg">
                    <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg">
                        {!! $precio->contenido !!}

                    </div>
                </div>
            </div>
        </section>
        @endif

        @if(!empty($contacto))
        <section id="contact" class="{{ $contacto->section_color }} contact">
            <div class="container">
                <div class="row m-b-lg">
                    <div class="col-lg-12 text-center">
                        <div class="navy-line"></div>
                        <h1>{{ $contacto->Itemnav->item_nav }}</h1>
                        <p>{{ $contacto->titulo }}</p>
                    </div>
                </div>
                <div class="row m-b-lg">
                    {!! $contacto->contenido !!}
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="{{ $contacto->enlaceboton }}" class="btn btn-primary">{{ $contacto->textoboton }}</a>
                        <p class="m-t-sm">
                            Siguenos en
                        </p>
                        <ul class="list-inline social-icon">
                            <li><a href="{{ $contacto->social_tw }}" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="{{ $contacto->social_fb }}" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                        <p><strong>&copy; 2016 AustroSoft</strong><br/> {{ $empresa['descripcion'] }}</p>
                    </div>
                    <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=Mv9KjRtHPXg1G1zkGoMiZyrIUAgT0BImsRWvsiVI3PpH6FD0fRG7Qe2NSpRL"></script></span>
                </div>
            </div>
        </section>
        @endif
        {{--
            <section id="contact" class="gray-section contact">
                <div class="container">
                    <div class="row m-b-lg">
                        <div class="col-lg-12 text-center">
                            <div class="navy-line"></div>
                            <h1>Cont&aacute;ctanos</h1>
                            <p>Estamos prestos para servirte en donde te encuentres solo comun&iacute;cate con nosotros.</p>
                        </div>
                    </div>
                    <div class="row m-b-lg">
                        <div class="col-lg-2 col-lg-offset-3">
                            <address>
                                <strong><span class="navy">Acatha Inc.</span></strong><br/>
                                4th Floor Torres del Mall del Sol <br/>Avenida Joaquin Orratia y<br/>
                                Juan Tanca Marengo
                                Guayaquil, Ecuador<br/>
                                <abbr title="Phone">CEL:</abbr> +593 98 976 5272</br>
                            </address>
                        </div>
                        <div class="col-lg-2">
                            <address>
                                <strong><span class="navy">AustroSoft, Cia Ltda.</span></strong><br/>
                                Av Francisco Moscoso, No 6-25 y <br/>Av 10 de Agosto<br/>
                                Cuenca, Ecuador 11204<br/>
                                <abbr title="Phone">CEL:</abbr> +593 98 976 5272</br>
                                <abbr title="Phone">T:</abbr> +593 7 281-8447
                            </address>
                        </div>
                        <div class="col-lg-2">
                            <p class="text-color">
                                <strong>ACATHA</strong> es un universo de aplicativos para la gesti&oacute;n administrativa, financiera y contable que te permitir&aacute; realizar tareas complejas de forma sencilla, integral y precisa.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="mailto:comercializacion@austrosoft.com.ec" class="btn btn-primary">Escr&iacute;benos</a>
                            <p class="m-t-sm">
                                Siguenos en
                            </p>
                            <ul class="list-inline social-icon">
                                <li><a href="https://twitter.com/acathaec" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/acathaec" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                            <p><strong>&copy; 2016 AustroSoft</strong><br/> {{ $empresa['descripcion'] }}</p>
                        </div>
                        <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=Mv9KjRtHPXg1G1zkGoMiZyrIUAgT0BImsRWvsiVI3PpH6FD0fRG7Qe2NSpRL"></script></span>
                    </div>
                </div>
            </section>
            --}}

            <!-- The Modal Contáctanos -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">×</span>
                        <h3>Contáctanos</h3>
                    </div>
                    <div class="modal-body">
                        <form name="signup_frm" id="signup_frm" method="post" >
                            <fieldset>
                                <div class="form-group">
                                    <label>Nombres Y Apellidos<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="nombres" id="nombres">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="telefono" id="telefono">
                                </div>
                                <div class="form-group">
                                    <label>Email<span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                                <div class="form-group">
                                    <label>Ciudad<span class="required">*</span></label>
                                    <input type="ciudad" class="form-control" name="ciudad" id="ciudad">
                                </div>
                                <div id="error">
                                    <!-- error will be shown here ! -->
                                </div>
                                <div class="g-recaptcha" data-sitekey="" data-theme="dark"></div>
                                <button type="submit" name="register_btn" id="register_btn" class="btn btn-primary btn-lg btn-block">Enviar</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>

            <!-- The Modal Comprar -->
            <div class="modal fade" id="modalCompraPaquete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title" id="paqueteseleccionado"> Paquete  </h3>
              </div>
              <div class="modal-body">
                 <form id="formselecpaquete" class="form-horizontal" >

                  <input type="hidden" name="paqinput" id="paqinputmodal" value=""/>

                  <div class="row">

                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">Necesitamos tus datos </div>
                            <div class="panel-body">

                                <form class="form-inline" action="">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <div class="col-md-10">
                                                    <label for="pwd">Nombre:</label>
                                                    <input type="text" class="form-control" id="nombrecliente">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                          <div class="form-group">
                                            <div class="col-md-10">
                                                <label for="email">Correo :</label>
                                                <input type="email" class="form-control" id="emailcliente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <div class="col-md-10">
                                                <label for="pwd">Contacto :</label>
                                                <input type="text" class="form-control" id="contactocliente">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="col-md-12 form-group" id="divdescripcion" style="display: none;">
                                            <label for="precio">Descripción : </label>
                                            {!! Form::textarea('descripcion', null, ['class' => 'form-control','id'=>'descripcionmod','rows'=>'2','cols'=>'5']) !!}
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">Paquete</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="detalle" class="col-md-4 control-label">
                                        Detalle :
                                    </label>
                                    <div class="col-md-8">
                                        <label style="text-align: left;" id="detallelabel" class="control-label col-md-12"></label>
                                        <input type="hidden" name="detalle" id="detallemodal" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="precio" class="col-md-4 control-label">
                                        Precio :
                                    </label>
                                    <div class="col-md-8">
                                        <label style="text-align: left;" id="preciolabel" class="control-label col-md-12"></label>
                                        <input type="hidden" name="precio" id="preciomodal" value=""/>
                                    </div>
                                </div>



                                <div class="form-group" id="ocultarmetodopago">
                                    <label for="precio" class="col-md-4 control-label">
                                        Método de pago :
                                    </label>
                                    <div class="col-md-8">
                                        <select class="form-control col-md-3" id="tipopago">
                                            <option value="0">Depósito / Transferencia bancaria</option>
                                            <option value="1">PayPal</option>
                                            <option value="2">PayPhone</option>
                                        </select>
                                    </div>
                                </div>



                                




                                <input type="hidden" name="id" id="idmodal" value="" />
                                <input type="hidden" name="id" id="tipopaquete_idmodal" value="" />
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="panel panel-default">
                          <div class="panel-heading">Incluye :</div>
                          <div class="panel-body">
                              <div class="form-group">

                              </div>
                              <div class="col-md-12 " id="lista1">
                                <ul class="listchar list-group">

                                </ul>
                            </div>




                        </div>
                    </div>



                </div>

            </div>    




        </form>
    </div>
    <div class="modal-footer">
            <!--
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          --> 
          <button type="button" class="btn btn-default completarpago">CONTINUAR</button>
      </div>
  </div>

</div>


<script src="{{ asset('acatha/js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('acatha/js/pace.min.js') }}"></script>
<script src="{{ asset('acatha/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('acatha/js/classie.js') }}"></script>
<script src="{{ asset('acatha/js/cbpAnimatedHeader.js') }}"></script>
<script src="{{ asset('acatha/js/wow.min.js') }}"></script>
<script src="{{ asset('acatha/js/inspinia.js') }}"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
<script src="{{ asset('acatha/js/dist/jquery.validate.js') }}"></script>
<script src="{{ asset('acatha/js/funciones.js') }}"></script>
<!--
-->
<script>
    $.validator.setDefaults({
        submitHandler: function()
        {
            var data = $("#signup_frm").serialize();
            $.ajax({

                type : 'POST',
                url  : 'register_process.php',
                data : data,
                beforeSend: function()
                {
                    $("#error").fadeOut();
                    $("#register_btn").html('<i class="fa fa-lock"></i>  &nbsp; Comprobando ...');
                },
                success :  function(response)
                {
                    if(response=="ok")
                    {
                        $("#register_btn").html('<i class="fa fa-spinner fa-spin"></i> Redireccionando ...');
                        setTimeout(' window.location.href = "index.php?mail=revisar"; ',500);
                    }else{
                        $("#error").fadeIn(1000, function(){
                            $("#error").html('<div class="alert alert-danger"><b>Lo sentimos!</b> '+response+'</div>');
                            $("#register_btn").html('<i class="fa fa-lock"></i> &nbsp; Ingresar');
                        });
                    }
                }
            });
        }
    });
    $(document).ready(function() {
        $('#password').keyup(function() {
            // set password variable
            var pswd = $(this).val();
            //validate the length
            if ( pswd.length < 8 ) {
                $('#length').removeClass('valid').addClass('invalid');
            } else {
                $('#length').removeClass('invalid').addClass('valid');
            }
            //validate letter
            if ( pswd.match(/[A-z]/) ) {
                $('#letter').removeClass('invalid').addClass('valid');
            } else {
                $('#letter').removeClass('valid').addClass('invalid');
            }

            //validate capital letter
            if ( pswd.match(/[A-Z]/) ) {
                $('#capital').removeClass('invalid').addClass('valid');
            } else {
                $('#capital').removeClass('valid').addClass('invalid');
            }

            //validate number
            if ( pswd.match(/\d/) ) {
                $('#number').removeClass('invalid').addClass('valid');
            } else {
                $('#number').removeClass('valid').addClass('invalid');
            }
        }).focus(function() {
            $('#pswd_info').show();
        }).blur(function() {
            $('#pswd_info').hide();
        });
    });
    $().ready(function() {
        $("#signup_frm").validate({
            rules:{
                identificacion: "required",
                usuario: "required",
                password: "required",
                email: "required",
                rpassword: {
                    required: true,
                    equalTo: "#password"
                }
            },
            messages:{
                identificacion: "ingrese el número de identificación",
                usuario: "ingrese su usuario",
                password: "ingrese su password",
                email: "ingrese su correo",
                rpassword: "password y confirmación no coinciden"
            }
        });
    });
</script>
<script>
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

/*
        var modalCompra = document.getElementById('modalCompra');
        var btncomprapaquete = document.getElementById("comprarPaquete");
        btncomprapaquete.onclick = function() {
            modalCompra.style.display = "block";
        }
        span.onclick = function() {
        modalCompra.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modalCompra.style.display = "none";
            }
        }
        */
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1794353207471383');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1"
            src="https://www.facebook.com/tr?id=1794353207471383&ev=PageView
            &noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
        <link href="https://api.motion.ai/sdk/webchat.css" rel="stylesheet" type="text/css">
        <script src="https://api.motion.ai/sdk/webchat.js"></script>
        <script>
            motionAI_Init('67694?color=62a8ea&sendBtn=Enviar&inputBox=Type%20something...&token=0a2290053fd302a4158c4c5b2df838b2',true,400,470,'https://www.acatha.com/img/chat.png');
            motionAI_Open();
        </script>

        <script>
            $('div.alert').not('.alert-important').delay(3000).fadeOut(650);
        </script>

    </body>
    </html>