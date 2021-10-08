 <!-- BEGIN: Header-->
 <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-brand-center">
     <div class="navbar-header d-xl-block d-none">
         <ul class="nav navbar-nav flex-row">
             <li class="nav-item"><a class="navbar-brand" href="">
                     <div class="brand-logo"></div>
                 </a></li>
         </ul>
     </div>
     <div class="navbar-wrapper">
         <div class="navbar-container content">
             <div class="navbar-collapse" id="navbar-mobile">
                 <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                     <ul class="nav navbar-nav">
                         <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                 class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                     class="ficon feather icon-menu"></i></a></li>
                     </ul>

                     {{-- <ul class="nav navbar-nav bookmark-icons">
                         <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                                 data-placement="top" title="To-do"><i class="ficon feather icon-check-square"></i></a>
                         </li>
                         <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                                 data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a>
                         </li>
                         <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                                 data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                         <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                                 data-placement="top" title="Calendario"><i class="ficon feather icon-calendar"></i></a>
                         </li>
                     </ul> --}}

                     {{-- <ul class="nav navbar-nav">
                         <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                     class="ficon feather icon-star warning"></i></a>
                             <div class="bookmark-input search-input">
                                 <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                 <input class="form-control input" type="text" placeholder="Explorador..." tabindex="0"
                                     data-search="template-list">
                                 <ul class="search-list search-list-bookmark"></ul>
                             </div>
                         </li>
                     </ul> --}}

                 </div>
                 <ul class="nav navbar-nav float-right">
                     <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                             id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                             aria-expanded="false"><i class="flag-icon flag-icon-es"></i><span
                                 class="selected-language">Español</span></a>
                         <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                 <a class="dropdown-item" href="#"data-language="en"><i class="flag-icon flag-icon-us"></i>Ingles</a>
                                 {{-- <a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i>Frances</a>
                                 <a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i>Aleman</a>
                                 <a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i>Portugues</a> --}}
                                </div>
                     </li>
                     {{-- <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                 class="ficon feather icon-maximize"></i></a></li> --}}


                     {{-- <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                 class="ficon feather icon-search"></i></a>
                         <div class="search-input">
                             <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                             <input class="input" type="text" placeholder="Buscador..." tabindex="-1"
                                 data-search="template-list">
                             <div class="search-input-close"><i class="feather icon-x"></i></div>
                             <ul class="search-list search-list-main"></ul>
                         </div>
                     </li> --}}

                     <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                             data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                                 class="badge badge-pill badge-primary badge-up">5</span></a>
                         <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                             <li class="dropdown-menu-header">
                                 <div class="dropdown-header m-0 p-2">
                                     <h3 class="white">5 Nuevas</h3><span
                                         class="notification-title">Notificaciónes</span>
                                 </div>
                             </li>
                             <li class="scrollable-container media-list"><a class="d-flex justify-content-between"
                                     href="javascript:void(0)">
                                     <div class="media d-flex align-items-start">
                                         <div class="media-left"><i
                                                 class="feather icon-plus-square font-medium-5 primary"></i></div>
                                         <div class="media-body">
                                             <h6 class="primary media-heading">Tienes una nueva orden!</h6><small
                                                 class="notification-text"> ¿Me vas a encontrar esta noche?</small>
                                         </div><small>
                                             <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">hace 9
                                                 horas</time></small>
                                     </div>
                                 </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                     <div class="media d-flex align-items-start">
                                         <div class="media-left"><i
                                                 class="feather icon-download-cloud font-medium-5 success"></i></div>
                                         <div class="media-body">
                                             <h6 class="success media-heading red darken-1">99% Carga del servidor</h6>
                                             <small class="notification-text">Tienes un nuevo pedido de
                                                 productos.</small>
                                         </div><small>
                                             <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">hace 5
                                                 horas</time></small>
                                     </div>
                                 </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                     <div class="media d-flex align-items-start">
                                         <div class="media-left"><i
                                                 class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                         <div class="media-body">
                                             <h6 class="danger media-heading yellow darken-3">Advertencia</h6>
                                             <small class="notification-text">Uso del CPU del 99%.</small>
                                         </div><small>
                                             <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">hace 20
                                                 minutos</time></small>
                                     </div>
                                 </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                     <div class="media d-flex align-items-start">
                                         <div class="media-left"><i
                                                 class="feather icon-check-circle font-medium-5 info"></i></div>
                                         <div class="media-body">
                                             <h6 class="info media-heading">Completa la tarea</h6><small
                                                 class="notification-text">Curso de html pendiente</small>
                                         </div><small>
                                             <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Semana
                                                 pasada</time></small>
                                     </div>
                                 </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                     <div class="media d-flex align-items-start">
                                         <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i>
                                         </div>
                                         <div class="media-body">
                                             <h6 class="warning media-heading">Generar informe mensual</h6><small
                                                 class="notification-text">Falta el informe de este mes</small>
                                         </div><small>
                                             <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">El mes
                                                 pasado</time></small>
                                     </div>
                                 </a></li>
                             {{-- <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                    href="javascript:void(0)">Read all notifications</a></li> --}}
                         </ul>
                     </li>

                     <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                             href="#" data-toggle="dropdown">
                             <div class="user-nav d-sm-flex d-none"><span
                                     class="user-name text-bold-600">{{ Auth::user()->name }}</span>
                                 @if (Auth::user()->status == 0)
                                 <span class="user-status"><i
                                         class="fa fa-circle font-small-3 text-danger"></i>Inactivo</span>
                                 @else
                                 <span class="user-status"><i
                                         class="fa fa-circle font-small-3 text-success"></i>Activo</span>
                                 @endif
                             </div>
                             <span>
                                 <img class="round"
                                     src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}"
                                     alt="avatar" height="40" width="40">
                             </span>
                         </a>

                         <div class="dropdown-menu dropdown-menu-right">
                             <a class="dropdown-item" href="{{ route('profile') }}"><i class="feather icon-user"></i>
                                 Perfil</a>
                             {{-- <a class="dropdown-item" href="#"><i class="feather icon-mail"></i> Mi correo</a>
                             <a class="dropdown-item" href="#"><i class="feather icon-check-square"></i> Tareas</a>
                             <a class="dropdown-item" href="#"><i class="feather icon-message-square"></i> Chats</a> --}}
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="feather icon-power"></i>
                                 Salir</a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </nav>

 @include('layouts.components.sidebar')
