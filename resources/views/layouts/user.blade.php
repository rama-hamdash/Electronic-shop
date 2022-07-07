<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie - Ecommerce HTML5 Template</title>

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

        .fa-shopping-cart:before {
            color: white;
        }
    </style>
    <!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
</head>

<body>

    <!-- Pre Header -->
    <div id="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Suspendisse laoreet magna vel diam lobortis imperdiet</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="{{ asset('assets/#') }}"><img
                    src="{{ asset('assets/images/header-logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('users.interface') }}">Home<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.interface') }}">Products</a>
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
    </nav>

    @yield('content')

    <div class="fixed-plugin">
        <a href="{{ route('user.cart.get_content') }}"
            class="fixed-plugin-button text-dark position-fixed px-3 py-2">

            <i class="fas fa-shopping-cart py-2"></i>

        </a>
    </div>
    <!-- Footer Starts Here -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <img src="{{ asset('assets/images/header-logo.png') }}" alt="">
                    </div>
                </div>
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
                        <p>Copyright &copy; 2019 Company Name

                            - Design: <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
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


</body>

</html>
