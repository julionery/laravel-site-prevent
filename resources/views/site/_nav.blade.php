<nav class="collapse navbar-collapse navbar-right">
    <ul class="nav navbar-nav">
    
        <li class="current"><a href="#start">
        @if( !empty($configuracao->itemMenu1) )
            {{ $configuracao->itemMenu1 }}
        @else
            Início
        @endif
        </a></li>

        <li><a href="#overview">
        @if( !empty($configuracao->itemMenu2) )
            {{ $configuracao->itemMenu2 }}
        @else
            Geral
        @endif
        </a></li>
        
        @if($portfolio != null)
            <li><a href="#portfolio">
            @if( !empty($configuracao->itemMenu3) )
                {{ $configuracao->itemMenu3 }}
            @else
                Portifólio
            @endif
            </a></li>
        @endif

        <li><a href="#service">
        @if( !empty($configuracao->itemMenu1) )
        {{ $configuracao->itemMenu4 }}
        @else
                Portifólio
            @endif
        </a></li>

        <li><a href="#speaker">
        @if( !empty($configuracao->itemMenu5) )
            {{ $configuracao->itemMenu5 }}
        @else
            Equipe
        @endif
        </a></li>

        <li><a href="#contato">
        @if( !empty($configuracao->itemMenu6) )
            {{ $configuracao->itemMenu6 }}
        @else
            Contato
        @endif
        </a></li>
    </ul>
</nav>