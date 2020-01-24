<aside id="sidebar" class="sidebar c-overflow">
    <div class="s-profile">
        <a href="" data-ma-action="profile-menu-toggle">
            <div style="visibility: hidden" class="sp-pic">
                <img src="{{asset('img/flags/Brazil.png')}}" alt="">
            </div>

            <div class="sp-info">
                {{ Auth::user()->name }}
                <i class="zmdi zmdi-caret-down"></i>
            </div>
        </a>

        <ul class="main-menu">
            <li>
                <a href="{{ route('admin.configuracoes.editar') }}"><i class="zmdi zmdi-settings"></i> Configurações</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    <i class="zmdi zmdi-time-restore"></i> Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>

    <ul class="main-menu">
        <li @if(Request::segment(2) == 'home') class="active" @endif>
            <a href="{{ route('admin.home') }}"><i class="zmdi zmdi-home"></i> Início</a>
        </li>
        <li @if(Request::segment(2) == 'paginas') class="active" @endif>
            <a href="{{ route('admin.paginas') }}"><i class="zmdi zmdi-collection-plus"></i> Páginas</a>
        </li>
        <li @if(Request::segment(2) == 'equipe') class="active" @endif>
            <a href="{{ route('admin.equipe') }}"><i class="zmdi zmdi-accounts-add"></i> Equipe</a>
        </li>

        <li @if(Request::segment(2) == 'servicos') class="active" @endif>
            <a href="{{ route('admin.servicos') }}"><i class="zmdi zmdi-layers"></i> Serviços</a>
        </li>

        <li @if(Request::segment(2) == 'portfolios') class="active" @endif>
                <a href="{{ route('admin.portfolios') }}"><i class="zmdi zmdi-balance"></i>  Portfolios / Trabalhos</a>
        </li>

        <li @if(Request::segment(2) == 'slide') class="active" @endif>
            <a href="{{ route('admin.slide') }}"><i class="zmdi zmdi-image"></i>  Slides</a>
        </li>

        <li @if(Request::segment(2) == 'usuarios' || Request::segment(2) == 'papel') class="active sub-menu" @else class="sub-menu" @endif>
            <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-shield-security"></i> Segurança</a>
            <ul>
                @can('usuario_listar')
                    <li @if(Request::segment(2) == 'usuarios') class="active" @endif><a href="{{ route('admin.usuarios') }}">Lista de Usuários</a></li>
                @endcan
                @can('papel_listar')
                    <li @if(Request::segment(2) == 'papel') class="active" @endif><a href="{{ route('admin.papel') }}">Lista de Papéis</a></li>
                @endcan
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.configuracoes.editar') }}"><i class="zmdi zmdi-settings"></i> Configurações</a>
        </li>
    </ul>
</aside>