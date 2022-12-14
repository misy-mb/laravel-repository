@php
$current_route = request()
    ->route()
    ->getName();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">MB Solution</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link
                      {{ $current_route == 'dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('slider.index') }}"
                        class="nav-link {{ $current_route == 'slider.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-anchor"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('role.index') }}" class="nav-link {{ $current_route == 'role.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-robot"></i>
                        <p>
                            Role
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('permission.index') }}"
                        class="nav-link {{ $current_route == 'permission.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Permission
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}"
                        class="nav-link {{ $current_route == 'user.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('todo.index') }}"
                       class="nav-link {{ $current_route == 'todo.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Todos
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
