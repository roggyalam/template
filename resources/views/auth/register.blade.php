<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Register | Kadso - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-color">

        <!-- Begin page -->
        <div class="container-fluid">
            <div class="row vh-100">
                <div class="col-12">
                    <div class="p-0">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6 col-xl-6 col-lg-6">
                                <div class="row">
                                    <div class="col-md-6 mx-auto">
                                        <div class="mb-0 border-0">
                                            <div class="p-0">
                                                <div class="text-center">
                                                    <div class="mb-4">
                                                        <a href="index.html" class="auth-logo">
                                                            <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="logo-dark" class="mx-auto" height="28" />
                                                        </a>
                                                    </div>

                                                    <div class="auth-title-section mb-3">
                                                        <h3 class="text-dark fs-20 fw-medium mb-2">Get's started</h3>
                                                        <p class="text-dark text-capitalize fs-14 mb-0">Please enter your details.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pt-0">
                                                <form method="POST" action="{{ route('register') }}">
                                              @csrf

                                                 <div class="form-group mb-3">
                                                 <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                                                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                 @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                     </span>
                                                  @enderror
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                     @error('email')
                                                       <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror

                                                    </div>


                                                    <div class="form-group mb-3">
                                                        <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                      @error('password')
                                                      <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    </div>

                                                    <div class="form-group mb-3">
                                                            <div class="form-check">
                                                                 <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                                                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                            </div><!--end col-->
                                                    </div>

                                                    <div class="form-group mb-0 row">
                                                            <div class="d-grid">
                                                             <button type="submit" class="btn btn-primary">
                                                                {{ __('Register') }}
                                                               </button>
                                                            </div>
                                                    </div>
                                                </form>
                                                <div class="text-center text-muted">
                                                    <p class="mb-0">Already have an account ?<a class='text-primary ms-2 fw-medium' href='auth-login.html'>Login here</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-6 col-lg-6 p-0 vh-100 d-flex justify-content-center account-page-bg"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END wrapper -->

        <!-- Vendor -->
        <script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/feather-icons/feather.min.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('backend/assets/js/app.js')}}"></script>

    </body>
</html>



{{--
@extends('layouts.app')

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
