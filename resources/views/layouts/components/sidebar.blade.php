<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-dark navbar-without-dd-arrow navbar-shadow menu-border"
        role="navigation" data-menu="menu-wrapper">

        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home') }}">
                        {{-- <div class="brand-logo"></div> --}}
                        <img src="{{ asset('img/next-genius/logo.png') }}" width="210px" alt="logo">
                        {{-- <h2 class="brand-text mb-0">Vuexy</h2> --}}
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>

        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                @if (Auth::user()->admin == 0)
                <li class="dropdown nav-item"><a class="nav-link" href="{{ route('home') }}"><i
                            class="feather icon-home"></i><span data-i18n="Dashboard">Inicio</span></a>
                </li>
                <li class="dropdown nav-item"><a class="nav-link" href="{{ route('shop.list') }}"><i
                            class="feather icon-shopping-bag"></i><span data-i18n="Dashboard">Tienda</span></a>
                </li>
                <li class="dropdown nav-item"><a class="nav-link" href="{{ route('home') }}"><i
                            class="feather icon-sidebar"></i><span data-i18n="Dashboard">Cursos</span></a>
                </li>
                @else

                <li class="dropdown nav-item"><a class="nav-link" href="{{ route('home') }}"><i
                            class="feather icon-home"></i><span data-i18n="Dashboard">Inicio</span></a>
                </li>
                <li class="dropdown nav-item"><a class="nav-link" href="{{ route('shop.list') }}"><i
                            class="feather icon-shopping-bag"></i><span data-i18n="Dashboard">Tienda</span></a>
                </li>
                <li class="dropdown nav-item"><a class="nav-link" href="{{ route('course.list') }}"><i
                            class="feather icon-sidebar"></i><span data-i18n="Dashboard">Cursos</span></a>
                </li>
                <li class="dropdown nav-item"><a class="nav-link" href="{{ route('users.list') }}"><i
                            class="feather icon-user"></i><span data-i18n="Dashboard">Usuarios</span></a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
