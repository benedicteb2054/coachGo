<!doctype html>
<html lang="en">


@include('layouts.partials.head')


<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading  footer-fixed">

    <header class="header_area">
        <div class="main_menu fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light"
                style="background-color: #fff; box-shadow: 0 2px 2px 3px #d6d6d6;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class=" logo_h" href="#">
                        <h3 class="pt-2" style="font-weight: 900; color:#e4403b">Coach & Go</h3>
                        {{-- <img src="assets/images/logo.png" alt="un logo" />--}}
                    </a> 
                        <button style="background-color: beige;" class="navbar-toggler" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span> <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#nos_offres">Nos Offres</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('coachs.index') }}" class="nav-link">Nos Coachs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('les-avis.index') }}">Les Avis</a>
                                </li>



                                <li class="nav-item">
                                    <a class="nav-link" href="#about_us">Nous Contacter</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link search" id="search">
                                        <i class="ti-search"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon Compte</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                @if (Auth::check())
                                    {{-- <a class="dropdown-item" href="{{ route('logout') }}">Se déconnecter</a> --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Se déconnecter
                                    </a>
                                    <a class="dropdown-item" href="{{ route('/') }}">Mon Compte</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <a class="dropdown-item" href="{{ route('login') }}">Se Connecter</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">Créer un Compte</a>
                                @endif
                            </div>
                        </div>
                </div>

            </nav>
        </div>
    </header>
    <div class="main-wrapper">
        @yield('main-wrapper')

        <div id="myDynamicModal" class="modal fade" aria-hidden="true"></div>

    </div>

    @include('layouts.partials.scripts')

    {{-- <div class="loader">
        <center>
          <img class="loading-image" src="{{ asset('images/gears.gif') }}" alt="busy...">
        </center>
      </div> --}}

    <!-- Page Scripts -->
    @yield('scripts')

</body>

</html>
