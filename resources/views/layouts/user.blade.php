<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Ecommerce</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tooplate-main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <style>
        .ps {
            overflow: hidden !important;
            overflow-anchor: none;
            -ms-overflow-style: none;
            touch-action: auto;
            -ms-touch-action: auto;
        }

        .fixed-plugin .fixed-plugin-button {
            left: 30px;
            right: auto;
        }

        .fixed-plugin .fixed-plugin-button {
            background: #3a8bcd;
            border-radius: 50%;
            bottom: 30px;
            /* right: 30px; */
            font-size: 1.25rem;
            z-index: 990;
            box-shadow: 0 2px 12px 0 rgb(0 0 0 / 16%);
            cursor: pointer;
        }

        #navbarResponsive {
            top: 78px !important
        }

        .fa-shopping-cart:before {
            color: white;
        }

        .caption {
            background-color: rgba(250, 250, 250, 0.5) !important;
        }

        .badge {
            top: 0;
            right: 0;
        }

        .bottom-0 {
            bottom: 0;
        }

        .nav-link-active {
            color: #3a8bcd !important;
        }

        .featured-item img {
            width: 15rem;
            height: 22rem;
            object-fit: cover;
        }
        </style>
        @yield('styles')
    @livewireStyles
</head>

<body>
    <!-- Pre Header -->
    <div id="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>Sizes
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <div class="row  w-100 align-items-center">
                <a class="col navbar-brand text-left p-2 text-capitalize text-primary font-weight-bold"
                    href="{{ route('home') }}">
                    <h3>E-SHOP</h3>
                </a>
                <ul class="col justify-content-end flex-row navbar-nav ml-auto">
                    @if (!Auth::user())
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('login') ? 'nav-link-active' : '' }}"
                                href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('signup') ? 'nav-link-active' : '' }}"
                                href="{{ route('signup') }}">Signup</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('logout') ? 'nav-link-active' : '' }}"
                                href="{{ route('logout') }}">Logout</a>
                        </li>
                    @endif
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('users.interface') }}">Home<span
                                    class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('shop.interface') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboute') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="fixed-plugin">
        <a href="" style="bottom:6rem;"
            class="relative color-light fixed-plugin-button text-dark position-fixed px-3 py-2 bg-secondary">
            <span class="position-absolute text-light top-0 end-0 translate-middle badge rounded-circle bg-primary">0
            </span>

            <i class="fa fa-heart-o py-2 " style="color:white;">
            </i>

        </a>
        <a href="{{ route('user.cart.get_content') }}"
            class="relative text-light fixed-plugin-button text-dark position-fixed px-3 py-2">
            <span class="position-absolute text-light top-0 end-0 translate-middle badge rounded-circle bg-secondary">0
            </span>

            <i class="fas fa-shopping-cart py-2">
            </i>

        </a>
    </div>
    <!-- Footer Starts Here -->
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{ asset('assets/#') }}">Home</a></li>
                            <li><a href="{{ asset('assets/#') }}">Help</a></li>
                            <li><a href="{{ asset('assets/#') }}">Privacy Policy</a></li>
                            <li><a href="{{ asset('assets/#') }}">How It Works ?</a></li>
                            <li><a href="{{ asset('assets/#') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="{{ asset('assets/#') }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ asset('assets/#') }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ asset('assets/#') }}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ asset('assets/#') }}"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Ends Here -->


    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2022 ESHOP

                            - By: Rama & Bayan </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>


    <script language="{{ asset('assets/text/Javascript') }}">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>
    @livewireScripts

</body>

</html>
