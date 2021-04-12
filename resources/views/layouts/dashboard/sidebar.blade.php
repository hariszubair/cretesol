<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
      <img src="{{asset('images/white-logo.png')}}" alt="AdminLTE Logo" class="brand-image " style="width: 250px;padding: 20px">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="public/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <h5 style="color: white">Welcome, {{Auth::user()->name}}</h5>
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
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
              <a href="{{URL('dashboard')}}" class="nav-link ">
              <i class="fas fa-envelope"></i>
              <p>
                Contact Us Form
              </p>
            </a>
            </li>
                <li class="nav-item">
              <a href="{{URL('admin/category')}}" class="nav-link ">
              <i class="fas fa-dice-one"></i>
              <p>
                Category
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{URL('admin/sub_category')}}" class="nav-link ">
            <i class="fas fa-dice-two"></i>
              <p>
                Sub Category
              </p>
            </a>
           
          </li >
          <li class="nav-item">
            <a href="{{URL('admin/third_category')}}" class="nav-link ">
            <i class="fas fa-dice-three"></i>
              <p>
                Third Category
              </p>
            </a>
           
          </li >
          <li class="nav-item" >
            <a href="{{URL('admin/product')}}" class="nav-link">
            <i class="fas fa-boxes"></i>
              <p>
                Products
                
              </p>
            </a>
          </li>
            <li class="nav-item" >
            <a href="{{URL('admin/projects')}}" class="nav-link">
            <i class="fas fa-project-diagram"></i>
              <p>
                Projects
                
              </p>
            </a>
            </li>
            <li class="nav-item" >
            <a href="{{URL('admin/clients')}}" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
                Clients
                
              </p>
            </a>
            </li>
            <li class="nav-item" >
            <a href="{{URL('admin/misc_images')}}" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
                Other Images
              </p>
            </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>