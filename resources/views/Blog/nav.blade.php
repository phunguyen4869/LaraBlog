<nav class="fh5co-nav" role="navigation">
    <div class="container-wrap">
        <div class="top-menu">
            <div class="row">
                <div class="col-xs-2">
                    <div id="fh5co-logo"><a href="{{ url('/') }}">Blog</a>
                    </div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a>
                        </li>
                        <li><a href="work.html">Work</a></li>
                        <li class="has-dropdown">
                            <a href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                        @if (Auth::check())
                            <li class="has-dropdown">
                                <a>{{ Auth::user()->name }}</a>
                                <ul class="dropdown">
                                    <li><a
                                            href="{{ url('admin/dashboard') }}">Dashboard</a>
                                    </li>
                                    <li><a
                                            href="{{ url('admin/logout') }}">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="has-dropdown">
                                <a>User</a>
                                <ul class="dropdown">
                                    <li><a
                                            href="{{ url('admin/login') }}">Login</a>
                                    </li>
                                    <li><a
                                            href="{{ url('admin/register') }}">Register</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
