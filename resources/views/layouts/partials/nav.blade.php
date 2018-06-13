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
                    @if(!empty($itemnavs))
                        @foreach($itemnavs as $item)
                            <li><a class="page-scroll" href="{{ $item->enlace }}">{{ $item->item_nav }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>