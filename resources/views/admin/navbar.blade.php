

      

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{route('home')}}"><img src="assets/images/klassy-logo.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href=""><img src="admin/asset/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">
        
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('adpanle') ? ' active' : '' }} ">
          <a class="nav-link" href="{{route('adpanle')}}">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">User's</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('baner') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('baner')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Baners</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('baner.image') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('baner.image')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Baner Image</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('about') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('about')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">About Us</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('all_food') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('all_food')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Food's</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('meal_offer') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('meal_offer')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Meal Offer</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('all.reservation') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('all.reservation')}}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Reservations</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('contact.info') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('contact.info')}}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Contact Info</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('all.chef') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('all.chef')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Chefs</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('logo') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('logo')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Logo</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('add.user') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('add.user')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Add User</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('add_food') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('add_food')}}">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Add Food</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('add_chef') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('add_chef')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Add Chef</span>
          </a>
        </li>
       
        
       
 
        <li class="nav-item menu-items {{ request()->routeIs('contact') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('contact')}}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Add Contact</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('view.order') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('view.order')}}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">ORDERS</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ request()->routeIs('footer') ? ' active' : '' }}">
          <a class="nav-link" href="{{route('footer')}}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Footer's</span>
          </a>
        </li>
        

        <li class="nav-item menu-items">
          <a class="nav-link" href="{{route('home')}}">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Home</span>
          </a>
        </li>
      </ul>
    </nav>
   
        </footer>
        <!-- partial -->
