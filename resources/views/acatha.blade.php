
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
</head>
<body id="page-top">

@include('layouts.partials.nav')


@include('layouts.partials.slider')


<section id="features" class="container services">
    <div class="row">
        Acatha no es solo un sistema contable, ACATHA es una herramienta potente que te permiirá gestionar tu negocio de la manera mas r&aacute;pida, sencilla e intuititiva,
        contamos con herramientas que te permitir&aacute;n gestionar Nomina, Importaciones, Activos Fijos, ISP, Producci&oacute;n, Restaurantes, Eventos y m&aacute;s todo vinculado
        contablemente bajo normativas tributarias que permiten a tu contador realizar declaraciones sin contratiempos.
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h2>Multiplataforma</h2>
            <p>Nuestra aplicaciones se encuentran disponibles para diferentes tipos de dispositivos y para tu sistema operativo a elecci&oacute;n.</p>
            <p><i class="fa fa-windows fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-linux fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-apple fa-2x" aria-hidden="true"></i></p>
        </div>
        <div class="col-sm-3">
            <h2>Intuitivo</h2>
            <p>De f&aacute;cil navegaci&oacute;n, experimenta un producto con un dise&ntilde;o fluido sin muchos clicks, sin dar muchas vueltas o varios intentos</p>
            <p><i class="fa fa-hand-o-up fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-eye fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-universal-access fa-2x" aria-hidden="true"></i></p>
        </div>
        <div class="col-sm-3">
            <h2>Seguro</h2>
            <p>Dispondrás de toda tu información organizada y <b>segura</b> gracias a la integracion de servicios como Amazon Cloud Services</p>
            <p><i class="fa fa-shield fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-lock fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cloud fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-globe fa-2x" aria-hidden="true"></i></p>
        </div>
        <div class="col-sm-3">
            <h2>Soporte</h2>
            <p>Actualizaciones permanentes, asesoría en linea, capacitaciones en todo momento con mas de 300 aplicativos disponibles para gestionar tu empresa.</p>
            <p><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-ticket fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope fa-2x" aria-hidden="true"></i></p>
        </div>
    </div>
</section>

<section  class="container features">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Cientos de aplicaciones &uacute;tiles<br/> <span class="navy"> con la mayor cantidad de informaci&oacute;n al instante</span> </h1>
            <p>en el ecosistema que crece junto a tí</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center wow fadeInLeft">
            <div>
                <i class="fa fa-desktop features-icon" aria-hidden="true"></i></i>
                <h2>POS</h2>
                <p>Aplicaciónes adaptadas para negocios que tienen facturación recurrente a traves de equipos touch o similares</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-mobile features-icon"></i>
                <h2>Móvil</h2>
                <p>Tu negocio a donde vayas y en tu bolsillo, maneja tu empresa desde cualquier dispositivo móvil.</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-shopping-cart features-icon"></i>
                <h2>E-commerce</h2>
                <p>Permite a tus clientes acceder a tu productos y que puedan registrar sus pedidos on-line eficientemente.</p>
            </div>
        </div>
        <div class="col-md-6 text-center  wow zoomIn">
            <img src="{{ asset('acatha/img/ecosistema3.png') }}" alt="dashboard" class="img-responsive">
        </div>
        <div class="col-md-3 text-center wow fadeInRight">
            <div>
                <i class="fa fa-hdd-o features-icon" aria-hidden="true"></i>
                <h2>Backups</h2>
                <p>Tu información respaldada de forma automatica siempre en servidores alojados en varios puntos del mundo.</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-cloud features-icon"></i>
                <h2>En la nube</h2>
                <p>Nuestra infraestructura esta apoyada por una nube que ofrece seguridad y disponibilidad 24/7.</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-globe features-icon"></i>
                <h2>Integrable</h2>
                <p>Integra tus aplicaciones a Acatha mediante API's o atrav&eacute;s de servicios web.</p>
            </div>
        </div>
    </div>
</section>

<section id="electronicos" class="gray-section features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Facturación Electrónica</h1>
                <p>Realiza la emisión de comprobantes electrónicos de forma eficiente.</p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-6 features-text wow fadeInLeft">
                <small>ACATHA</small>
                <h2>Integrado, Simple, Actualizado, Seguro, Disponible </h2>
                <p>Factura de manera fácil, eficiente y segura donde te encuentres puedes adquirir la app para tus dispositivos móviles o integrarlo a Acatha para la gestión de tu negocio. </br></br>
                    Al alcance de todos, construido bajo las normas y requerimientos según las fichas técnicas liberadas por el SRi en sus modalidades on-line y off-line.</p>
                <a href="" class="btn btn-primary">Saber m&aacute;s</a>
            </div>
            <div class="col-lg-6 text-right wow fadeInRight">
                <img src="{{ asset('acatha/img/factelectronica3.png') }}" alt="dashboard" class="img-responsive pull-right">
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>&nbsp;</h1>
                <p>Que son los comprobantes electrónicos? </p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-2 features-text wow fadeInLeft">
                <h2>Integrado </h2>
                <p>Registra facturas, comprobantes de retención, notas de crédito, notas de débito,  y guias de remisión</p>
            </div>
            <div class="col-lg-2 features-text wow fadeInLeft">
                <h2>A tiempo</h2>
                <p>Entrega inmediata mediante envío a uno o varios correos electrónicos ajuntando PDF y XML</p>
            </div>
            <div class="col-lg-4 text-right text-center wow zoomIn">
                <h2>Comprobantes Electrónicos </h2>
                <p>Un comprobante electrónico es un documento que cumple con los requisitos legales y reglamentarios exigibles para todos comprobantes de venta, garantizando la autenticidad de su origen y la integridad de su contenido.</p>
            </div>
            <div class="col-lg-2 features-text text-right wow fadeInRight">
                <h2>Actualizado </h2>
                <p>Generamos todos los comprobantes segun los nuevos esquemas del SRi</p>
            </div>
            <div class="col-lg-2 features-text text-right wow fadeInRight">
                <h2>Disponible </h2>
                <p>Con un nivel del 99.6% en linea podrás realizar sus comprobantes de forma segura.</p>
            </div>
        </div>
    </div>
</section>

<section id="soporte" class="timeline gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Soporte al cliente</h1>
                <p>Queremos conocer tus necesidades, comunícate con nosotros para continuar haciendo de <strong>ACATHA</strong> algo único. </p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-12">
                <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-mobile"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Call Center</h2>
                            <p>Si tienes preguntas, o deseas implementar nuevos procesos comunícate con nosotros.
                            </p>
                            <a href="#" class="btn btn-xs btn-primary"> Comunícate</a>
                            <span class="vertical-date"> Teléfonos <br/> <small>T: (593) 72818447<br/>(593) 74091633</small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-desktop"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Team Viewer</h2>
                            <p>Ofrecemos soporte remoto con la herramienta número uno del mercado de forma inmediata no precencial.</p>
                            <a href="#" class="btn btn-xs btn-primary"> Descargar</a>
                            <span class="vertical-date"> Soporte Remoto <br/> <small>all-in-one</small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Jira</h2>
                            <p>Aplicación diseñada para el seguimiento de errores, incidentes y para la gestión operativa de nuevos proyectos. </p>
                            <a href="#" class="btn btn-xs btn-primary"> Acceder</a>
                            <span class="vertical-date"> Jira <br/> <small>Service Desk</small> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Precios</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Basic
                    </li>
                    <li class="pricing-desc">
                        Ventas, Compras, Clientes, Proveedores, Impuestos
                        (ideal para registrar tus gastos personales)
                    </li>
                    <li class="pricing-price">
                        <span>$25</span> / mes
                    </li>
                    <li>
                        Backups (mensuales)
                    </li>
                    <li>
                        App POS(Punto de Venta)
                    </li>
                    <li>
                        Capacitaciones
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="#">Contáctanos</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 wow zoomIn">
                <ul class="pricing-plan list-unstyled selected">
                    <li class="pricing-title">
                        Flex
                    </li>
                    <li class="pricing-desc">
                        Ventas, Compras, Clientes, Proveedores, Contabilidad, Inventarios, Caja - Bancos, Impuestos
                    </li>
                    <li class="pricing-price">
                        <span>$35</span> / mes
                    </li>
                    <li>
                        Reportes
                    </li>
                    <li>
                        Backups (semanales)
                    </li>
                    <li>
                        App Mobile
                    </li>
                    <li>
                        App POS(Punto de Venta)
                    </li>
                    <li>
                        Capacitaciones
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="#">Contáctanos</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Lite
                    </li>
                    <li class="pricing-desc">
                        Ventas, Compras, Clientes, Proveedores, Contabilidad, Inventarios, Caja - Bancos, Impuestos, </br>
                        Activos Fijos, N&oacute;mina
                    </li>
                    <li class="pricing-price">
                        <span>$59</span> / mes
                    </li>
                    <li>
                        Reportes
                    </li>
                    <li>
                        Backups (Diarios)
                    </li>
                    <li>
                        App Mobile
                    </li>
                    <li>
                        App POS(Punto de Venta, Biométrico)
                    </li>
                    <li>
                        Capacitaciones
                    </li>
                    <li>
                        <strong>Plataforma de Soporte</strong>
                    </li>
                    <li class="plan-action">
                        <a class="btn btn-primary btn-xs" href="#">Contáctanos</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Modular
                    </li>
                    <li class="pricing-desc">
                        Dise&ntilde;a tu paquete a la medida
                    </li>
                    <li>
                        Reportes, Indicadores de gestión (Dashboards)
                    </li>
                    <li>
                        Backups (Diarios)
                    </li>
                    <li>
                        App Mobile
                    </li>
                    <li>
                        App POS(Punto de Venta, Biométrico, Gift Cards)
                    </li>
                    <li>
                        Capacitaci&oacute;n, Seguimiento
                    </li>
                    <li>
                        <strong>Plataforma de Soporte</strong>
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="#">Contáctanos</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row m-t-lg">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg">
                <p>* Todos los planes inician con 3 ususarios.</p>
                <p>** No incluyen Modulos Especiales</p>
                <p>*** Los valores no incluyen impuestos</p>
                <p>**** Costo por documento emitido 0.01 ctv para Facturacion Electrónica</p>

            </div>
        </div>
    </div>

</section>

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


<script src="{{ asset('acatha/js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('acatha/js/pace.min.js') }}"></script>
<script src="{{ asset('acatha/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('acatha/js/classie.js') }}"></script>
<script src="{{ asset('acatha/js/cbpAnimatedHeader.js') }}"></script>
<script src="{{ asset('acatha/js/wow.min.js') }}"></script>
<script src="{{ asset('acatha/js/inspinia.js') }}"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
<script src="{{ asset('acatha/js/dist/jquery.validate.js') }}"></script>
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

</body>
</html>