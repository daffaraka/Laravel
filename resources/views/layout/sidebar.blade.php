 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route ('content.index')}}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Informasi Puskesmas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    <!--   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->


      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <!--  <div class="user-panel mt-3 pb-3 mb-3 d-flex"> -->
                <!-- <div class="image">
                     <img src="{{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image" style="">
                </div> -->
            <li class="nav-item has-treeview">
               <a href="/" class="nav-link">
                  <i class="nav-icon fas fa-user-alt"></i>
                   <p>
                      {{ Auth::user()->namalengkap }}
                    

                        <i class="right fas fa-angle-left"></i>
                      
                      
                   </p>
                </a>
         

              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('content.pengguna') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lihat Pengguna</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route ('logout')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Logout</p>
                    </a>
                  </li>
              </ul>
            </li>





               <!--  <div class="info">
                      <a href="#" class="d-block">Alexander Pierce</a>
                </div> -->
           <!--  </div> -->
        </ul>
      </nav>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
               <li class="nav-item has-treeview menu-open">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Puskesmas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route ('content.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route ('content.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dokter</p>
                </a>
              </li>
            </ul>
          </li>

            <li class="nav-item has-treeview">
              <a href="/" class="nav-link">
                <i class="nav-icon fas fa-heartbeat"></i>
                <p>
                  Seputar Covid-19
                  <i class="right fas"></i>
                </p>
              </a>
            </li>



        </ul>
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
