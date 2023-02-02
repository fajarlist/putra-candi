<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('template') }}/dist//img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Personal Profil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('template') }}/dist//img/img1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/produk" class="nav-link">
              <i class="nav-icon fa fa-product-hunt"></i>
              <p>
                Produk
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/alat" class="nav-link">
              <i class="nav-icon fa fa-wrench"></i>
              <p>
                alat
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/contact" class="nav-link">
              <i class="nav-icon fa fa-commenting-o"></i>
              <p>
               Request
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/pesanan" class="nav-link">
              <i class="nav-icon fa fa-shopping-bag"></i>
              <p>
               Pesanan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/penghasilan" class="nav-link">
              <i class="nav-icon fas fa-usd"></i>
              <p>
               Penghasilan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
               Frontend
              </p>
            </a>
          </li>



          {{-- <li class="nav-item">
            <a href="/pengalaman" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                pengalaman
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/keahlian" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                keahlian
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/contact" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                contact
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/portofolio" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                portofolio
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/pendidikan" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                pendidikan
              </p>
            </a>
          </li> --}}


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>