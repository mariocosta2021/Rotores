@if (null !== Auth::user())
    <nav class="sidebar sidebar-offcanvas">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="{{ route('admin.user.show', Auth::User()->id) }}" class="nav-link">
                    <div class="profile-image">

                        @if (isset(Auth::User()->photo))
                            <img class="img-xs rounded-circle" src="{{ Auth::User()->photo }}"
                                alt="{{ Auth::User()->name }}">
                        @else
                            <img class="img-xs rounded-circle" src="/dashboard/images/user.png" alt="">
                        @endif
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ Auth::User()->name }}</p>
                        <p class="designation">{{ Auth::User()->level }}</p>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-category">Dashboard</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>


            @if ('Administrador' == Auth::user()->level || 'Motorista' == Auth::user()->level)
                <li class="nav-item nav-category mt-2">Serviços</li>
                {{-- Serviços --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.viaturas.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Viaturas</span>
                    </a>
                </li>
            @endif


            @if ('Administrador' == Auth::user()->level)
                <li class="nav-item nav-category mt-2">Atribuições</li>
                {{-- Serviços --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.atribuicoes.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Atribuir Viaturas</span>
                    </a>
                </li>
                <li class="nav-item nav-category mt-2">Gastos</li>
                {{-- Serviços --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.gastosCombustivel.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Combustível</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.MultaViaturas.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Multas de Viaturas</span>
                    </a>
                </li>
            @endif

            <li class="nav-item nav-category mt-2">Solicitaçoes</li>
            {{-- Serviços --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.solicitacoes.listar') }}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">
                        @if ('Administrador' == Auth::user()->level || 'Motorista' == Auth::user()->level)
                            Listar Solicitações
                        @else
                            Minhas Solicitações
                        @endif
                    </span>
                </a>
            </li>
            @if ('Administrador' == Auth::user()->level)
                <li class="nav-item nav-category mt-2">Estatistica</li>
                {{-- Serviços --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.estatistic.combustivel') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">
                            Gastos Combustivel
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.estatistic.multa') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">
                            Gastos Multas
                        </span>
                    </a>
                </li>
            @endif

            @if ('Administrador' == Auth::user()->level)
                {{-- employees --}}
                <li class="nav-item nav-category mt-2">Utilizadores</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.clientes.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Clientes </span>
                    </a>
                </li>

                <li class="nav-item mb-3">
                    <a class="nav-link" href="{{ route('admin.user.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Utilizadores</span>
                    </a>
                </li>
            @endif
            <li class="nav-item nav-category mt-2">Web site</li>
            {{-- Serviços --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('site.home') }}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Ir em site</span>
                </a>
            </li>


        </ul>
    </nav>
@endif
