<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
   
    <meta name="_token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Biblioteca') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrase') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            <div class="row bg-light p-0 m-0">
                @guest
                    <div class="col-12">
                        @yield('content')
                    </div>
                    
                @else
                <div class="col-2 border-end p-0" style="min-height: 900px">
                    <div class="list-group rounded-0">
                        <a href="{{ route('dashboard.index') }}" class="list-group-item list-group-item-action p-4 p-4" id="dashboard">
                            <span>
                                <h5>Dashboard</h5>
                            </span>
                        </a>
                        <a href="{{ route('prestamo.index') }}" class="list-group-item list-group-item-action p-4 p-4" id="prestamo">
                            <span>
                                <h5>Adminstracion de prestamos</h5>
                            </span>
                        </a>
                        <a href="{{ route('recurso.index') }}" class="list-group-item list-group-item-action p-4" id="libro">
                            <span>
                                <h5> Libros y recursos</h5>
                            </span>
                           
                        </a>
                        <a href="{{ route('categoria.index') }}" class="list-group-item list-group-item-action p-4" id="categoria">
                            <span>
                                <h5>Categorias</h5>
                            </span>            
                        </a>
                        <a href="{{ route('editorial.index') }}" class="list-group-item list-group-item-action p-4" id="editorial">
                            <span>
                                <h5>Editoriales</h5>
                            </span>            
                        </a>
                        <a href="{{ route('author.index') }}" class="list-group-item list-group-item-action p-4" id="author">
                            <span>
                                <h5>Authores</h5>
                            </span>
                        </a>
                        <a href="{{ route('usuario.index') }}" class="list-group-item list-group-item-action p-4" id="usuario-menu">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                <h5>Usuarios</h5>
                            </span>
                        </a>
                        <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action p-4" id="admin-system">
                            <span>
                                <h5>
                                    Administracion de sistema
                                </h5>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-10 p-4">
                    @yield('content')
                </div>
                @endguest
            </div>
        </main>
    </div>
    @stack('scripts')
</body>
</html>
