<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('img/logo2.png') }}"  rel="icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="css/style.css">
    <!-- Styles -->
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous"
  />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}

    <link href="{{ asset('css/Intro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/NavBar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Testimonials.css') }}" rel="stylesheet">
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <link href="{{ asset('css/book.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/details.css') }}" rel="stylesheet">
    <link href="{{ asset('css/single.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet"> --}}



</head>
<body>
    <div id="app">
        <div   class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <div class="container-fluid">
                    <img  class="navbar-brand" src={{ asset('img/logo100.png')}} alt="logo" />
                  </div>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" style="color:#276FB4;"id="navbarCollapse">
                    <div class="navbar-nav ml-auto" >
                        <a   href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                        <a  href="{{ url('/about-us') }}" class="nav-item nav-link">About</a>
                        {{-- <a href="{{ url('/feature') }}" class="nav-item nav-link">Feature</a>
                        <a href="{{ url('/chef') }}" class="nav-item nav-link">Chef</a> --}}
                        <a  href="{{ url('/services') }}" class="nav-item nav-link">Services</a>

                        <a  href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>


                        @guest
                            @if (Route::has('login'))
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end"  style="top: 65%;
                                left: 86%" aria-labelledby="navbarDropdown">
                                    <a   href="{{ url('user-profile') }}"class="dropdown-item">My profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        @endguest

                    </div>
                </div>
            </div>

        </div>


        {{-- <main class="py-4"> --}}
            @yield('content')
        {{-- </main> --}}
    </div>
    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Service Way <i>Online platform </i>is a platform that is specialized in providing different types of most needed services in our daily life.Through Serviceway you can choose the service you are looking for and book it at a certain date and time taking in consideration your convenienty and vailability.
              </p>
            </div>

            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li><a  href="{{ url('/services') }}">Car Services</a></li>
                <li><a  href="{{ url('/services') }}">Kids Services</a></li>
                <li><a href= href="{{ url('/services') }}">Home Maintenance</a></li>
                {{-- <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                <li><a href="http://scanfcode.com/category/templates/">Templates</a></li> --}}
              </ul>
            </div>

            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/about/">About Us</a></li>
                <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>

              </ul>
            </div>

          </div>
          <hr>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
           <a href="#">ServiceWay</a>.
              </p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                  {{-- <li><a class="facebook" href="#"></a>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li> --}}
                  {{-- <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                </ul>
              </div>

          </div>
        </div>
    </footer>
    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src={{asset("https://code.jquery.com/jquery-3.4.1.min.js")}}></script>
    <script src={{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js")}}></script>
    <script src={{asset("http://code.jquery.com/jquery-1.11.0.min.js")}}></script>
{{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src={{asset("lib/owlcarousel/owl.carousel.min.js")}}></script> --}}


    <script src={{asset("js/jquery.min.js")}}></script>
    <script src={{asset("js/popper.js")}}></script>
    <script src={{asset("js/bootstrap.min.js")}}></script>
    <script src={{asset("js/owl.carousel.min.js")}}></script>
    <script src={{asset("js/main.js")}}></script>
    <script src={{asset("js/book.js")}}></script>





   <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Template Javascript -->
    <!-- Template Javascript -->

</body>
</html>
