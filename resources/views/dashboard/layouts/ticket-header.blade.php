   <div class="row">
                <div class="col-md-12">
                    <div class="row tiles-row">
                    <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@index') }}">
                    @if($u->isAdmin())
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                    @else
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                    @endif
                            <div class="canvas-interactive-wrapper1">
                                <canvas id="canvas-interactive1"></canvas>
                                <div class="cta-wrapper1">
                                    <div class="widget" data-count=".num" data-from="0"
                                         data-to="99.9" data-suffix="%" data-duration="2">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                                <i class="fa fa-fw fa-envelope-open fa-size"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box" class="count-box">
                                                <?php 
                                                    if ($u->isAdmin()) {
                                                        echo Kordy\Ticketit\Models\Ticket::active()->count();
                                                    } elseif ($u->isAgent()) {
                                                        echo Kordy\Ticketit\Models\Ticket::active()->agentUserTickets($u->id)->count();
                                                    } else {
                                                        echo Kordy\Ticketit\Models\Ticket::userTickets($u->id)->active()->count();
                                                    }
                                                ?>
                                                </div>
                                                <span class="title">{{ trans('ticketit::lang.nav-active-tickets') }}</span>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <a href="{{ action('\Kordy\Ticketit\Controllers\TicketsController@indexComplete') }}">
                         @if($u->isAdmin())
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                        @else
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                        @endif
                            <div class="widget" data-count=".num" data-from="0"
                                 data-to="512" data-duration="3">
                                <div class="canvas-interactive-wrapper2">
                                    <canvas id="canvas-interactive2"></canvas>
                                    <div class="cta-wrapper2">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                                <i class="fa fa-fw fa-envelope fa-size"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box2" class="count-box">
                                                    <?php 
                                                    if ($u->isAdmin()) {
                                                        echo Kordy\Ticketit\Models\Ticket::complete()->count();
                                                    } elseif ($u->isAgent()) {
                                                        echo Kordy\Ticketit\Models\Ticket::complete()->agentUserTickets($u->id)->count();
                                                    } else {
                                                        echo Kordy\Ticketit\Models\Ticket::userTickets($u->id)->complete()->count();
                                                    }
                                                ?>
                                                </div>
                                                <span class="title">{{ trans('ticketit::lang.nav-completed-tickets') }}</span>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        @if($u->isAdmin()) 
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="widget" data-suffix="k" data-count=".num"
                                 data-from="0" data-to="310" data-duration="4" data-easing="false">
                                <div class="canvas-interactive-wrapper3">
                                    <canvas id="canvas-interactive3"></canvas>
                                    <div class="cta-wrapper3">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                                <i class="fa fa-fw fa-archive fa-size"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box3" class="count-box">
                                                    100
                                                </div>
                                                <span class="title">Total Tickets</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                
                    </div>
                </div>
            </div>