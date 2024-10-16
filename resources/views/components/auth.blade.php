<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .main {
            /* height: 100vh; */
        }

        .auth-left {
            background: #000000;
            height: auto;

        }


        li {

            list-style: none;
        }

        .center-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .left-box {
            width: 554px;
            background: #000000;
            margin: 110px auto;
        }

        .no-hover:hover,
        .no-hover:active,
        .no-hover:focus,
        .no-hover:focus-visible {
            background-color: transparent !important;
            border-color: transparent !important;
            box-shadow: transparent !important;
            color: #000000 !important;
        }

        .text-bg-dark {
            color: #fff !important;
            background-color: #000000 !important;
        }
    </style>
</head>
<div class="main">
    <div class="d-flex">
        <div class="col-md-6 d-none d-md-block @if (request()->routeIs('login') || request()->routeIs('register')) auth-left @endif">
            @if (request()->routeIs('login') || request()->routeIs('register'))
                <div class="left-box text-light">
                    <h2 class="fw-500 fs-40 mb-4 ">By entering in your Kemea account...</h2>
                    <div class="margin-top-75">

                        <div class="d-flex align-items-center margin-y-68 ">
                            <span class="fs-35 me-4">1</span>
                            <p class="fw-20 mb-0">Our hunters take care of everything for you.</p>
                        </div>
                        <div class="d-flex align-items-center margin-y-68 ">
                            <span class="fs-35 me-4">2</span>
                            <p class="fw-20 mb-0">The consultation is free and without obligation.</p>
                        </div>
                        <div class="d-flex align-items-center margin-y-68 ">
                            <span class="fs-35 me-4">3</span>
                            <p class="fw-20 mb-0">We accompany you until the signing of the deed</p>
                        </div>
                        <div class="d-flex align-items-center margin-y-68 ">
                            <span class="fs-35 me-4">4</span>
                            <p class="fw-20 mb-0">We give you access to the Off Market.</p>
                        </div>
                    </div>
                </div>
            @elseif (request()->routeIs('register.agent'))
                <div class="w-100 h-100">
                    <img src="{{ asset('assets/register-agent.png') }}" class="img-fluid h-100 w-100" alt=""
                        srcset="">
                </div>
            @else
                <div class="w-100">
                    <img src="{{ asset('assets/login-agent.png') }}" class="img-fluid h-100 w-100" alt=""
                        srcset="">
                </div>
            @endif
        </div>
        <div class="col-md-6 auth-right">
            {{ $slot }}
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="authTextToggle"
    aria-labelledby="authTextToggleLabel">
    <div class="offcanvas-header ">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center text-center">
        <div>
            <h2 class="fw-300 fs-30 mb-4">By entering in your Kemea account...</h2>
            <div class="margin-top-75">
                <div class="d-flex align-items-center justify-content-center margin-y-40">
                    <span class="fs-35 me-4">1</span>
                    <p class="fw-20 mb-0">Our hunters take care of everything for you.</p>
                </div>
                <div class="d-flex align-items-center justify-content-center margin-y-40">
                    <span class="fs-35 me-4">2</span>
                    <p class="fw-20 mb-0">The consultation is free and without obligation.</p>
                </div>
                <div class="d-flex align-items-center justify-content-center margin-y-40">
                    <span class="fs-35 me-4">3</span>
                    <p class="fw-20 mb-0">We accompany you until the signing of the deed.</p>
                </div>
                <div class="d-flex align-items-center justify-content-center margin-y-40">
                    <span class="fs-35 me-4">4</span>
                    <p class="fw-20 mb-0">We give you access to the Off Market.</p>
                </div>
            </div>
        </div>
    </div>

</div>

</html>
