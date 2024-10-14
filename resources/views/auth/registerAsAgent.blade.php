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
    <section class="center-section margin-top-47 ">
        <div class="col-md-4 text-center">
            <div class="fw-500 fs-40 text-center ">Registration</div>
        </div>
        

            <form action="" class="form  margin-top-47  col-md-6 container">
                <div class="form-group margin-bottom-18">
                    <label for="">First name</label>
    
                    <input type="text" class="form-control rounded-pill" id="" placeholder="">
                </div>
                <div class="form-group margin-bottom-18">
                    <label for="">Last name</label>
    
                    <input type="text" class="form-control rounded-pill" id="email" placeholder="">
                </div>
                <div class="form-group margin-bottom-18">
                    <label for="email">Email</label>
    
                    <input type="text" class="form-control rounded-pill" id="email"
                        placeholder="">
                </div>
                <div class="form-group margin-bottom-18">
                    <label for="password">Password</label>
    
                    <input type="password" class="form-control rounded-pill" id="password" >
                </div>
                <div class="form-group margin-bottom-18">
                    <label for="">Phone number</label>
    
                    <input type="text" class="form-control rounded-pill" id="email" placeholder="">
                </div>
    
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border-radius: 3px !important;">
                    <label class="form-check-label" for="flexCheckDefault">
                        Receive Kemea communications
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border-radius: 3px !important;">
                    <label class="form-check-label" for="flexCheckDefault">
                        I accept the <a href="#">Terms of Service</a> and the <a href="#">Kemea Privacy Policy.</a>
                    </label>
                </div>
    
                <button type="submit" class="btn btn-primary w-100 mt-3 rounded-pill margin-top-25 margin-bottom-52 fs-18">Sign
                    up</button>
            </form>
        

    </section>
</x-auth>