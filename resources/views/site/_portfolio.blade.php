
<section id="portfolio" class="killPadding">
    <div class="container-fluid">
        <section id="client" class="client">
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <div class="section-head text-center">
                        <br/>
                        <h2>{{ $portfolio->titulo }}</h2>
                        <p>{!! nl2br($portfolio->texto) !!}</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="row gallery-filterable fullwidth">
            @foreach( $galeria as $imagem)

                <div class="col-xs-12 col-sm-6 col-md-3 photography branding">

                    <div class="portfolio-item dark-hover">
                        <div class="portfolio-thumb">
                            <img src="{{ asset( $imagem->imagem ) }}" alt="portfolio"
                                 class="img-responsive">
                        </div>
                        <div class="portfolio-desc">
                            <div class="portfolio-desc-inner">
                                <a href="{{ asset( $imagem->imagem ) }}"
                                   data-lightbox="product">open</a>
                                <h4>{{ $imagem->titulo }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>