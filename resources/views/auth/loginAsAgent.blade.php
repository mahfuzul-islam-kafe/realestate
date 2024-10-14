{{-- <x-app>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app> --}}
<x-auth>
    <section class="center-section  margin-top-47">
        <div class="col-md-6  text-center">
            <div class="fw-500 fs-40 text-center ">
                <h1 class="fw-500 fs-40 text-center ">Login <br> to Kemea Pro</h1>
            </div>
            <p class="margin-top-15 fs-16 mb-0">Log in to your Kemea Pro account to find</p>
            <p class="fs-16">Kemea opportunities</p>
        </div>
        <form method="POST" action="{{ route('login') }}" class="form col-md-6 container margin-top-47">
            @csrf
            <div class="form-group">
                <label for="email">E-mail</label>

                <input type="text" class="form-control rounded-pill" id="email" name="email"
                    placeholder="Ex: david.doe@mail.com">
            </div>
            <div class="form-group margin-top-18">
                <label for="password">Password</label>

                <input type="password" class="form-control rounded-pill" placeholder="............" id="password"
                    name="password">
            </div>
            <div class="text-end ">
                <a href="#" class="text-primary fs-12">Forgot your password ?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3 rounded-pill margin-top-25 fs-18">Log
                in</button>
        </form>
      
    </section>
</x-auth>
