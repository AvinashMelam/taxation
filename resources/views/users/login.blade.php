@extends('layouts.master')

@section('content')
    <div class="appointment bg--white section-padding--xlg" style="padding:60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12 offset-0">
                    <div class="pg-appintment">
                        <div class="pg-appintment__title text-center">
                            <h2>LOGIN</h2>
                        </div>
                        <div class="pg-appintment__box">
                            <form action="/AuthLogin" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <div class="card" style="border:none;">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" style="text-align:center" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="password" id="password" style="text-align:center" placeholder="Password">
                                                </div>
                                                <div class="form-group col-lg-12" style="text-align:center;">
                                                    <input type="submit" class="btn btn-success">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-3"></div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="single-input">
                                                        <input type="text" style="text-align:center;" name="mobile" id="mobile" placeholder="Mobile Number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="single-input">
                                                        <input type="password" style="text-align:center;" name="password" id="password" placeholder="password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="single-input button">
                                                        <button type="submit" class="cr-btn"><span>Submit</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/AuthLogin">
                            @csrf

                            <div class="row mb-3">
                                <label for="mobile"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile" type="text"
                                        class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                        value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

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
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

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
@endsection
