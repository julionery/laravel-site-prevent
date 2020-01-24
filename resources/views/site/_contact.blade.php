
<section id="contato" class="contact2">
    <div class="bg-colorleft gray"></div>
    <div class="bg-color left white"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 item_left">
                <h3 class="subtitle">{{ $contato->titulo }}</h3>
                <p style="text-align: justify">{!! nl2br($contato->texto) !!}</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 item_right">
                <h3 class="subtitle">{{ $configuracao->tituloFaleConosco }}</h3>
                <div class="row">
                    <form action="{{ route('site.contato.enviar') }}" method="post" id="contact-form" class="contact-form">
                        <div class="col-md-6">
                            <input type="text" name="nome" placeholder="Nome" required class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="telefone" placeholder="Telefone" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="E-mail" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="assunto" placeholder="Assunto" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <textarea name="mensagem" class="form-control" placeholder="Mensagem"></textarea>
                            <input type="submit" value="Enviar Mensagem" class="message-sub pull-right btn btn-blue">
                        </div>
                    </form>
                </div>
                <div id="success">
                    <p>Sua mensagem foi enviada com sucesso! Eu entrarei em contato assim que puder.</p>
                </div>
                <div id="error">
                    <p>Algo deu errado, tente atualizar e enviar o formulário novamente.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact3 margin_bottom100">
    <div class="bg-color left white"></div>
    <div class="bg-color-right gray"></div>
    <div class="container">
        <div class="row">
            <div class="map-block">
                <div id="map-canvas"></div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="map-block-inner"></div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="address">
                    <h3 class="subtitle">{{ $configuracao->textoFaleConosco }}</h3>
                    @if( $configuracao->nomeEmpresa != '' )<p><i class="fa fa-home"></i>{{ $configuracao->nomeEmpresa }}
                    </p>@endif
                    @if( $configuracao->endereco != '' )<p><i
                                class="fa fa-map-marker"></i> {{ $configuracao->endereco }} </p>@endif
                    @if( $configuracao->telefone1 != '' )<p><i
                                class="fa fa-phone"></i>Celular: {{ $configuracao->telefone1 }}</p>@endif
                    @if( $configuracao->telefone2 != '' )<p><i
                                class="fa fa-phone"></i>Empresa: {{ $configuracao->telefone2 }}</p>@endif
                    @if( $configuracao->email != '' )<p><i class="fa fa-envelope"></i><a
                                href="mailto:{{ $configuracao->email }}">{{ $configuracao->email }}</a></p>@endif
                    @if( $configuracao->email2 != '' )<p><i class="fa fa-envelope"></i><a
                                href="mailto:{{ $configuracao->email2 }}">{{ $configuracao->email2 }}</a></p>@endif

                </div>
            </div>
        </div>
    </div>
</section>