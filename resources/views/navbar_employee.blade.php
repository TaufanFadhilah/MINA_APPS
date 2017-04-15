<aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <div class="sidenav-inner">
                
                <ul class="side-nav magic-nav">
                    
                    <li class="side-nav-header">Navigation</li>
                    
                     <li>
                        <a href="msg-inbox.html">
                            <i class="fs-calendar"></i> 
                            <span class="nav-text">Schedules</span>
                             <span class="badge bg-danger">0</span> 
                        </a>
                    </li> 

                    <li>
                        <a href="msg-inbox.html">
                            <i class="fs-checkbox"></i> 
                            <span class="nav-text">Absent</span>
                        </a>
                    </li> 
                    
                    <li class="has-submenu">
                        <a href="#submenuThree" data-toggle="collapse" aria-expanded="false">
                            <i class="fs-data"></i> 
                            <span class="nav-text">Data</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuThree">
                            <ul>
                                <li><a href="{{url('/createTransactions')}}">Input Transaction</a></li>
                                <li><a href="{{url('listFishes')}}">List Fish</a></li>
                                <li><a href="{{url('listTransactions')}}">List Transaction</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
            </div><!-- END: sidebar-inner -->
            
        </aside>    <!-- END: Side Navigation -->