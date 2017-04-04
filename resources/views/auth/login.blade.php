@extends('layouts.app2')

@section('page', 'Login')

@section('page_lvl_css')
        <link rel="stylesheet" type="text/css" href="{{asset('css/core_css/custom.css')}}">
        <link href="{{asset('css/core_css/login2.css')}}" rel="stylesheet">
@stop
@section('content')

{{-- <div class="preloader">
    <div class="loader_img"><img src="img/loading.gif" alt="loading..." height="64" width="64"></div>
</div> --}}
<div class="container">
    <div class="row " id="form-login">
        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 login-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="text-center">
                            {{ trans('helpdesk.login_with')}}   
                            <a href="/"><img src="img/nibmtrans.png" alt="logo"></a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row row-bg-color">
                <div class="col-md-12 core-login">
                     <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        <!-- CSRF Token -->
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <label class="control-label" for="email">{{ trans('helpdesk.email')}}</label>
                                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input type="text" placeholder="Email Address" class="form-control"
                                               name="email" id="email" value="{{ old('email') }}" required autofocus>
                                               @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <label class="control-label" for="password">{{ trans('helpdesk.password') }}</label>
                                     <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input type="password" placeholder="Password" class="form-control"
                                               name="password" id="password" required />
                                               @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <input type="checkbox" name="remember" id="remember"> &nbsp;
                            <label for="remember"> {{ trans('helpdesk.remember_me') }}</label>
                            <a href="{{ route('password.request') }}" id="forgot" class="text-primary forgot1 pull-right">{{ trans('helpdesk.forgot_password')}} </a>
                        </div>
                        <div class="form-group ">
                            <input type="submit" value="Login" class="btn btn-primary login-btn"/>
                            <br>
                            <hr>
                            <span> {{trans('helpdesk.new_to_nibm')}}<a href="{{ route('register')}}"> {{ trans('helpdesk.sign_up')}}</a></span>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
@section('page_lvl_js')
        <script type="text/javascript" src="{{asset('js/core_js/login.js')}}"></script>
@stop
