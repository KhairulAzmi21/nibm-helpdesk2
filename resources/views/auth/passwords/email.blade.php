@extends('layouts.app2')
@section('page', 'Forgot Password')

@section('page_lvl_css')
	 <link rel="stylesheet" type="text/css" href="{{asset('css/core_css/custom.css')}}">
    	<link href="{{asset('css/core_css/forgot_password.css')}}" rel="stylesheet">
@stop
@section('content')

{{-- <div class="preloader">
    <div class="loader_img"><img src="img/loading.gif" alt="loading..." height="64" width="64"></div>
</div>  --}}
<div class="container"> 
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 box animated fadeInUp">
            <div class="text-center"><a href="/"><img src="{{ asset('img/nibmtrans.png') }}" alt="NIBM Logo"></a></div>
            <h3 class="text-center">Forgot Password
            </h3>
             @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            <p class="text-center enter_email">
                <small>Enter your Registered email</small>
            </p>
            <p class="text-center check_email hidden">
                <small>Check your email for Reset link</small>
            </p>
            <form action="{{ route('password.email') }}" class="forgot_Form text-center" method="POST" id="forgot_password">
                 {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                <button type="submit" value="Reset Your Password" class="btn btn-primary btn-block submit-btn"> Send Password Reset Link
                </button>
            </form>
            <div>
                <h4 class="text-primary signup-signin">
                    <a href="{{route('login')}}">Log In</a>
                    <a href="{{route('register')}}" class="pull-right">Sign Up</a>
                </h4>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page_lvl_js')
	   <script type="text/javascript" src="{{asset('js/core_js/forgot_password.js')}}"></script>
@stop