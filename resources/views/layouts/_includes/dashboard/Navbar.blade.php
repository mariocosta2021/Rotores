<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

        <a class="navbar-brand " href="{{ route('admin.home') }}">
            <img src="/dashboard/logo_white.png" alt="logo" /> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Sistema de Gestão de Frotas
            </li>

        </ul>

        <ul class="navbar-nav ml-auto">


            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    @if (isset( Auth::User()->photo))
                    <img class="img-xs rounded-circle" src="{{ Auth::User()->photo }}"
                    alt="{{ Auth::User()->name }}">
                    @else
                    <img class="img-xs rounded-circle" src="/dashboard/images/user.png"
                    alt="">
                    @endif
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        @if (isset( Auth::User()->photo))
                        <img class="img-xs rounded-circle" src="{{ Auth::User()->photo }}"
                        alt="{{ Auth::User()->name }}">
                        @else
                        <img class="img-xs rounded-circle" src="/dashboard/images/user.png"
                        alt="">
                        @endif
                        <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::User()->name }}</p>
                        <p class="font-weight-light text-muted mb-0">{{ Auth::User()->email }}</p>
                    </div>
                    <a class="dropdown-item" href="{{ route('admin.user.show', Auth::User()->id) }}">Meu Perfil
                        <i class="dropdown-item-icon ti-dashboard"></i>
                    </a>

                    <a class="dropdown-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        href="{{ route('logout') }}">Terminar a Sessão<i
                            class="dropdown-item-icon ti-power-off"></i></a>



                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
