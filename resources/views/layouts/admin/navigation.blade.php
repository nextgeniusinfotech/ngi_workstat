<!-- Page Sidebar Start-->
<header class="main-nav">
    <nav>
        <div class="main-navbar mt-3">
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown active">
                        <a class="nav-link menu-title {{ request()->routeIs('admin.home') ? 'active-bg' : '' }}"
                            href="{{ route('admin.home') }}">
                            <i data-feather="home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="dropdown active">
                        <a class="nav-link menu-title {{ request()->routeIs('admin.users') ? 'active-bg' : '' }}"
                            href="{{ route('admin.users') }}">
                            <i data-feather="users"></i>
                            <span>Employee</span>
                        </a>
                    </li>
                    <li class="dropdown active">
                        <a class="nav-link menu-title {{ request()->routeIs('admin.projects') ? 'active-bg' : '' }}"
                            href="{{ route('admin.projects') }}">
                            <i data-feather="bookmark"></i>
                            <span>Project</span>
                        </a>
                    </li>
                    <li class="dropdown active">
                        <a class="nav-link menu-title {{ request()->routeIs('admin.working_hours') ? 'active-bg' : '' }}"
                            href="{{ route('admin.working_hours') }}">
                            <i data-feather="clock"></i>
                            <span>Working Hour</span>
                        </a>
                    </li>
                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title {{ request()->routeIs('admin.index.change-password') ? 'active-bg' : '' }}"
                            href="{{ route('admin.index.change-password') }}">
                            <i data-feather="lock"></i>
                            <span>Change password</span>
                        </a>
                    </li> --}}
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ request()->routeIs('admin.logout') ? 'active-bg' : '' }}"
                            href="{{ route('admin.logout') }}">
                            <i data-feather="log-out"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Page Sidebar Ends-->
