<nav class="fh5co-nav" role="navigation">
    <div class="container-wrap">
        <div class="top-menu">
            <div class="row">
                <div class="col-xs-2">
                    <div id="fh5co-logo"><a href="index.html">Blog</a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="index.html">Home</a>
                        </li>
                        <li><a href="work.html">Work</a></li>
                        <li class="has-dropdown">
                            <a href="blog.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">eCommerce</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">API</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        @if (Auth::check())
                        <li class="has-dropdown">
                            <a>{{Auth::user()->name}}</a>
                            <ul class="dropdown">
                                <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                                <li><a href="{{url('admin/logout')}}">Logout</a></li>
                            </ul>
                        </li>
                        @else
                        <li class="has-dropdown">
                            <a>User</a>
                            <ul class="dropdown">
                                <li><a href="{{url('admin/login')}}">Login</a></li>
                                <li><a href="{{url('admin/register')}}">Register</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
