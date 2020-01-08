@extends('layouts.app')
@section('title', 'Login | Inventaris')
@section('content')


<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                <div class="col-lg-6 d-flex align-items-stretch justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <div class="brand-logo">
                            <h2>Setroom</h2>
                        </div>
                        <h4>Welcome back!</h4>
                        <h6 class="font-weight-light">Happy to see you again!</h6>
                        <!-- FORM LOGIN -->
                        <form action="{{ route('login') }}" method="POST" class="pt-3">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-email-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="email" id="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="password" id="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{ old('password') }}" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Keep me signed in
                                    </label>
                                </div>
                                @if(Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
                                @endif
                            </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                              Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
                          </div>

                      </form>
                      <!-- END FORM LOGIN -->
                  </div>
              </div>
              <div class="col-lg-6 login-half-bg d-flex flex-row">
                <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2019 <a href="https://linkedin.com/mramdhani-102072003" target="_blank" class="text-muted">mramdhani</a>. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
</div>
<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
</div-->
@endsection
