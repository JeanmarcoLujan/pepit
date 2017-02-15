<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .datos{
            margin-left: 40px;
            margin-right: 40px;
        }

        .entrada_salida{
            margin-right: 20px;
        }
        .navbar_header{
            background-color: #DCDCDC;
        }
        .title_header{
            color: red;
        }

        .lista_grupo_contacto{
            height: 400px;
        }
        .ver_grupo{
            margin-left: 20px;
            margin-right: 20px;
        }
        .aprobada{
            background-color: green;
            color: white;
        }
        .desaprobada{
            background-color: red;
            color: white;
        }
        .modal { width: 75% !important ; 
          height: 100%; }
        

    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    
     <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    
     <!-- Materialize CSS -->
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    
     <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
    
    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    
    <!-- MaterialDark CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top navbar_header">
        <div class="">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <div class="title_header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        PEPIT <small>Proyecto Especial del Parque Industrial de Trujillo</small>
                    </a>
                </div>
                
            </div>

            <div class="collapse navbar-collapse entrada_salida" id="app-navbar-collapse">

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Iniciar sesión</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse</a></li>
                        <li><a target="_blank" href="{{ url('/help') }}">Ayuda en linea</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a target="_blank" href="{{ url('/help') }}"><i class="fa fa-btn fa-sign-out"></i>Ayuda en linea</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar sesión</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @if (!Auth::guest())
        <section class="NavLateral full-width">
            <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
            <div class="NavLateral-content full-width">
                <header class="NavLateral-title full-width center-align">
                  PEPIT <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
                </header>
                <figure class="full-width NavLateral-logo">
                    <img src="{{ asset('assets/img/logo.jpg') }} " alt="material-logo" class="responsive-img center-box">
                    <figcaption class="center-align">Proyecto Especial del Parque Industrial de Trujillo</figcaption>
                </figure> 
                <div class="NavLateral-Nav">
                    <ul class="full-width">
                        <li>
                            <a href="{{ url('/login') }}" class="waves-effect waves-light"><i class="zmdi zmdi-home zmdi-hc-fw"></i> Inicio</a>
                        </li>
                        <li class="NavLateralDivider"></li>
                        <li>
                            <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Empresas </a>
                            <ul class="full-width">
                                <li><a href="{{ url('/empresa') }}" class="waves-effect waves-light">Registro</a></li>
                                <li class="NavLateralDivider"></li>
                                <li><a href="{{ url('empresa/show') }}" class="waves-effect waves-light">Lista</a></li>
                            </ul>
                        </li>
                        <li class="NavLateralDivider"></li>
                        <li>
                            <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Sucursales </a>
                            <ul class="full-width">
                                <li><a href="{{ url('/sucursal ') }}" class="waves-effect waves-light">Registro</a></li>
                                <li class="NavLateralDivider"></li>                               
                            </ul>
                        </li>
                        <li class="NavLateralDivider"></li>
                        <li>
                            <a href="{{ url('/validacion') }}" class="waves-effect waves-light"><i class="zmdi zmdi-home zmdi-hc-fw"></i> Validacion del proceso</a>
                        </li>
                        <li class="NavLateralDivider"></li>
                        <li>
                            <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-widgets zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Contactos </a>
                            <ul class="full-width">
                                <li><a href="{{ url('/contacto') }}" class="waves-effect waves-light">Registro</a></li>
                                <li class="NavLateralDivider"></li>
                                <!--<li><a href="{{ url('/contacto/show') }}" class="waves-effect waves-light">Lista</a></li>
                                <li class="NavLateralDivider"></li>-->
                                <li><a href="{{ url('/mesa') }}" class="waves-effect waves-light">Mesas de Trabajo</a></li>
                            </ul>
                        </li>
                        <li class="NavLateralDivider"></li>

                        <li>
                            <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-view-web zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Inspecciones </a>
                            <ul class="full-width">
                                <li><a href="{{ url('/inspeccion/proceso') }}" class="waves-effect waves-light">Seguimiento de Proceso de Venta</a></li>
                                <li class="NavLateralDivider"></li>
                                <li><a href="{{ url('/inspeccion/vendidas') }}" class="waves-effect waves-light">Empresas vendidas</a></li>
                                
                            </ul>
                        </li>   
                    </ul>
                </div>  
            </div>  
        </section>
        @yield('contenido')
        
    @else
        @yield('content')
    @endif

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <!-- Sweet Alert JS -->
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    
    <!-- MaterialDark JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>


    @section('scripts')
    @show
</body>
</html>
