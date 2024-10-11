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
                <div class="btn btn-outline-dark rounded-pill">Sign up</div>
            </div>
        </div>

        <section class="center-section margin-top-47">
            <div class="col-4 text-center">

                <div class="fw-500 fs-40 text-center ">Login & Registration</div>
                {{-- <div class="fw-500 fs-40 text-center ">Login <br>& Registration</div>  dumn way to do it  --}}
                <p class="margin-top-15 fs-16">Log in or create your account to find Kemea opportunities</p>
            </div>
            <form action="" class="form col-5 margin-top-47">
                <div class="form-group">
                    <label for="email">Email</label>

                    <input type="text" class="form-control rounded-pill" id="email"
                        placeholder="Ex: juliette.dupont@mail.com">
                </div>
                <div class="form-group margin-top-18">
                    <label for="password">Password</label>

                    <input type="password" class="form-control rounded-pill" id="password" value="000000000000">
                </div>
                <div class="text-end ">
                    <a href="#" class="text-primary fs-12">Forgot your password?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3 rounded-pill margin-top-25 fs-18">Log
                    in</button>
            </form>
            <div class="fs-16 margin-y-25">or</div>
            <div class="col-5">

                <button type="submit"
                    class="btn btn-outline-dark w-100 mt-3 rounded-pill margin-top-25 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
                        class="bi bi-google me-2" viewBox="0 0 16 16">
                        <path
                            d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                    </svg>
                    Continue with Google
                </button>
                <button type="submit"
                    class="btn btn-outline-dark w-100 mt-3 rounded-pill margin-top-25 d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="22" fill="currentColor"
                        class="bi bi-apple me-2" viewBox="0 0 16 16">
                        <path
                            d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282" />
                    </svg>
                    Continue with Apple
                </button>


            </div>
        </section>
    </div>
</div>

</html>
