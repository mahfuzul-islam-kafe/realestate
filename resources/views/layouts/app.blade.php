<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav style="height: 77px"
            class="navbar  navbar-expand-lg navbar-light bg-light border border-secondary border-bottom-1   bg-white rounded ">
            <div class="container ">
                <a class="navbar-brand p-0" href=""><img style="object-fit: contain" height="55" width="130"
                        src="{{ asset('assets/images/logo.svg') }}" alt=""></a>

                <button class="btn btn-primary ms-auto rounded-circle d-lg-none d-block" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="fa fa-bars"></i>
                </button>

                <ul class="navbar-nav ms-5 gap-4 d-none d-lg-flex">
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

                </ul>
                <ul class="navbar-nav ms-auto gap-4 align-items-center d-none d-lg-flex ">
                    <li class="nav-item">
                        <a class="nav-link " href="">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary rounded-pill " style="width: 101.2px;height: 42px;"
                            href="">Sign up</a>
                    </li>


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
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images,
                lists, etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
