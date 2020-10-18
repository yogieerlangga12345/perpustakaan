<aside class="main-sidebar elevation-4 sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link navbar-primary">
      <img src="{{ asset('assets/lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Kelompok 1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('indexBuku') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('indexPengguna') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('indexRole') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Role
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('indexKategori') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('indexStatus') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Status
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>