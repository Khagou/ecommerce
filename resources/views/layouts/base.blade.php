<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Ecommerce</title>
</head>
<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container ">
        <ul class="navbar-nav me-auto">
            <a class="navbar-brand" href="/">Ecommerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <li class="nav-item"><a href="/" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="/products" class="nav-link">Produits</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
        </ul>

        <form action="" class="d-flex" method="post" class="form-inline my-2 my-lg-0 d-inline-flex">
            <div class="input-group input-group-sm">
                <input type="text" name="search" class="form-control" id="" placeholder="Rechercher">
                <div class="input-group-append">
                    <button type="button" class="btn btn-secondary btn-number">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <a href="car.html" class="btn btn-success btn-sm ms-3 d-inline-flex align-items-center">
            <i class="fa fa-shopping-cart me-2"></i>
            panier
            <span class="badge badge-light">2</span>
        </a>
        </form>

        <ul class="navbar-nav pl-3">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
    
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
    </nav>
    
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Produits</h1>
            <p class="lead text-muted mb-0">blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla </p>
        </div>

    </section>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>