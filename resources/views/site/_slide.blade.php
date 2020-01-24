<div class="slider-wrapper education fullscreen">
    <div class="init-slider1 control-one clb slide-overlay">

        @foreach( $slideInfo as $slide)

            <div class="item" style="background-image: url({{ URL::asset($slide->imagem) }})">
                <div class="container">
                    <div class="slide-item fullscreen wow fadeIn" data-wow-duration="0.6s">
                        <div class="slide-item-inner white">
                            <h2>{{ $slide->titulo }}</h2> <br class="hidden-xs"> <h3>{{ $slide->subtitulo }}</h3>
                            <h3>{!! nl2br($slide->descricao) !!}</h3>
                            <p>{!! nl2br($slide->texto) !!}</p>
                            <!--
                             <div>
                                     <span class="bsns-btn">
                                         <a href="#contato" class="btn btn-blue">Cotate-nos</a>
                                     </span>
                             </div>
                             -->
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>