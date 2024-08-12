<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home4u</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tooplate-moso-interior.css') }}">
    

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
  <style>
    .navbar{
      height: 9% !important;
    }
    .navbar-nav .nav-link.active, .navbar-nav .nav-link:hover {
      height: 89% !important;
    background:#FFD74F;
    color:white;
}

  </style>
</head>
<body>
    <div id="app">
    
      <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
      
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                
                  
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle click-scroll" href="#section_3" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="shop-list">Shop Listing</a></li>

                            <li><a class="dropdown-item" href="shop_detail">Shop Detail</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Contact</a>
                    </li>
                      
                  @if (Route::has('login') && Auth::guard('web'))
                  @auth
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} 
                    </a>
        
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                          Logout
                        </a>
        
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @elseif (Route::has('login') && Auth::guard('admin'))
                <li class="nav-item dropdown">
                  
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="admin/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::guard('admin')->user()->name }} heyyyyyyy </a>
      
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.home') }}">Profile heyyyyyyy </a>

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
                  @else
                  <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('login') }}">Login</a>
                </li>

                      @if (Route::has('register'))
                      <li class="nav-item">
                        <a class="nav-link click-scroll"href="{{ route('register') }}">Register</a>
                    </li>
  
              
                      @endif
                  @endauth
          @endif
                </ul>
            </div>
        </div>
    </nav>

      
            @yield('content')
    </div>
    
    <script type="text/javascript" src="{!! asset('/js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/click-scroll.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/jquery.backstretch.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/owl.carousel.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/custom.js') !!}"></script>

</body>
</html>
