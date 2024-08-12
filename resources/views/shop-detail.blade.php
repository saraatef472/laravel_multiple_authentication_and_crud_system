<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>Home4U - Product Detail Page</title>

      <!-- CSS FILES -->
      <link rel="preconnect" href="https://fonts.googleapis.com">

      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
      <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
  
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tooplate-moso-interior.css') }}">
<!--

Tooplate 2133 Moso Interior

https://www.tooplate.com/view/2133-moso-interior

Bootstrap 5 HTML CSS Template

-->
    </head>
    
    <body class="shop-detail-page">

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

        <main>

            <header class="site-header d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h1 class="text-white">Product Detail</h1>
                        </div>

                    </div>
                </div>
            </header>

            <section class="shop-detail-bar section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-md-8 col-12 d-flex">
                            <p class="shop-detail-bar-wrap d-flex flex-wrap mb-0">
                                <span class="me-2">Price:</span>

                                <strong class="shop-pricing-text">$4,500</strong>
                            </p>

                            <p class="shop-detail-bar-wrap d-flex flex-wrap ms-lg-5 ms-4 mb-0">
                                <span class="me-2">Condition:</span>

                                <strong class="shop-condition-text">Good</strong>
                            </p>

                            <p class="shop-detail-bar-wrap d-flex flex-wrap ms-lg-5 ms-4 mb-0">
                                <span class="me-2">Type:</span>

                                <strong>Family</strong>
                            </p>
                        </div>

                        <div class="col-lg-5 col-md-4 col-12 social-share d-flex align-items-center ms-lg-auto mt-3 mt-lg-0 mt-md-0">
                            <p class="mb-0 me-3 ms-lg-auto ms-md-auto">Share:</p>

                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link social-icon-twitter bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link social-icon-facebook bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link social-icon-pinterest bi-pinterest"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="shop-detail-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="custom-block shop-detail-custom-block">
                                <h3 class="mb-3">Introduction to a Dining Room</h3>

                                <p>A dining room is a room in a house, apartment, school etc that is reserved primarily for eating meals (breakfast, lunch or dinner) although other activities may also take place there outside of meal times. As most people like to be seated when they eat, the dining room historically has contained furniture which includes dining tables and chairs.

                                  Generally, throughout history, the buildings of the upper classes tended to have had purpose-built dining rooms (or even banqueting halls) as an integral part of the design: buildings associated with the poor and lower-middle classes usually did not. The only occasion these latter types had dining rooms was when they were added by later occupants in subsequent eras, either by conversion or extension.</p>


                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="shop-image-wrap">
                                <img src="images/shop/mock-up-poster-modern-dining-room-interior-design-with-white-empty-wall.jpg" class="shop-image img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="shop-detail-section section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="shop-image-wrap">
                                <img src="images/shop/minimal-bathroom-interior-design-with-wooden-furniture.jpg" class="shop-image img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="custom-block shop-detail-custom-block">
                                <h3 class="mb-3">Online Interior Design</h3>

                                <p>Explore our services and immerse yourself into a universe where design, procurement, logistics, and assembly merge, creating a unique experience. Interni provides a wide range of choices and high customisation levels to furnish any space.

                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="shop-detail-section section-padding pb-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <img src="images/shop/green-sofa-white-living-room-with-blank-table-mockup.jpg" class="shop-image img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <img src="images/shop/concept-home-cooking-with-female-chef.jpg" class="shop-image img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="shop-thumb">
                                <div class="shop-image-wrap">
                                    <img src="images/shop/childrens-bed-nursery-cot-velvet-childrens-room.jpg" class="shop-image img-fluid" alt="">
                                </div>
                            </div>
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
                        <h3><a href="index.html" class="custom-link mb-1">Moso Interior</a></h3>

                        <p class="text-white">Since 1986, We crafted interior products for better spaces</p>
                        
                        <p class="text-white"><a href="https://www.tooplate.com/free-templates" target="_parent">Web Design: Tooplate</a></p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12 ms-lg-auto mb-3">
                        <h3 class="text-white mb-3">Store</h3>

                        <p class="text-white mt-2">
                            <i class="bi-geo-alt"></i>
                            Berlin, Germany
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
                        <p class="copyright-text mb-0 me-4">Copyright © Sarah Atef</p>

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
