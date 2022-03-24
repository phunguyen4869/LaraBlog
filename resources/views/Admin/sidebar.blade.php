  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          {{-- <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

          {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column"
                  data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fa-solid fa-user"></i>
                          <p>
                              Users manage
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="./index.html" class="nav-link">
                                  <i class="fa-solid fa-list"></i>
                                  <p>Users list</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./index2.html" class="nav-link">
                                  <i class="fa-solid fa-plus"></i>
                                  <p>Add user</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./index3.html" class="nav-link">
                                  <i class="fa-solid fa-pen-to-square"></i>
                                  <p>Edit user</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fa-solid fa-bars-staggered"></i>
                          <p>
                              Categories manage
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('admin/category') }}"
                                  class="nav-link">
                                  <i class="fa-solid fa-list"></i>
                                  <p>Categories list</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('admin/category/create') }}"
                                  class="nav-link">
                                  <i class="fa-solid fa-plus"></i>
                                  <p>Add category</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-file"></i>
                        <p>
                            Posts manage
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/post') }}"
                                class="nav-link">
                                <i class="fa-solid fa-list"></i>
                                <p>Posts list</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/post/create') }}"
                                class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Add new post</p>
                            </a>
                        </li>
                    </ul>
                </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fa-solid fa-images"></i>
                          <p>
                              Sliders manage
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('admin/slider') }}"
                                  class="nav-link">
                                  <i class="fa-solid fa-list"></i>
                                  <p>Sliders list</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('admin/slider/create') }}"
                                  class="nav-link">
                                  <i class="fa-solid fa-plus"></i>
                                  <p>Add slider</p>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
