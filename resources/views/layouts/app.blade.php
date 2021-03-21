<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Unkown')</title>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/inside.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top  ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="./images/logo.png" class="logo" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <!--website out layout -->
                             <li class="nav-item">
                                <a class="nav-link" href="{{ URL('/#home')}}">Accueil </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ URL('/#about')}}">Pourquoi nous </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ URL('/#service')}}">Service</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ URL('/#contact')}}">Contact</a>
                              </li>
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-success" href="{{ route('login') }}">{{ __('Se Connecter') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-success" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="auth-login">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('history')}}" >{{__('History')}} </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('exrcices')}}">{{__('Exrcices')}} </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{__('food')}}</a>
                                </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a  class="dropdown-item" href="{{ route('account') }}">{{__('Account')}}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
         @yield('content')
        <div class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="h4">CONTACT</div>
                        <ul class="list-unstyled">
                            <li><b>Location: </b>Tunisia ,Sidi Bouzid </li>
                            <li><b>Email: </b>  mohsenmnassri17@gmail.com</li>
                            <li><b>Email: </b>   mohsenmnassri7@gmail.com</li>
                            <li><b>Tel: </b> (+216) 52 802 352</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="h4">Healthy</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod .ctetur adipiscing elit sed do eiusmod tempor</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-unstyled social-media">
                            <li><a href="#"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="copy-right text-center">
               <p> &copy;2020 all right reced on <strong>Healthy Way</strong></p>
            </div>
        </div>


<!--#3b5998-->
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
