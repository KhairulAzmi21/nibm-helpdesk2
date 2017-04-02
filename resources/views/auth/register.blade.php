@extends('layouts.app2')
@section('page', 'Register')

@section('page_lvl_css')
	 <link rel="stylesheet" type="text/css" href="{{asset('css/core_css/custom.css')}}">
    	<link href="{{asset('css/core_css/register.css')}}" rel="stylesheet">
@stop
@section('content')

<div class="preloader">
    <div class="loader_img"><img src="img/loading.gif" alt="loading..." height="64" width="64"></div>
</div> 
<div class="container">
    <div class="row " id="form-login">

        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 register-content">
            <div class="row">
               <div class="col-md-12">
                   <div class="header">
                       <h2 class="text-center">
                           Sign Up
                           <small> with</small>
                           <a href="/"><img src="img/pages/logo.png" alt="logo"></a>
                       </h2>
                   </div>
               </div>
            </div>
            <div class="row row-bg-color">
                <div class="col-md-12 core-register">
                     <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        <!-- CSRF Token -->
                           {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="control-label" for="user_name">NAME</label>
                                    <div class="input-group">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

	                                @if ($errors->has('name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
	                                @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label" for="email">EMAIL</label>
                                    <div class="input-group">
                                       <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required>

	                                @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row password">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="control-label" for="password">PASSWORD</label>
                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="" required>

		                                @if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group cp-group">
                                    <label class="control-label confirm_pwd" for="password_confirm">CONFIRM PASSWORD</label>
                                    <div class="input-group pull-right">
                                       <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                                <input type="submit" class="btn btn-primary" value="Sign Up"/>
                                <input type="reset" class="btn btn-default" value="Reset" id="dee1"/><br>
                                <hr>
                                <span> Already Have an account? <a href="{{ route('login')}}">Login</a></span>
                        </div>
                    </form>
                </div>
                
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('page_lvl_js')
	   <script type="text/javascript" src="{{asset('js/core_js/register.js')}}"></script>
@stop