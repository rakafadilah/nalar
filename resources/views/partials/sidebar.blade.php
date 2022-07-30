<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="index.html" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Blog</span></li>
                <li class="sidebar-item">
                    <a href="{{route('tags.index')}}" class="sidebar-link ">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu"> Tags
                        </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('categories.index')}}" class="sidebar-link">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu"> Categories
                        </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('blog.index')}}" class="sidebar-link">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu"> Post
                        </span>
                    </a>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Pages</span></li>
                <li class="sidebar-item">
                    <a href="{{route('pages.index')}}" class="sidebar-link">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu"> Blogpage
                        </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('image.index')}}" class="sidebar-link">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu"> Ads
                        </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('home.index')}}" class="sidebar-link">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu"> HomePage
                        </span>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>