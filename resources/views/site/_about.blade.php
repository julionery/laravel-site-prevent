
<section id="overview" class="overview">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="section-head title-bold title-sep sep-left smargin-25">
                    <h2>{{ $sobre->titulo }}</h2>
                    <p style="text-align: justify">{!! nl2br($sobre->texto) !!}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="img-box">
                    <img src="{{ asset( $sobre->imagem) }}" alt="imagem-{{ $sobre->titulo }}" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="sc_cta">
    <div class="container">
        <p>{!! $sobre->descricao  !!}</p>
        <a href="#contato">FALE CONOSCO</a>
    </div>
</div>
