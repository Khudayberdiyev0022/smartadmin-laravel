@extends('layouts.auth')
@section('content')

  <div class="blankpage-form-field">
    @error('email')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="fal fa-times"></i></span>
      </button>
      <div class="d-flex align-items-center">
        <div class="alert-icon width-2">
                                                            <span class="icon-stack" style="font-size: 22px;">
                                                                <i class="base-2 icon-stack-3x color-primary-400"></i>
                                                                <i class="base-10 text-white icon-stack-1x"></i>
                                                                <i class="ni md-profile color-primary-800 icon-stack-2x"></i>
                                                            </span>
        </div>
        <div class="flex-1">
          {{ $message }}
        </div>
      </div>
    </div>
    @enderror
    <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
      <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="SmartAdmin WebApp" aria-roledescription="logo">
        <span class="page-logo-text mr-1">Admin Dashboard</span>
      </a>
    </div>
    <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
      <form action="{{ ('login') }}" method="POST">
        @csrf
        <!-- Email Address -->
        <div class="form-group">
          <label class="form-label" for="email">Email</label>
          <input type="email" id="username" class="form-control" name="email" required autofocus>
        </div>
        <!-- Password -->
        <div class="form-group">
          <label class="form-label" for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control" required autofocus>
        </div>
        <!-- Remember Me -->
        <div class="form-group text-left">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="remember" class="custom-control-input" id="remember_me">
            <label class="custom-control-label" for="remember_me">{{ __('Remember me') }}</label>
          </div>
        </div>
        <button type="submit" class="btn btn-default float-right">{{ __('Log in') }}</button>
      </form>
    </div>
    {{--    <div class="blankpage-footer text-center">--}}
    {{--      @if (Route::has('password.request'))--}}
    {{--        <a href="{{ route('password.request') }}" class="text-sm">--}}
    {{--          {{ __('Forgot your password?') }}--}}
    {{--        </a>--}}
    {{--      @endif--}}
    {{--    </div>--}}

  </div>
  <video poster="{{ asset('assets/img/backgrounds/clouds.png') }}" id="bgvid" playsinline autoplay muted loop>
    <source src="{{ asset('assets/media/video/cc.webm') }}" type="video/webm">
    <source src="{{ asset('assets/media/video/cc.mp4') }}" type="video/mp4">
  </video>
@endsection

