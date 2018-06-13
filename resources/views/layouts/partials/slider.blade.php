<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $item=1; ?>
        @if(!empty($sliders))
        @foreach($sliders as $item)

        <?php
        if($item=1){
            $claseitem = "active";
        }else{
            $claseitem = "inactive";
        }
        ?>

        <li data-target="#inSlider" data-slide-to="<?php echo $item; ?>" class="<?php echo $claseitem; ?>"></li>

        <?php $item++; ?>

        @endforeach
        @endif



    </ol>
    <div class="carousel-inner" role="listbox">
        <?php $i=1; ?>

        @if(!empty($sliders))
        @foreach($sliders as $item)

        <?php
        if($i==1){
            $clase = "active";
        }else{
            $clase = "inactive";
        }
        ?>
        <div class="item <?php echo $clase; ?>">



            <div class="container">

                <div class="carousel-caption">

                    <p><div style="color: #FFF; font-size: 34px;">{{ $item->titulo }}<br/></div>
                        <div style="color: #FFF; font-size: 20px;">
                            @if(!empty($item->itemuno)) - {{ $item->itemuno }}<br/>@endif
                            @if(!empty($item->itemdos)) - {{ $item->itemdos }}<br/>@endif
                            @if(!empty($item->itemtres))- {{ $item->itemtres }}<br/>@endif
                            @if(!empty($item->itemcuatro))- {{ $item->itemcuatro }}<br/>@endif
                        </div><p>
                            <br/>
                            <div class="titulos" style="font-size: 26px;">{!! $item->detalle !!}<br/><br/></div>
                            <a id="myBtn" class="btn btn-lg btn-primary" role="button">Suscr&iacute;bete</a>
                        </p>
                    </div>
                    @if(($item->video_background)=='1')
                    <div class="carousel-image wow zoomIn">
                        <div id="background-video">
                            <iframe width="475" height="297" src="{{ $item->enlace_video }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    @endif

                </div>


                <!-- Set background for slide in css -->
                
                <div class="header-back {{ $item->id }}" style="background: url({{ $item->imagen  }}) 50% 0 no-repeat;"></div>
                



            </div>
            <?php $i++; ?>

            @endforeach
            @endif

        </div>
        <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>