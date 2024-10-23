{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<x-auth>
    <div class="nav container d-flex justify-content-between align-items-center margin-top-15">
        <div>
            <button class="btn  d-sm-block d-md-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#authTextToggle" aria-controls="authTextToggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
        </div>
        <div class="d-flex gap-4 align-items-center">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle no-hover" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    EN
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item no-hover" href="#">Option 1</a></li>
                    <li><a class="dropdown-item no-hover" href="#">Option 2</a></li>
                    <li><a class="dropdown-item no-hover" href="#">Option 3</a></li>
                </ul>
            </div>
            <a href="{{ route('login') }}" class="btn btn-outline-dark rounded-pill">Login</a>
        </div>
    </div>
    <section class="center-section margin-top-47 ">
        <div class="col-md-4 text-center">
            <div class="fw-500 fs-40 text-center ">Registration</div>
        </div>


        <form action="{{ route('register') }}" method="POST" class="form  margin-top-47  col-md-6 container">
            @csrf
            <div class="form-group margin-bottom-18">
                <label for="">First name</label>

                <input type="text" class="form-control rounded-pill" id="" placeholder="" name="name"
                    required>
            </div>
            <div class="form-group margin-bottom-18">
                <label for="">Last name</label>

                <input type="text" class="form-control rounded-pill" id="email" placeholder="" name="last_name"
                    required>
            </div>
            <div class="form-group margin-bottom-18">
                <label for="email">Email</label>

                <input type="text" class="form-control rounded-pill" id="email" placeholder="" name="email"
                    required>
            </div>
            <div class="form-group margin-bottom-18">
                <label for="password">Password</label>

                <input type="password" class="form-control rounded-pill" id="password" name="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group margin-bottom-18">
                <label for="password">Confirm Password</label>

                <input type="password" class="form-control rounded-pill" id="password" name="password_confirmation">
            </div>
            <div class="form-group margin-bottom-18">
                <label for="phone">Phone number</label>

                <input type="text" class="form-control rounded-pill" id="phone" placeholder="" name="phone">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="receivekemea"
                    style="border-radius: 3px !important;">
                <label class="form-check-label" for="receivekemea">
                    Receive Kemea communications
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="terms_n_condition"
                    style="border-radius: 3px !important;">
                <label class="form-check-label" for="terms_n_condition">
                    I accept the <a href="#">Terms of Service</a> and the <a href="#">Kemea Privacy
                        Policy.</a>
                </label>
            </div>

            <button type="submit"
                class="btn btn-primary w-100 mt-3 rounded-pill margin-top-25 margin-bottom-52 fs-18">Sign
                up</button>
        </form>


    </section>
</x-auth>
