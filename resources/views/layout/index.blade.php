<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vitabooks</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{secure_asset("assets/css/open-iconic-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{secure_asset("assets/css/animate.css")}}">

    <link rel="stylesheet" href="{{secure_asset("assets/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{secure_asset("assets/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{secure_asset("assets/css/magnific-popup.css")}}">

    <link rel="stylesheet" href="{{secure_asset("assets/css/aos.css")}}">

    <link rel="stylesheet" href="{{secure_asset("assets/css/ionicons.min.css")}}">

    <link rel="stylesheet" href="{{secure_asset("assets/css/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{secure_asset("assets/css/jquery.timepicker.css")}}">


    <link rel="stylesheet" href="{{secure_asset("assets/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{secure_asset("assets/css/icomoon.css")}}">
    <link rel="stylesheet" href="{{secure_asset("assets/css/style.css")}}">
    <link rel="stylesheet" href="{{secure_asset("assets/singlestyle.css")}}">
    {{--    mneti huru--}}
    {{--    <link rel="shortcut icon" href="{{asset("assetsproj/img/favicon.png")}}">--}}
    {{--    <!-- ===========  All Stylesheet ================= -->--}}
    {{--    <!--  Icon css plugins -->--}}
    <link rel="stylesheet" href="{{secure_asset("assetsproj/css/icons.css")}}">
    {{--    <!--  animate css plugins -->--}}
    {{--    <link rel="stylesheet" href="{{asset("assetsproj/css/animate.css")}}">--}}
    {{--    <!--  magnific-popup css plugins -->--}}
    {{--    <link rel="stylesheet" href="{{asset("assetsproj/css/magnific-popup.css")}}">--}}
    {{--    <!-- metismenu css file -->--}}
    {{--    <link rel="stylesheet" href="{{asset("assetsproj/css/metismenu.css")}}">--}}
    {{--    <!--  main style css file -->--}}
    <link rel="stylesheet" href="{{secure_asset("assetsproj/css/style.css")}}">

    {{--    <script src="https://kit.fontawesome.com/a904b4a626.js" crossorigin="anonymous"></script>--}}
    {{--    <!-- CSS only -->--}}
    {{--    --}}{{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"--}}
    {{--    --}}{{--          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>--}}
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"--}}
    {{--          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">--}}
</head>
<body>
{{--  start of navbar--}}

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">Vitabooks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('theKenyaSocialist')}}" class="nav-link">The Kenyan Socialist</a>
                </li>
                <li class="nav-item"><a href="{{route('catalogue')}}" class="nav-link">Catalogue</a></li>
                <li class="nav-item"><a href="{{route('media')}}" class="nav-link">Media</a></li>
                <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="{{route('projects')}}" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="{{route('admin')}}" class="nav-link">Admin</a></li>
                <li>@guest
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
                    <?php

                    $user = Auth::user();
                    $cart = \App\Models\Cart::where('phone', $user->phone)->count();


                    ?>

                    {{--cart--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('showCart')}}">Cart <i
                                class="fas fa-shopping-cart"></i> {{$cart}}</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    @endguest</li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@yield("content")
{{--start of footer--}}
<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p>An independent Kenyan publisher supporting people’s struggles to create societies based on the
                        principles of equality and justice.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="https://twitter.com/VitaBooks"><span
                                    class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/vitabookskenya"><span
                                    class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/vitabooks1_kenya/?hl=en"><span
                                    class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Recent Blog</h2>
                    {{--<!--                    --><?php--}}
                    <?php

                    use Illuminate\Support\Facades\Auth;

                    $posts = \App\Models\Blog::limit(3)->get();
                    //                    $user = Auth::user()->name;
                    //                    $comments = \App\Models\Comm

                    ?>
                    @foreach ($posts as $post)
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image: url({{url('/blog-pics/'.$post->cover_pic)}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">{{$post->title}}</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span>{{$post->updated_at}}</a></div>
                                    {{--                                    <div><a href="#"><span class="icon-person"></span> {{$user}}</a></div>--}}
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Site Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route("index")}}" class="py-2 d-block">Home</a></li>
                        <li><a href="{{route("about")}}" class="py-2 d-block">About</a></li>
                        <li><a href="{{route("theKenyaSocialist")}}" class="py-2 d-block">Socilist Magazine</a></li>
                        <li><a href="{{route("projects")}}" class="py-2 d-block">Projects</a></li>
                        <li><a href="{{route("catalogue")}}" class="py-2 d-block">Catalogue</a></li>
                        <li><a href="{{route("blog")}}" class="py-2 d-block">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">UniWay House, Opposite Univeristy of Nairobi</span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span
                                        class="text">0773987487</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">vitabook.co.ke</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p class="text-dark">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank" class="text-dark">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by <a
                        href="https://twitter.com/Therealpunduh" target="_blank">General Panga</a></p>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="2"
                stroke="#F96D00"/>
    </svg>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2 hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
<script src="{{secure_asset("assets/js/jquery.min.js")}}"></script>
<script src="{{secure_asset("assets/js/jquery-migrate-3.0.1.min.js")}}"></script>
<script src="{{secure_asset("assets/js/popper.min.js")}}"></script>
<script src="{{secure_asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{secure_asset("assets/js/jquery.easing.1.3.js")}}"></script>
<script src="{{secure_asset("assets/js/jquery.waypoints.min.js")}}"></script>
<script src="{{secure_asset("assets/js/jquery.stellar.min.js")}}"></script>
<script src="{{secure_asset("assets/js/owl.carousel.min.js")}}"></script>
<script src="{{secure_asset("assets/js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{secure_asset("assets/js/aos.js")}}"></script>
<script src="{{secure_asset("assets/js/jquery.animateNumber.min.js")}}"></script>
<script src="{{secure_asset("assets/js/bootstrap-datepicker.js")}}"></script>
<script src="{{secure_asset("assets/js/jquery.timepicker.min.js")}}"></script>
<script src="{{secure_asset("assets/js/scrollax.min.js")}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{secure_asset("js/google-map.js")}}"></script>
<script src="{{secure_asset("assets/js/main.js")}}"></script>

</body>
</html>
