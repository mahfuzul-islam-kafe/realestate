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
            <a href="{{ route('login.agent') }}"
                class="btn btn-outline-dark border-radius-10 border-1 padding-x-21 padding-y-7">Login</a>
        </div>
    </div>
    <section class="center-section margin-top-47 ">
        <div class="col-md-4 text-center">
            <div class="fw-500 fs-40 text-center ">Registration</div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('agent.register.post') }}" method="POST" class="form margin-top-47 col-md-8 container">
            @csrf
            <div class="row">
                <div class="form-group margin-bottom-18 col-md-6">
                    <label for="company_name">Company name</label>
                    <input type="text" class="form-control border-radius-11" id="company_name" name="company_name"
                        value="{{ old('company_name') }}" placeholder="Remax">
                    @error('company_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group margin-bottom-18 col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control border-radius-11" id="name" name="name"
                        value="{{ old('name') }}" placeholder="John Doe">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group margin-bottom-18">
                <label for="license_number">License Number</label>
                <input type="text" class="form-control border-radius-11" id="license_number" name="license_number"
                    value="{{ old('license_number') }}" placeholder="xxx - xxx - xxx">
                @error('license_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group margin-bottom-18">
                <label for="email">Email</label>
                <input type="email" class="form-control border-radius-11" id="email" name="email"
                    value="{{ old('email') }}" placeholder="Ex: david.doe@mail.com">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group margin-bottom-18">
                <label for="password">Password</label>
                <input type="password" class="form-control border-radius-11" id="password" name="password"
                    placeholder="............">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group margin-bottom-18">
                <label for="phone_number">Phone number</label>
                <input type="text" class="form-control border-radius-11" id="phone_number" name="phone_number"
                    value="{{ old('phone_number') }}" placeholder="">
                @error('phone_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="receive_communications"
                    name="receive_communications" {{ old('receive_communications') ? 'checked' : '' }}
                    style="border-radius: 3px !important;">
                <label class="form-check-label" for="receive_communications">
                    Receive Kemea communications
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="terms_conditions"
                    name="terms_conditions" {{ old('terms_conditions') ? 'checked' : '' }}
                    style="border-radius: 3px !important;">
                <label class="form-check-label" for="terms_conditions">
                    I accept the <a href="#">Terms of Service</a> and the <a href="#">Kemea Privacy
                        Policy.</a>
                </label>
            </div>

            <button type="submit"
                class="btn btn-primary w-100 mt-3 rounded-pill margin-top-25 margin-bottom-52 fs-18">
                Sign up
            </button>
        </form>

    </section>
</x-auth>
