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
        .auth-left {
            height: 100vh;
            background: #000000;
        }

        .nav {
            display: flex;
            justify-content: flex-end;
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
            margin: 110px auto;
        }
    </style>
</head>
<div class="row">
    <div class="col-6 auth-left">
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
    </div>
    <div class="col-6">
        <div class="nav">
            <div class="d-flex gap-4 align-items-center margin-top-15 margin-right-100">
                <div>EN
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
                <div class="btn  btn-outline-dark rounded-pill">Log in</div>
            </div>
        </div>

        <section class="center-section margin-top-47">
            <div class="col-4 text-center">

                <div class="fw-500 fs-40 text-center ">Registration</div>
                {{-- <div class="fw-500 fs-40 text-center ">Login <br>& Registration</div>  dumn way to do it  --}}
                
            </div>
            <form action="" class="form col-5 margin-top-47">
                <div class="form-group margin-bottom-18">
                    <label for="">First name</label>

                    <input type="text" class="form-control rounded-pill" id="" placeholder="Juliette">
                </div>
                <div class="form-group margin-bottom-18">
                    <label for="">Last name</label>

                    <input type="text" class="form-control rounded-pill" id="email" placeholder="Dupont">
                </div>
                <div class="form-group margin-bottom-18">
                    <label for="email">Email</label>

                    <input type="text" class="form-control rounded-pill" id="email"
                        placeholder="Ex: juliette.dupont@mail.com">
                </div>
                <div class="form-group margin-bottom-18">
                    <label for="password">Password</label>

                    <input type="password" class="form-control rounded-pill" id="password" value="000000000000">
                </div>
                <div class="form-group margin-bottom-18">
                    <label for="">Phone number</label>

                    <input type="text" class="form-control rounded-pill" id="email" placeholder="">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Receive Kemea communications
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        I accept the <a href="#">Terms of Service</a> and the <a href="#">Kemea Privacy Policy.</a>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3 rounded-pill margin-top-25 fs-18">Sign
                    up</button>
            </form>

        </section>
    </div>
</div>

</html>
