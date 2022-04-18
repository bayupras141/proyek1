<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Penjualan Motor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('tipe.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                    Tipe
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('produk.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-tag"></i>
                  <p>
                    Produk
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('customer.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Customer
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('transaksi.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Transaksi
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('laporan')}}" class="nav-link">
                  <i class="nav-icon fas fa-print"></i>
                  <p>
                    Laporan
                  </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>