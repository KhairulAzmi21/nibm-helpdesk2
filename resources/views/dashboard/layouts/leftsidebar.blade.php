   <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="{{ asset('img/authors/avatar1.png') }}" class="img-circle" alt="User Image"></a>
                        <div class="content-profile">
                            <h4 class="media-heading">{{ Auth::user()->name }}</h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw fa-user"></i>
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw fa-gear"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <ul class="navigation">
                    <li {!! (Request::is('tickets/create') ? 'class="active"':"") !!}>     
                        <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@create') }}">
                            <i class="menu-icon fa fa-fw fa-pencil-square"></i>
                        
                            <span class="mm-text ">{{ trans('ticketit::lang.btn-create-new-ticket') }}</span>
                        </a>
                    </li>
                    <li {!! (Request::is('tickets') ? 'class="active"':"") !!}> 
                        <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}">
                            <i class="menu-icon fa fa-fw fa-envelope-open"></i>
                            <span class="mm-text ">{{ trans('ticketit::lang.nav-active-tickets') }}</span>
                        </a>
                    </li>
                    <li {!! (Request::is('tickets/complete') ? 'class="active"':"") !!}> 
                        <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@indexComplete') }}">
                            <i class="menu-icon fa fa-fw fa-envelope"></i>
                            <span class="mm-text ">{{ trans('ticketit::lang.nav-completed-tickets') }}</span>
                        </a>
                    </li>
                    @if($u->isAdmin())
                    <li {!! (Request::is('tickets-admin') ? 'class="active"':"") !!}> 
                        <a href="{{ action('\Kordy\Ticketit\Controllers\DashboardController@index') }}">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">{{ trans('ticketit::admin.nav-dashboard') }}</span>
                        </a>
                    </li>
                    
                    <li class="menu-dropdown {!! (Request::is('tickets-admin/*') ? 'active':'') !!}" >
                        <a href="#">
                            <i class="menu-icon fa fa-fw fa-tachometer"></i>
                            <span> {{ trans('ticketit::admin.nav-settings') }} </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li {!! (Request::is('tickets-admin/status') ? 'class="active"':"") !!}>
                                <a href="{{ action('\Kordy\Ticketit\Controllers\StatusesController@index') }}">
                                    <i class="fa fa-fw fa-question-circle"></i> {{ trans('ticketit::admin.nav-statuses') }}
                                </a>
                            </li>
                            <li {!! (Request::is('tickets-admin/priority') ? 'class="active"':"") !!}>
                                 <a href="{{ action('\Kordy\Ticketit\Controllers\PrioritiesController@index') }}">
                                    <i class="fa fa-fw fa-level-up"></i> {{ trans('ticketit::admin.nav-priorities') }}
                                </a>
                            </li>
                            <li {!! (Request::is('tickets-admin/agent') ? 'class="active"':"") !!}>
                                <a href="{{ action('\Kordy\Ticketit\Controllers\AgentsController@index') }}">
                                    <i class="fa fa-fw fa-users"></i> {{ trans('ticketit::admin.nav-agents') }}
                                </a>
                            </li>
                            <li {!! (Request::is('tickets-admin/category') ? 'class="active"':"") !!}>
                                 <a href="{{ action('\Kordy\Ticketit\Controllers\CategoriesController@index') }}">
                                    <i class="fa fa-fw fa-tasks"></i> {{ trans('ticketit::admin.nav-categories') }}
                                </a>
                            </li>
                            <li {!! (Request::is('tickets-admin/configuration') ? 'class="active"':"") !!}>
                                <a href="{{ action('\Kordy\Ticketit\Controllers\ConfigurationsController@index') }}">
                                    <i class="fa fa-fw fa-cog"></i> {{ trans('ticketit::admin.nav-configuration') }}
                                </a>
                            </li>
                            <li {!! (Request::is('tickets-admin/administrator') ? 'class="active"':"") !!}>
                                <a href="{{ action('\Kordy\Ticketit\Controllers\AdministratorsController@index')}}">
                                    <i class="fa fa-fw fa-user-circle"></i> {{ trans('ticketit::admin.nav-administrator') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li {!! (Request::is('category') ? 'class="active"':"") !!}>
                        <a href="{{ route('category.index') }}">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">{{ trans('helpdesk.knowledgebase')}}</span>
                        </a>
                    </li>
            
                   
                </ul>
                
                <!-- / .navigation --> </div>
            <!-- menu --> </section>
        <!-- /.sidebar --> </aside>