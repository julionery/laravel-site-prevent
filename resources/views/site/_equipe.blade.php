<section id="speaker" class="gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <div class="section-head text-center">
                    <h2>{{ $equipe->titulo }}</h2>
                    <p>{!! nl2br($equipe->texto) !!}</p>
                </div>
            </div>

            @foreach( $equipeInfo as $equipe)
                <div class="col-xs-12 col-sm-6 col-md-3 text-center executive">
                    <div class="team-mate">
                        <figure class="member-thumb">
                            <img height="225px" width="225px" src="{{ asset( $equipe->imagem ) }}" alt="team member"
                                 class="img-responsive">
                            <figcaption class="mask">
                                <ul>
                                    @if( $equipe->twitter != '' )
                                        <li><a href="{{ $equipe->twitter}}"><i class="fa fa-twitter"></i></a></li>@endif
                                    @if( $equipe->instagram != '' )
                                        <li><a href="{{ $equipe->instagram}}"><i class="fa fa-instagram"></i></a>
                                        </li>@endif
                                    @if( $equipe->facebook != '' )
                                        <li><a href="{{ $equipe->facebook}}"><i class="fa fa-facebook"></i></a>
                                        </li>@endif
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="about">
                            <h4>{{ $equipe->nome }}</h4>
                            <span>{{ $equipe->especializacao}}</span>
                            <p>{!! nl2br($equipe->texto) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>