<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                <li class="sidebar-item"> <a class="sidebar-link" href="ticket-list.html" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Ticket List
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-chat.html" aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span class="hide-menu">Chat</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.html" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Calendar</span></a></li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Components</span></li>
                <li class="sidebar-item">
                    <a href="{{route('tags.index')}}" class="sidebar-link {{Request::routeIs('tags.index')? 'active' : ''}}">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu"> Tags
                        </span>
                    </a>
                    <a href="{{route('categories.index')}}" class="sidebar-link">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu"> Categories
                        </span>
                    </a>
                    <a href="{{route('tags.index')}}" class="sidebar-link">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu"> Blog
                        </span>
                    </a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Forms </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                       
                        <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><span class="hide-menu"> Form Grids
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><span class="hide-menu"> Checkboxes &
                                    Radios
                                </span></a>
                        </li>
                    </ul>
                </li>
     
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>