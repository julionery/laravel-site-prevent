<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="section-head text-center">
                    <h2>{{ $visaoGeral->titulo }}</h2>
                    <p>{!! nl2br($visaoGeral->texto) !!}</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service6">
                    <div class="service-item text-center">
                        <div class="service-icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <h4>{{ $missao->titulo }}</h4>
                        <p>{!! nl2br($missao->texto) !!}</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service6">
                    <div class="service-item text-center">
                        <div class="service-icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <h4>{{ $visao->titulo }}</h4>
                        <p>{!! nl2br($visao->texto) !!}</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service6">
                    <div class="service-item text-center">
                        <div class="service-icon">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        </div>
                        <h4>{{ $valores->titulo }}</h4>
                        <p>{!! nl2br($valores->texto) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
