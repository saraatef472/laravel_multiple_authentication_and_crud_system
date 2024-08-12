<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Tooplate">

    <title>interior page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tooplate-moso-interior.css') }}">

    @vite(['resources/css/styles.css'],['resources/js/custom.js'])

<style>
  .img-fluid {
    width: 100%;
     height: 300px !important;
}
</style>
    <!--

Tooplate 2133 Moso Interior

https://www.tooplate.com/view/2133-moso-interior

Bootstrap 5 HTML CSS Template

-->
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
      
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                
                  
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/?#section_2">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle click-scroll" href="#section_3" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                          <li><a class="dropdown-item" href="{{ route("show") }}"> Show All Designs</a></li>

                            <li><a class="dropdown-item" href="shop-list">Shop Listing</a></li>

                            <li><a class="dropdown-item" href="shop_detail">Shop Detail</a></li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/?#section_4">Reviews</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/?#section_5">Contact</a>
                    </li>
                      
                @if (Route::has('login'))
                  @auth
                    <li class="nav-item dropdown">  
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{Auth::user()->name}}
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
                
                    @else
                    <li class="nav-item">
                      <a class="nav-link click-scroll" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link click-scroll"href="{{ route('register') }}">Register</a>
                    </li>
              
                  
                
                  @endauth
              @endif
                </ul>
            </div>
        </div>
    </nav>

    <main>
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
   


        <section class="featured-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12">
                        <div class="custom-block featured-custom-block">
                            <h2 class="mt-2 mb-4">Opening Hours</h2>

                            <div class="d-flex">
                                <i class="featured-icon bi-clock me-3"></i>

                                <div>
                                    <p class="mb-2">
                                        Mon - Friday ~
                                        <strong class="d-inline">
                                                8:00 AM - 6:00 PM
                                            </strong>
                                    </p>

                                    <p class="mb-2">
                                        Saturday ~
                                        <strong class="d-inline">
                                                10:00 AM - 10:00 PM
                                            </strong>
                                    </p>

                                    <p>Sunday ~ Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="shop-section section-padding" id="section_3">
            <div class="container">
                <div class="row">

              
              
                  @foreach($products as $product)
                    <div class="col-lg-4 col-12" >
                        <div class="shop-thumb">
                            <div class="shop-image-wrap">
                                <a href="shop-detail.html">
                                  <img src="/images/{{ $product->image }}" height="400px" class="shop-image img-fluid" >
                                </a>

                                <div class="shop-icons-wrap">
                                    <div class="shop-icons d-flex flex-column align-items-center">
                                        <a href="#" class="shop-icon bi-heart"></a>

                                        <a href="#" class="shop-icon bi-bookmark"></a>
                                    </div>

                                    <p class="shop-pricing mb-0 mt-3">
                                        <span class="badge custom-badge">{{ $product->price }}</span>
                                    </p>
                                </div>

                                <div class="shop-btn-wrap">
                                    <a href="shop-detail.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                </div>
                            </div>

                            <div class="shop-body">
                                <h4>{{ $product->name }}</h4>
                            </div>
                        </div>
                    </div>

                    @endforeach

<div>
  {!! $products->links() !!}

</div>
                </div>
            </div>
        </section>



        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36363e" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-5 col-12 mb-3">
                    <h3><a href="/" class="custom-link mb-1">Home4u</a></h3>

                    <p class="text-white">Since 1986, We crafted interior products for better spaces</p>

                    <p class="text-white"><a href="https://www.tooplate.com" target="_parent">Web Design: Tooplate</a></p>
                </div>

                <div class="col-lg-3 col-md-3 col-12 ms-lg-auto mb-3">
                    <h3 class="text-white mb-3">Store</h3>

                    <p class="text-white mt-2">
                        <i class="bi-geo-alt"></i> Berlin, Germany
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <h3 class="text-white mb-3">Contact Info</h3>

                    <p class="text-white mb-1">
                        <i class="bi-telephone me-1"></i>

                        <a href="tel: 090-080-0760" class="text-white">
                                    090-080-0760
                                </a>
                    </p>

                    <p class="text-white mb-0">
                        <i class="bi-envelope me-1"></i>

                        <a href="mailto:info@company.com" class="text-white">
                                    info@company.com
                                </a>
                    </p>
                </div>

                <div class="col-lg-6 col-md-7 copyright-text-wrap col-12 d-flex flex-wrap align-items-center mt-4 ms-auto">
                    <p class="copyright-text mb-0 me-4">Copyright ©Sarah Atef </p>

                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-twitter bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-facebook bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-instagram bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-pinterest bi-pinterest"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-whatsapp bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script type="text/javascript" src="{!! asset('/js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/click-scroll.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/jquery.backstretch.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/owl.carousel.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/custom.js') !!}"></script>


</body>

</html>