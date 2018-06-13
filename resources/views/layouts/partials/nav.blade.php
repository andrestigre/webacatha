<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ asset($empresa->logo) }}" class="img-responsive"/></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div style=" text-align: right" ><i class="fa fa-mobile"> {{ $empresa['telefono'] }}</i>&nbsp; &nbsp;<i class="fa fa-envelope"> {{ $empresa['email'] }}</i></div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#page-top">Inicio</a></li>
                    <li><a class="page-scroll" href="#features">Caracteristicas</a></li>
                    <li><a class="page-scroll" href="#electronicos">Facturaci&oacute;n Electr&oacute;nica</a></li>
                    <li><a class="page-scroll" href="#soporte">Soporte</a></li>
                    <li><a class="page-scroll" href="#pricing">Precios</a></li>
                    <li><a class="page-scroll" href="#contact">Contacto</a></li>
                    <li><a class="page-scroll" href="http://www.acatha.com/edocs/">Edocs</a></li>
                    <li><a class="page-scroll" href="https://prd.acatha.com">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>