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
                    <li>
                        <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@create') }}">
                            <i class="menu-icon fa fa-fw fa-pencil-square"></i>
                            <span class="mm-text ">{{ trans('ticketit::lang.btn-create-new-ticket') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}">
                            <i class="menu-icon fa fa-fw fa-envelope-open"></i>
                            <span class="mm-text ">{{ trans('ticketit::lang.nav-active-tickets') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@indexComplete') }}">
                            <i class="menu-icon fa fa-fw fa-envelope"></i>
                            <span class="mm-text ">{{ trans('ticketit::lang.nav-completed-tickets') }}</span>
                        </a>
                    </li>
                    @if($u->isAdmin())
                    <li class="active" id="active">
                        <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@indexComplete') }}">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">{{ trans('ticketit::admin.nav-dashboard') }}</span>
                        </a>
                    </li>
                    
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-fw fa-tachometer"></i>
                            <span> {{ trans('ticketit::admin.nav-settings') }} </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ action('\Kordy\Ticketit\Controllers\StatusesController@index') }}">
                                    <i class="fa fa-fw fa-fire"></i> {{ trans('ticketit::admin.nav-statuses') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('\Kordy\Ticketit\Controllers\StatusesController@index') }}">
                                    <i class="fa fa-fw fa-file-text-o"></i> {{ trans('ticketit::admin.nav-statuses') }}
                                </a>
                            </li>
                            <li>
                                 <a href="{{ action('\App\Http\Controllers\Ticketit\PrioritiesController@index') }}">
                                    <i class="fa fa-fw fa-warning"></i> {{ trans('ticketit::admin.nav-priorities') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('\Kordy\Ticketit\Controllers\AgentsController@index') }}">
                                    <i class="fa fa-fw fa-fire"></i>{{ trans('ticketit::admin.nav-agents') }}
                                </a>
                            </li>
                            <li>
                                 <a href="{{ action('\Kordy\Ticketit\Controllers\CategoriesController@index') }}">
                                    <i class="fa fa-fw fa-cog"></i> {{ trans('ticketit::admin.nav-categories') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('\Kordy\Ticketit\Controllers\ConfigurationsController@index') }}">
                                    <i class="fa fa-fw fa-newspaper-o"></i> {{ trans('ticketit::admin.nav-configuration') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('\Kordy\Ticketit\Controllers\AdministratorsController@index')}}">
                                    <i class="fa fa-fw fa-newspaper-o"></i> {{ trans('ticketit::admin.nav-administrator') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('category.index') }}">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">KnowledgeBase</span>
                        </a>
                    </li>
            
                   
                </ul>
                
                <!-- / .navigation --> </div>
            <!-- menu --> </section>
        <!-- /.sidebar --> </aside>