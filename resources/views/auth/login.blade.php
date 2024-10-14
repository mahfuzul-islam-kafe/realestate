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
            <div class="fw-500 fs-40 text-center ">Login & Registration</div>
            <p class="margin-top-15 fs-16">Log in or create your account to find Kemea opportunities</p>
        </div>
        <form method="POST" action="{{ route('login') }}" class="form col-md-6 container margin-top-47">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>

                <input type="text" class="form-control rounded-pill" id="email" name="email"
                    placeholder="">
            </div>
            <div class="form-group margin-top-18">
                <label for="password">Password</label>

                <input type="password" class="form-control rounded-pill" id="password" name="password">
            </div>
            <div class="text-end ">
                <a href="#" class="text-primary fs-12">Forgot your password?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3 rounded-pill margin-top-25 fs-18">Log
                in</button>
        </form>
        <div class="fs-16 margin-top-25">or</div>
        <div class="col-md-6 margin-bottom-65 container">
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
</x-auth>


