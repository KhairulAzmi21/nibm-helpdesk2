@extends('dashboard.layouts.master')
@section('content')

@include('dashboard.layouts.nav')
<div class="wrapper row-offcanvas row-offcanvas-left">
    @include('dashboard.layouts.leftsidebar')
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        @include('dashboard.layouts.header')
        <!--section ends-->
        <section class="content sec-mar">
            <div class="row">
                <div class="col-md-12">
                    <div class="row tiles-row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="canvas-interactive-wrapper1">
                                <canvas id="canvas-interactive1"></canvas>
                                <div class="cta-wrapper1">
                                    <div class="widget" data-count=".num" data-from="0"
                                         data-to="99.9" data-suffix="%" data-duration="2">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                                <i class="fa fa-fw fa-shopping-cart fa-size"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box" class="count-box">119</div>
                                                <span class="title">Today Sales</span>
                                            </div>
                                            <div class="text-center">
                                                <span><i class="fa fa-level-up" aria-hidden="true"></i></span>
                                                <strong>12 more Sales</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="widget" data-count=".num" data-from="0"
                                 data-to="512" data-duration="3">
                                <div class="canvas-interactive-wrapper2">
                                    <canvas id="canvas-interactive2"></canvas>
                                    <div class="cta-wrapper2">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                                <i class="fa fa-fw fa-paw fa-size"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box2" class="count-box">316</div>
                                                <span class="title">Daily Visits</span>
                                            </div>
                                            <div class="text-center">
                                                <span><i class="fa fa-level-up" aria-hidden="true"></i></span>
                                                <strong>60 Bounce Rate</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="widget" data-suffix="k" data-count=".num"
                                 data-from="0" data-to="310" data-duration="4" data-easing="false">
                                <div class="canvas-interactive-wrapper3">
                                    <canvas id="canvas-interactive3"></canvas>
                                    <div class="cta-wrapper3">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                                <i class="fa fa-fw fa-usd fa-size"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box3" class="count-box">544</div>
                                                <span class="title">Total income</span>
                                            </div>
                                            <div class="text-center">
                                                <span><i class="fa fa-level-up" aria-hidden="true"></i></span>
                                                <strong>120 more income</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="widget">
                                <div class="canvas-interactive-wrapper4">
                                    <canvas id="canvas-interactive4"></canvas>
                                    <div class="cta-wrapper4">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                                <i class="fa fa-bar-chart-o fa-size"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box4" class="count-box">1598</div>
                                                <span class="title">Total Sales</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default1">
                        <div class="panel-heading">
                            <h3 class="panel-title">Site Activity</h3>
                            <ul class="nav nav-tabs nav-float pull-right" role="tablist">
                                <li class="active">
                                    <a href="#home" role="tab" data-toggle="tab">Stats</a>
                                </li>
                                <li>
                                    <a href="#profile" role="tab" data-toggle="tab">Sales</a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <div class="row">
                                        <div class="col-md-8 col-xs-12 stat-chart">
                                            <div id="chart6" class='with-3d-shadow with-transitions'>
                                                <svg></svg>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <h4>Stats</h4>
                                            <div class="task-item">
                                                Total Sold
                                                <small class="pull-right text-muted">40%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 40%;"
                                                         class="progress-bar progress-bar-primary">
                                                        <span class="sr-only">40% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-item">
                                                Product Delivered
                                                <small class="pull-right text-muted">60%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 60%;"
                                                         class="progress-bar progress-bar-success">
                                                        <span class="sr-only">60% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-item">
                                                Sale Reports
                                                <small class="pull-right text-muted">55%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 55%;"
                                                         class="progress-bar progress-bar-info">
                                                        <span class="sr-only">55% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-item">
                                                New Projects
                                                <small class="pull-right text-muted">66%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="66" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 66%;"
                                                         class="progress-bar progress-bar-warning">
                                                        <span class="sr-only">66% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-item">
                                                New Users
                                                <small class="pull-right text-muted">90%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 90%;"
                                                         class="progress-bar progress-bar-danger">
                                                        <span class="sr-only">90% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-item">
                                                Total Income
                                                <small class="pull-right text-muted">50%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 50%;"
                                                         class="progress-bar progress-bar-primary">
                                                        <span class="sr-only">50% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-12 col-xs-12 sales-tab">
                                            <div id="basicFlotLegend"></div>
                                            <div id="placeholder" style="width:100%; height: 291px"></div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-xs-12">
                                            <div id="donut" style="width:94%; height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('ticketit::shared.header')
            @include('ticketit::tickets.index')
            
           

            <div id="right">
                <div id="slim2">
                    <div class="rightsidebar-right">
                        <div class="rightsidebar-right-content">
                            <h5 class="rightsidebar-right-heading rightsidebar-right-heading-first text-uppercase text-xs">
                                <i class="menu-icon  fa fa-fw fa-paw"></i>
                                Contacts
                            </h5>
                            <ul class="list-unstyled margin-none">
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar1.jpg" height="20" width="20" alt="avatar-image"
                                             class="img-circle pull-right">
                                        <i class="fa fa-circle text-xs text-primary"></i>
                                        Alanis
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar.jpg" height="20" width="20" alt="avatar-image"
                                             class="img-circle pull-right">
                                        <i class="fa fa-circle text-xs text-primary"></i>
                                        Rolando
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar2.jpg" height="20" width="20" alt="avatar-image"
                                             class="img-circle pull-right">
                                        <i class="fa fa-circle text-xs text-primary"></i>
                                        Marlee
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar3.jpg" height="20" width="20" alt="avatar-image"
                                             class="img-circle pull-right">
                                        <i class="fa fa-circle text-xs text-warning"></i>
                                        Marlee
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar4.jpg" height="20" width="20" alt="avatar-image"
                                             class="img-circle pull-right">
                                        <i class="fa fa-circle text-xs text-danger"></i>
                                        Kamryn
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar5.jpg" height="20" width="20" alt="avatar-image"
                                             class="img-circle pull-right">
                                        <i class="fa fa-circle text-xs text-muted"></i>
                                        Cielo
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar7.jpg" height="20" width="20" alt="avatar-image"
                                             class="img-circle pull-right">
                                        <i class="fa fa-circle text-xs text-muted"></i>
                                        Charlene
                                    </a>
                                </li>
                            </ul>

                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                <i class="fa fa-fw fa-tasks"></i>
                                Tasks
                            </h5>
                            <ul class="list-unstyled m-t-25">
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <small class="pull-right text-muted">40% Complete</small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <small class="pull-right text-muted">20% Complete</small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <small class="pull-right text-muted">60% Complete</small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <small class="pull-right text-muted">80% Complete</small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                <i class="fa fa-fw fa-group"></i>
                                Recent Updates
                            </h5>
                            <div>
                                <ul class="list-unstyled">
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-comment fa-fw text-primary"></i>
                                            New Comment
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-twitter fa-fw text-success"></i>
                                            3 New Followers
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-envelope fa-fw text-info"></i>
                                            Message Sent
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-tasks fa-fw text-warning"></i>
                                            New Task
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-upload fa-fw text-danger"></i>
                                            Server Rebooted
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-warning fa-fw text-primary"></i>
                                            Server Not Responding
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart fa-fw text-success"></i>
                                            New Order Placed
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-money fa-fw text-info"></i>
                                            Payment Received
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#right --> </section>
        <!-- /.content --> </aside>
    <!-- /.right-side --> </div>
@endsection
@section('footer')
    <script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script src="//cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
    <script>
        $('.table').DataTable({
            processing: false,
            serverSide: true,
            responsive: true,
            pageLength: {{ $setting->grab('paginate_items') }},
            lengthMenu: {{ json_encode($setting->grab('length_menu')) }},
            ajax: '{!! route($setting->grab('main_route').'.data', $complete) !!}',
            language: {
                decimal:        "{{ trans('ticketit::lang.table-decimal') }}",
                emptyTable:     "{{ trans('ticketit::lang.table-empty') }}",
                info:           "{{ trans('ticketit::lang.table-info') }}",
                infoEmpty:      "{{ trans('ticketit::lang.table-info-empty') }}",
                infoFiltered:   "{{ trans('ticketit::lang.table-info-filtered') }}",
                infoPostFix:    "{{ trans('ticketit::lang.table-info-postfix') }}",
                thousands:      "{{ trans('ticketit::lang.table-thousands') }}",
                lengthMenu:     "{{ trans('ticketit::lang.table-length-menu') }}",
                loadingRecords: "{{ trans('ticketit::lang.table-loading-results') }}",
                processing:     "{{ trans('ticketit::lang.table-processing') }}",
                search:         "{{ trans('ticketit::lang.table-search') }}",
                zeroRecords:    "{{ trans('ticketit::lang.table-zero-records') }}",
                paginate: {
                    first:      "{{ trans('ticketit::lang.table-paginate-first') }}",
                    last:       "{{ trans('ticketit::lang.table-paginate-last') }}",
                    next:       "{{ trans('ticketit::lang.table-paginate-next') }}",
                    previous:   "{{ trans('ticketit::lang.table-paginate-prev') }}"
                },
                aria: {
                    sortAscending:  "{{ trans('ticketit::lang.table-aria-sort-asc') }}",
                    sortDescending: "{{ trans('ticketit::lang.table-aria-sort-desc') }}"
                },
            },
            columns: [
                { data: 'id', name: 'ticketit.id' },
                { data: 'subject', name: 'subject' },
                { data: 'status', name: 'ticketit_statuses.name' },
                { data: 'updated_at', name: 'ticketit.updated_at' },
                { data: 'agent', name: 'users.name' },
                @if( $u->isAgent() || $u->isAdmin() )
                    { data: 'priority', name: 'ticketit_priorities.name' },
                    { data: 'owner', name: 'users.name' },
                    { data: 'category', name: 'ticketit_categories.name' }
                @endif
            ]
        });
    </script>
@append
