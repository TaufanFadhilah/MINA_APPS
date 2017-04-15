<aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <div class="sidenav-inner">
                
                <ul class="side-nav magic-nav">
                    
                    <li class="side-nav-header">Navigation</li>
                    
                    <!-- <li>
                        <a href="msg-inbox.html">
                            <i class="sli-envelope"></i> 
                            <span class="nav-text">Messages</span>
                            <span class="badge bg-danger">3</span>
                        </a>
                    </li> -->
                    
                    <li class="has-submenu">
                        <a href="#submenuOne" data-toggle="collapse" aria-expanded="false">
                            <i class="fs-user-5"></i> 
                            <span class="nav-text">Employees</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuOne">
                            <ul>
                                <li><a href="{{url('/createEmployees')}}">Input Employee</a></li>
                                <li><a href="{{url('/createSchedules')}}">Input Schedules</a></li>
                                <li><a href="{{url('listEmployees')}}">List Employees</a></li>
                                <li><a href="{{url('listSchedules')}}">List Schedules</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="has-submenu">
                        <a href="#submenuTwo" data-toggle="collapse" aria-expanded="false">
                            <i class="fs-truck"></i> 
                            <span class="nav-text">Suppliers</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuTwo">
                            <ul>
                                <li><a href="{{url('/createSuppliers')}}">Input Supplier</a></li>
                                <li><a href="{{url('listSuppliers')}}">List Suppliers</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="has-submenu">
                        <a href="#submenuThree" data-toggle="collapse" aria-expanded="false">
                            <i class="fs-data"></i> 
                            <span class="nav-text">Data</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuThree">
                            <ul>
                                <li><a href="{{url('/createFishes')}}">Input Fish</a></li>
                                <li><a href="{{url('/createTransactions')}}">Input Transaction</a></li>
                                <li><a href="{{url('listFishes')}}">List Fish</a></li>
                                <li><a href="{{url('listTransactions')}}">List Transaction</a></li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                
            </div><!-- END: sidebar-inner -->
            
        </aside>    <!-- END: Side Navigation -->