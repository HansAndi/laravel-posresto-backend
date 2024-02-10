<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">POS HANS andi</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ Request::is('home') ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('home') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('home') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ request()->routeIs('users.*') ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ request()->routeIs('users.*') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('users.index') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ request()->routeIs('products.*') ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Products</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ request()->routeIs('products.*') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('products.index') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Categories</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ request()->routeIs('categories.*') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('categories.index') }}">General Dashboard</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
