
<header id="head" class="navbar-default sticky-header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-10">
                    <div class="row">

                        @if( $configuracao->email != '' )
                            <div class="col-xs-12 col-md-5 pull-left quick-contact">
                                <i class="fa fa-envelope-o"></i>
                                <p><span>E-mail: </span><a
                                            href="mailto:{{$configuracao->email}}">{{$configuracao->email}}</a></p>
                            </div>
                        @endif

                        @if( $configuracao->telefone1 != '' )
                            <div class="col-xs-12 col-md-4 pull-left quick-contact">
                                <i class="fa fa-phone"></i>
                                <p><span>Celular: </span>{{$configuracao->telefone1}}</p>
                            </div>
                        @endif

                        @if( $configuracao->telefone2 != '' )
                            <div class="col-xs-12 col-md-3 pull-left quick-contact">
                                <i class="fa fa-phone"></i>
                                <p><span>Empresa: </span>{{$configuracao->telefone2}}</p>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="col-sm-6 col-md-2">
                    <ul class="pull-right social-links text-center">
                        @if( $configuracao->twitter != '' )
                            <li><a href="{{$configuracao->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>@endif
                        @if( $configuracao->instagram != '' )
                            <li><a href="{{$configuracao->instagram}}" target="_blank"><i
                                            class="fa fa-instagram"></i></a></li>@endif
                        @if( $configuracao->facebook != '' )
                            <li><a href="{{$configuracao->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>@endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="slide-top">
        <div class="container">
            <span class="hide-top"><i class="fa fa-angle-up"></i></span>
        </div>
    </div>

    <div class="container">
        <div class="mega-menu-wrapper border clearfix">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <a class="navbar-brand" href="{{ route('site.home') }}">
                    <img style="max-height: 70%" src=" {{ asset('img/logo_prev.jpg') }}" alt="Prevent"
                         class="img-responsive">
                </a>
                <!-- /logo -->
            </div>

            <!-- main nav -->

            <nav class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="current"><a href="#">{{ $configuracao->itemMenu6 }}</a></li>
                </ul>
            </nav>

        <!-- /main nav -->
        </div>
    </div>
</header>