<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/attributes/logo.svg') }}" type="image/x-icon">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav id="topNav" class="navbar  navbar-expand-lg navbar-light bg-light   padding-top-22 padding-bottom-23">
            <div class="container ">
                <a class="navbar-brand p-0" href="{{ route('home.sell') }}"><img style="object-fit: contain"
                        height="55" width="130" src="{{ asset('assets/images/logo.svg') }}" alt=""></a>

                <button class="btn btn-primary ms-auto rounded-circle d-lg-none d-block" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="fa fa-bars"></i>
                </button>
                @agent
                    <ul class="navbar-nav ms-5 flex-gap-50 d-none d-lg-flex ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('agent.dashboard') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ auth()->user()->agency ? auth()->user()->agency->url() : '' }}">Profile Page</a>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav ms-5 flex-gap-50 d-none d-lg-flex">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home.sell') }}">Buy</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rent</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('myKemea') }}">My Kenma</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">Promote with us</a>
                        </li>
                        @user
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('toStudy') }}">To Study</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('favorites') }}">Favorites</a>
                            </li>
                        @enduser
                    </ul>
                @endagent




                <ul class="navbar-nav ms-auto align-items-center d-none d-lg-flex ">
                    @auth

                        <div class="dropdown">
                            <a href="#"
                                class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle user-dropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/images/attributes/threeline.svg') }}" alt=""
                                    style="width: 24px; height: 24px; margin-right: 5px;">
                                <img src="{{ asset('assets/images/attributes/usericon.svg') }}" alt=""
                                    style="width: 24px; height: 24px;">
                            </a>
                            <ul class="dropdown-menu text-small dropdown-menu-end shadow-custom-for-user-dropdown">
                                <li><a class="dropdown-item" href="{{ route('user.notification') }}"><img
                                            src="{{ asset('assets/images/attributes/bell-ringing.svg') }}"
                                            alt="">Notifications</a></li>
                                <li><a class="dropdown-item" href="{{ route('user.profile') }}"><img
                                            src="{{ asset('assets/images/attributes/user_profile_man.svg') }}"
                                            alt="">Profile</a></li>

                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><img
                                                src="{{ asset('assets/images/attributes/logout.svg') }}" alt="">Log
                                            out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary rounded-pill " style="width: 101.2px;height: 42px;"
                                href="{{ route('register') }}">Sign up</a>
                        </li>
                    @endauth
                </ul>


                <div>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    <svg width="0" height="0">
        <defs>
            <clipPath id="footerClipPath" clipPathUnits="objectBoundingBox">
                <path
                    d="M0.618 0.243C0.03 0.381 0.029 0.04 0.019 0C0.019 0 -0.147 0.984 0.179 1.541C0.6 2.261 1.43 1.456 1.105 2.563C1.083 2.637 1.183 2.463 1.253 2.409C1.454 2.138 1.548 1.676 1.508 1.227C1.46 0.704 1.294 0.09 0.618 0.243Z" />
            </clipPath>
        </defs>
    </svg>

    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div
                        class="col-md-12 col-lg-6 col-12 d-flex justifyt-content-between  align-items-start flex-lg-column ">
                        <div class="subscription-box">
                            <p class="fs-20 fw-300 mb-3">
                                Subscribe to our newsletter
                            </p>
                            <div class="subscription-box_input">
                                <input type="emai" placeholder="Your email">
                                <button><i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                        <div class="socials">
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6  col-12">
                        <div class="row">
                            <div class="col-md-6 col-6 d-flex justify-content-center align-items-start">
                                <div>

                                    <h5 class="footer-list-title">Services</h5>
                                    <ul class="footer-list">
                                        <li><a href="">Buy</a></li>
                                        <li><a href="">Rent</a></li>
                                        <li><a href="">Sell</a></li>
                                        <li><a href="">My Kemea</a></li>
                                        <li><a href="">Kemea Pro</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 d-flex justify-content-center align-items-start">
                                <div>
                                    <h5 class="footer-list-title">Legal</h5>
                                    <ul class="footer-list">
                                        <li><a href="">Terms of Service</a></li>
                                        <li><a href="">Privacy Policy</a></li>
                                        <li><a href="">Cookies Policy</a></li>
                                        <li><a href="">Legal Notice</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="d-flex gap-2">
                    <img src="{{ asset('assets/images/attributes/logo.svg') }}" alt="">
                    <p class="footer-copywrite"> &#64; kemea {{ now()->format('Y') }}</p>
                </div>
            </div>

        </div>
    </footer>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand p-0" href=""><img style="object-fit: contain" height="55"
                    width="130" src="{{ asset('assets/images/logo.svg') }}" alt=""></a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body position-relative">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 fs-25">
                <li class="nav-item active side-by-side">
                    <a class="nav-link" href="">Buy</a>
                    <i class="fa fa-chevron-right"></i>

                </li>

                <li class="nav-item side-by-side">
                    <a class="nav-link" href="">Rent</a>
                    <i class="fa fa-chevron-right"></i>
                </li>

                <li class="nav-item side-by-side">
                    <a class="nav-link" href="">My Kenma</a>
                    <i class="fa fa-chevron-right"></i>

                </li>

                <li class="nav-item side-by-side">
                    <a class="nav-link" href="">Promote with us</a>
                    <i class="fa fa-chevron-right"></i>

                </li>


            </ul>

            <div class="nav-bottom">


                <a class="nav-link" href="">Login</a>



                <a class="btn btn-primary rounded-pill" style="width: 101.2px; height: 42px;" href="">Sign
                    up</a>


            </div>
        </div>
    </div>

</body>

</html>
