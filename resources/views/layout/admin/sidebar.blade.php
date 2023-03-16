<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-heading">Menu</li>

      <li class="nav-item">
        <a class="nav-link {{ request()->is('beranda_admin') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ request()->is('examination*') ? '' : 'collapsed' }}" href="{{ route('examination.index') }}">
          <i class="bi bi-journal-text"></i>
          <span>Pemeriksaan Pasien</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
