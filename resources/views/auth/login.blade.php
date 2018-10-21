@extends('layout.default')
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Login</title>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet"> 

@section('content')

<div class="peers ai-s fxw-nw h-100vh">
      <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("/img/bg1.jpg");'>
        <div class="pos-a centerXY">
        </div>
      </div>
      <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
    
    <a href="/home"><img style='width: 350px; height: auto; margin-top:-40px; margin-bottom:5%;' src="/img/logo.jpg" alt=""></a><br>
    <label style="color:#070707; font-size:20px; font-weight:light;">Login</label><br><br>
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="text-normal text-dark">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="text-normal text-dark">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('password') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
                <div class="peer">
                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                        <input type="checkbox" id="remember" name="remember" class="peer" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class=" peers peer-greed js-sb ai-c">
                            <span class="peer peer-greed">Remember Me</span>
                        </label>
                    </div>
                </div>
                <div class="peer">
                    <button class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
        <div class="peers ai-c jc-sb fxw-nw">
            <div class="peer">
                <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#2196f3;background-color:transparent;">
                    Forgot Your Password?
                </a>
            </div>
            <div class="peer">
                <!-- <a href="" class="btn btn-link" style="color:#2196f3;background-color:transparent;">Create new account</a> -->
            </div>
        </div>
    </form>
    
<script src="{{ asset('js/app.js') }}"></script>

@endsection
