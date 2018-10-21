@extends('layout.default')
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Forgot password</title>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
@section('content')

<div class="peers ai-s fxw-nw h-100vh">
      <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("/img/bg1.jpg");'>
        <div class="pos-a centerXY">
        </div>
      </div>
      <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
    
    <img style='width: 350px; height: auto; margin-top:-40px; margin-bottom:5%;' src="/img/logo.jpg" alt=""><br>
    <label style="color:#070707; font-size:20px; font-weight:light;">Reset Password</label><br><br>
               
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="text-normal text-dark">E-Mail Address</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Send Password Reset Link
            </button>
        </div>
    </form>
    
    <script src="{{ asset('js/app.js') }}"></script>
    
@endsection
