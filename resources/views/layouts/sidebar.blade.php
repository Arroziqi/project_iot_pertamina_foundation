<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-db" data-bs-toggle="collapse" href="#">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-db" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="index.html">
                        <i class="bi bi-circle"></i><span>Dashboard</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Station Reports</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="station-1.html">
                        <i class="bi bi-circle"></i><span>Station 1</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Station 2</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Station 3</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Station 4</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Station 5</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            {{-- <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Station Reports</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a> --}}
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="nav-link collapsed" href={{ route('logout') }}
                    onclick="event.preventDefault();
                this.closest('form').submit();"><i
                        class="fa-solid fa-right-from-bracket"></i>{{ __('Log Out') }}</a>

                {{-- <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link> --}}
            </form>
        </li><!-- End Logout Nav -->
    </ul>
</aside><!-- End Sidebar-->
