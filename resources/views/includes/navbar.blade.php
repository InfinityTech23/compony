<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active" href="{{ url('/#hero') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/#about') }}">About</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/#services') }}">Services</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/#portfolio') }}">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="{{ url('/#team') }}">Team</a></li>
        <li><a href="blog">Blog</a></li>
        <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="{{ url('/') }}">Deep Drop Down 1</a></li>
                        <li><a href="{{ url('/') }}">Deep Drop Down 2</a></li>
                    </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>

            </ul>
        </li>
        <li><a class="nav-link scrollto" href="{{ route('contact-us.index') }}">Contact</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
