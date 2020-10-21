  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
     

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Manage User
            <i class="fas fa-angle-left right"></i>
            
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('users.view') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>View User</p>
            </a>
          </li>
        </ul>
      </li>
      
    
          {{-- 2ns sidebar password --}}
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Manage Profile
            <i class="fas fa-angle-left right"></i>
            
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('profiles.view') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Your Profile</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('profiles.password.view') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Change Password</p>
            </a>
          </li>
        </ul>
      </li>
      
       {{-- 3rd sidebar logo --}}
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Manage Logo
            <i class="fas fa-angle-left right"></i>
            
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('logos.view') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>View Logo</p>
            </a>
          </li>
        </ul>
      </li>

       {{-- 4th sidebar slider --}}
       <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Manage Slider
            <i class="fas fa-angle-left right"></i>
            
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('sliders.view') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>View Slider</p>
            </a>
          </li>
        </ul>
      </li>

         {{-- 5th sidebar mission --}}
         <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Manage Mission
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('missions.view') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Mission</p>
              </a>
            </li>
          </ul>
        </li>

        {{-- 6th sidebar vission --}}
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Manage Vission
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('vissions.view') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Vission</p>
              </a>
            </li>
          </ul>
        </li>

        {{-- 6th sidebar News And Events --}}
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Manage News_events
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('news_events.view') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View News_events</p>
              </a>
            </li>
          </ul>
        </li>

        {{-- 7th sidebar service --}}
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Manage Service
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('services.view') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Service</p>
              </a>
            </li>
          </ul>
        </li>

         {{-- 7th sidebar contact --}}
         <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Manage Contact
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('contacts.view') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Contact</p>
              </a>
            </li>
          </ul>
        </li>

 {{-- 7th sidebar about-us --}}
 <li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
      Manage Abouts
      <i class="fas fa-angle-left right"></i>
      
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('abouts.view') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>View Abouts</p>
      </a>
    </li>
  </ul>
</li>



    </ul>
  </nav>
  <!-- /.sidebar-menu -->