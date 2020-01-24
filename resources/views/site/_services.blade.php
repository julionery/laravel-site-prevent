
<section id="service" class="vtabs type_2">
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="section-head text-center">
                    <h2>{{ $servicos->titulo }}</h2>
                    <p>{!! nl2br($servicos->texto) !!}</p>
                </div>
            </div>
        </div>

        <!--  Services  -->
        <section id="service">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-3">
                        <div class="nws-item nws-hover">
                            <div class="nws-thumb">
                                <img class="img-responsive" alt="" src="{{ asset('eydia/treinamentos.jpg') }}">
                            </div>
                            <div class="news-head">
                                <h4><a href="#">Treinamentos Oferecidos</a></h4>
                            </div>
                            <div class="separator"><span></span></div>
                            <p style="height: 110px">Treinamento de Ponte Rolante Treinamento de Espaço Confinado Treinamento para Cipeiros Treinamento para Trabalho em Altura Treinamento NR10 entre outros... </p>
                            <a href="#contato">SAIBA MAIS...</a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="nws-item nws-hover">
                            <div class="nws-thumb">
                                <img class="img-responsive" alt="" src="{{ asset('eydia/exames.jpg') }}">
                            </div>
                            <div class="news-head">
                                <h4><a href="#">Exames Complementares</a></h4>
                            </div>
                            <div class="separator"><span></span></div>
                            <p style="height: 110px">Os exames clínicos são exigências da legislação vigente e devem ser realizados, obrigatoriamente, em todos os funcionários da empresa...</p>
                            <a href="#contato">SAIBA MAIS...</a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="nws-item nws-hover">
                            <div class="nws-thumb">
                                <img class="img-responsive" alt="" src="{{ asset('eydia/laudos.jpg') }}">
                            </div>
                            <div class="news-head">
                                <h4><a href="#">Laudos</a></h4>
                            </div>
                            <div class="separator"><span></span></div>
                            <p style="height: 110px">Os laudos tem por objetivo analisar as condições de trabalho dos setores administrativos e produtivos da empresa, ou mesmo de um estabelecimento particular...</p>
                            <a href="#contato">SAIBA MAIS...</a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="nws-item nws-hover">
                            <div class="nws-thumb">
                                <img class="img-responsive" alt="" src="{{ asset('eydia/pericias.jpg') }}">
                            </div>
                            <div class="news-head">
                                <h4><a href="#">Perícias</a></h4>
                            </div>
                            <div class="separator"><span></span></div>
                            <p style="height: 110px">Faz parte do escopo de trabalho: análise do processo, elaboração de quesitos, acompanhamento da diligência pericial, elaboração de laudo, análise do laudo...</p>
                            <a href="#contato">SAIBA MAIS...</a>
                        </div>
                        <br />
                    </div>


                </div>
            </div>
        </section>
        <!--  End Services  -->

        <div class="pages faq-page" style="padding-top: 50px">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="eydia-tg panel-group sc_toggle" id="sc_toggle" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">

                            @foreach( $servicosInfo as $servico)
                                <div class="panel-heading @if($servico->id == 1) active @endif" role="tab" id="heading{{ $servico->id }}">
                                    <h4 class="panel-title">
                                        <a @if($servico->id != 1) class="collapsed" @endif data-toggle="collapse" href="#toggle{{ $servico->id }}" aria-expanded="@if($servico->id != 1) false @else true @endif" aria-controls="toggle{{ $servico->id }}">
                                            {{ $servico->titulo }}
                                        </a>
                                    </h4>
                                </div>

                                <div id="toggle{{ $servico->id }}" class="panel-collapse collapse @if($servico->id == 1) in @endif" aria-labelledby="heading{{ $servico->id }}">
                                    <div class="panel-body">
                                        <p>{!! nl2br($servico->detalhes) !!}</p>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div> <!-- end .faq-wrapper -->
            </div>	<!-- end .container -->
        </div>	<!-- end .portdolio-item-single -->

    </div>
</section>