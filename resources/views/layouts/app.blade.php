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
        <nav style="height: 77px"
            class="navbar  navbar-expand-lg navbar-light bg-light border border-secondary border-bottom-1   bg-white rounded ">
            <div class="container ">
                <a class="navbar-brand p-0" href=""><img style="object-fit: contain" height="55"
                        width="130" src="{{ asset('assets/images/logo.svg') }}" alt=""></a>

                <button class="btn btn-primary ms-auto rounded-circle d-lg-none d-block" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="fa fa-bars"></i>
                </button>

                <ul class="navbar-nav ms-5 gap-4 d-none d-lg-flex">


                    @agent
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile Page</a>
                        </li>
                       
                    @else
                        <li class="nav-item active">
                            <a class="nav-link" href="">Buy</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">Rent</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">My Kenma</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">Promote with us</a>
                        </li>
                    @endagent


                </ul>


                <ul class="navbar-nav ms-auto gap-4 align-items-center d-none d-lg-flex ">
                    @auth

                        <div class="dropdown text-end">
                            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu text-small">
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item" href="#">Sign out</button>
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
    <footer>

    </footer>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand p-0" href=""><img style="object-fit: contain" height="55" width="130"
                    src="{{ asset('assets/images/logo.svg') }}" alt=""></a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
