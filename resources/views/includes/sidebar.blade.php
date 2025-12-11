<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

    <!-- Dashboard -->
    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
      <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" 
         href="{{ route('admin.dashboard') }}">
        <i class="bi bi-speedometer2 me-2"></i> <!-- Bootstrap Icon -->
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <!-- All Users -->
    <li class="nav-item {{ request()->routeIs('admin.alluser') ? 'active' : '' }}">
      <a class="nav-link {{ request()->routeIs('admin.alluser') ? 'active' : '' }}" 
         href="{{ route('admin.alluser') }}">
        <i class="bi bi-people me-2"></i> <!-- Bootstrap Icon -->
        <span class="menu-title">All Users</span>
      </a>
    </li>

  </ul>
</nav>

