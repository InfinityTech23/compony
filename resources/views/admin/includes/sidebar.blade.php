<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('/admin-area') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin-contact-us.index') }}">
                <i class="bi bi-messenger"></i>
                <span>Contact us</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin-about-us.index') }}">
                <i class="bi bi-list"></i>
                <span>About us</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="ri-product-hunt-line"></i><span>Websites</span><i class="bi bi-messanger ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin-websites.index') }}">
                        <i class="bi bi-circle"></i><span>View All</span>
                    </a>
                    <a href="{{ route('admin-websites.create') }}">
                        <i class="bi bi-circle"></i><span>Add New</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Component -->
    </ul>

</aside><!-- End Sidebar-->
