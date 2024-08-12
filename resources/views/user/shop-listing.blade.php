<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>Home4u - Product Listing Page</title>

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
    
    <body class="shop-listing-page">

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
                            <h1 class="text-white">Shop Listing</h1>
                        </div>

                    </div>
                </div>
            </header>

            <section class="shop-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-5 col-12 me-auto mb-5">
                            <form class="custom-form filter-form" action="#" method="get" role="form">
                                <div class="">
                                    <h6 class="filter-form-small-title">Product</h6>

                                    <select name="looking-for" class="form-select form-control" id="looking-for" aria-label="Default select example">
                                        <option value="0" selected>What you looking for?</option>
                                        <option value="1">Bathroom</option>
                                        <option value="2">Dining</option>
                                        <option value="3">Living Room</option>
                                        <option value="4">Children Bedroom</option>
                                        <option value="5">Kitchen</option>
                                    </select>
                                </div>

                                <div class="mt-4">
                                    <h6 class="filter-form-small-title">Price range</h6>

                                    <div class="form-check">
                                        <input name="price-range[]" type="checkbox" class="form-check-input" id="PriceCheckOne" value="500" checked>
                                        
                                        <label class="form-check-label" for="PriceCheckOne">below $1,000</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="price-range[]" type="checkbox" class="form-check-input" id="PriceCheckTwo" value="1000">
                                        
                                        <label class="form-check-label" for="PriceCheckTwo">$1,000 - $4,900</label>
                                    </div>
                                    
                                    <div class="form-check">
                                        <input name="price-range[]" type="checkbox" class="form-check-input" id="PriceCheckTwo" value="5000">
                                        
                                        <label class="form-check-label" for="PriceCheckTwo">$5,000 - $9,900</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="price-range[]" type="checkbox" class="form-check-input" id="PriceCheckThree" value="10000">
                                        
                                        <label class="form-check-label" for="PriceCheckThree">$10,000 - $30,000</label>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="filter-form-small-title">Condition</h6>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="ConditionCheckOne" value="all" checked>
                                        
                                        <label class="form-check-label" for="ConditionCheckOne">All</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="ConditionCheckTwo" value="excellent">
                                        
                                        <label class="form-check-label" for="ConditionCheckTwo">Excellent</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="ConditionCheckThree" value="better">
                                        
                                        <label class="form-check-label" for="ConditionCheckThree">Better</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="ConditionCheckFour" value="good">
                                        
                                        <label class="form-check-label" for="ConditionCheckFour">Good</label>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="filter-form-small-title">Type</h6>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="TypeCheckOne" value="" checked>
                                        
                                        <label class="form-check-label" for="TypeCheckOne">Single</label>
                                    </div>

                                    <div class="form-check">
                                        <input name="condition[]" type="checkbox" class="form-check-input" id="TypeCheckTwo" value="">
                                        
                                        <label class="form-check-label" for="TypeCheckTwo">Family</label>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="form-control">Apple Filters</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-7 col-md-6 col-12">
                            <h2>Products</h2>

                            <p class="mb-5"><strong>3,648 items</strong> are currently available</p>

                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <div class="shop-thumb">
                                        <div class="shop-image-wrap">
                                            <a href="shop-detail.html">
                                                <img src="images/shop/minimal-bathroom-interior-design-with-wooden-furniture.jpg" class="shop-image img-fluid" alt="">
                                            </a>

                                            <div class="shop-icons-wrap">
                                                <div class="shop-icons d-flex flex-column align-items-center">
                                                    <a href="#" class="shop-icon bi-heart"></a>

                                                    <a href="#" class="shop-icon bi-bookmark"></a>
                                                </div>

                                                <p class="shop-pricing mb-0 mt-3">
                                                    <span class="badge custom-badge">$8,200</span>
                                                </p>
                                            </div>

                                            <div class="shop-btn-wrap">
                                                <a href="shop-detail.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                            </div>
                                        </div>

                                        <div class="shop-body">
                                            <h4>Bathroom</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="shop-thumb">
                                        <div class="shop-image-wrap">
                                            <a href="shop-detail.html">
                                                <img src="images/shop/mock-up-poster-modern-dining-room-interior-design-with-white-empty-wall.jpg" class="shop-image img-fluid" alt="">
                                            </a>

                                            <div class="shop-icons-wrap">
                                                <div class="shop-icons d-flex flex-column align-items-center">
                                                    <a href="#" class="shop-icon bi-heart"></a>

                                                    <a href="#" class="shop-icon bi-bookmark"></a>
                                                </div>

                                                <p class="shop-pricing mb-0 mt-3">
                                                    <span class="badge custom-badge">$4,800</span>
                                                </p>
                                            </div>

                                            <div class="shop-btn-wrap">
                                                <a href="shop-detail.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                            </div>
                                        </div>

                                        <div class="shop-body">
                                            <h4>Dining</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="shop-thumb">
                                        <div class="shop-image-wrap">
                                            <a href="shop-detail.html">
                                                <img src="images/shop/green-sofa-white-living-room-with-blank-table-mockup.jpg" class="shop-image img-fluid" alt="">
                                            </a>

                                            <div class="shop-icons-wrap">
                                                <div class="shop-icons d-flex flex-column align-items-center">
                                                    <a href="#" class="shop-icon bi-heart"></a>

                                                    <a href="#" class="shop-icon bi-bookmark"></a>
                                                </div>

                                                <p class="shop-pricing mb-0 mt-3">
                                                    <span class="badge custom-badge">$2,400</span>
                                                </p>
                                            </div>

                                            <div class="shop-btn-wrap">
                                                <a href="shop-detail.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                            </div>
                                        </div>

                                        <div class="shop-body">
                                            <h4>Living Room</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="shop-thumb">
                                        <div class="shop-image-wrap">
                                            <a href="shop-detail.html">
                                                <img src="images/shop/concept-home-cooking-with-female-chef.jpg" class="shop-image img-fluid" alt="">
                                            </a>

                                            <div class="shop-icons-wrap">
                                                <div class="shop-icons d-flex flex-column align-items-center">
                                                    <a href="#" class="shop-icon bi-heart"></a>

                                                    <a href="#" class="shop-icon bi-bookmark"></a>
                                                </div>

                                                <p class="shop-pricing mb-0 mt-3">
                                                    <span class="badge custom-badge">$6,500</span>
                                                </p>
                                            </div>

                                            <div class="shop-btn-wrap">
                                                <a href="shop-detail.html" class="shop-btn custom-btn btn d-flex align-items-center align-items-center">Learn more</a>
                                            </div>
                                        </div>

                                        <div class="shop-body">
                                            <h4>Chef Kitchen</h4>
                                        </div>
                                    </div>
                                </div>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>

                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" href="#">4</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" href="#">5</a>
                                        </li>
                                        
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
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
                        <h3><a href="index.html" class="custom-link mb-1">Home4u</a></h3>

                        <p class="text-white">Since 1986, We crafted interior products for better spaces</p>
                        
                        <p class="text-white"><a href="https://www.tooplate.com" target="_parent">Home4u designs</a></p>
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
                        <p class="copyright-text mb-0 me-4">Copyright ©Sarah Atef</p>

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
