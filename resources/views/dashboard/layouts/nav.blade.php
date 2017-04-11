<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="/" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the marginin -->
            <img src="{{asset('img/nibmtrans.png') }}" alt="logo"/>
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        @if (!Auth::guest())
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-bars"></i>
            </a>
        </div>
        @endif
        <div class="navbar-right">
            
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    @if(App::getLocale() == 'en')
                        <i class="flag-icon flag-icon-us flag-icon-squared"></i>
                    @else
                        <i class="flag-icon flag-icon-my flag-icon-squared"></i>
                    @endif
                    </a>
                    <ul class="dropdown-menu dropdown-messages table-striped">
                        <li class="dropdown-title">{{trans('helpdesk.language')}}</li>
                        <li>
                            <a href="{{ route('lang.switch', 'en') }}" class="message striped-col">
                               {{trans('helpdesk.english')}} <i class="flag-icon flag-icon-us flag-icon-squared pull-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('lang.switch', 'ms') }}" class="message">
                                {{trans('helpdesk.malay')}} <i class="flag-icon flag-icon-my flag-icon-squared pull-right"></i>
                            </a>
                        </li>    
                    </ul>
                </li>
           
                <!-- User Account: style can be found in dropdown-->
                @if (Auth::guest())
                            <li><a style="color: #ffffff; font-weight: bold;" href="{{ route('login') }}">{{trans('helpdesk.login')}}</a></li>
                            <li><a style="color: #ffffff; font-weight: bold;" href="{{ route('register') }}">{{trans('helpdesk.register')}}</a></li>
                @else
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="{{ asset('img/authors/avatar1.png')}}" width="35" class="img-circle img-responsive pull-left"
                             height="35" alt="User Image">
                        <div class="riot">
                            <div>
                            
                            
                      
                                {{ Auth::user()->name }}
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset('img/authors/avatar1.png') }}" class="img-circle" alt="User Image">
                            <p> {{ Auth::user()->name }}</p>
                        </li>
                        <!-- Menu Body -->
                        <li class="p-t-3">
                            <a href="#">
                                <i class="fa fa-fw fa-user"></i>   {{trans('helpdesk.myprofile')}}
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-fw fa-gear"></i>    {{trans('helpdesk.setting')}}
                            </a>
                        </li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                       
                            <div class="pull-right">
                               
                                    <i class="fa fa-fw fa-sign-out"></i>
                                  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                               {{trans('helpdesk.logout')}}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                   
                            </div>
                        </li>
                    </ul>
                </li>
                  @endif
            </ul>
        </div>
    </nav>
</header>