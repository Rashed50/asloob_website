<div class="sl-sideleft">

    <div class="sl-sideleft-menu">
      <a href="{{ route('admin') }}" class="sl-menu-link @yield('dashboard')">
        <div class="sl-menu-item">
            <i class="fa fa-empire tx-20"></i>
          <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->

        {{-- Dropdown menu start --}}
       
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-th tx-20"></i>
              <span class="menu-item-label"> 
              <a href=" {{ route('frontend') }}" target="_blank">Live Website</a>
              </span>
              
            </div>
          </a> 


        <a href="#" class="sl-menu-link @yield('company-profile')">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-th tx-20"></i>
              <span class="menu-item-label">Company &amp; Profile</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('company-profile-info') }}" class="nav-link @yield('add-company-profile')">Update Profile</a></li>
            <li class="nav-item"><a href=" {{ route('description-update') }} " class="nav-link @yield('update-description')">Update Description</a></li>
          </ul>
            {{-- Dropdown menu End --}}

        {{-- Dropdown menu start --}}
        <a href="#" class="sl-menu-link @yield('company-events')">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-th-list tx-20"></i>
              <span class="menu-item-label">Events</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('event-add-ui') }}" class="nav-link @yield('event-add-ui')">Add New Event</a></li>
          </ul>
            {{-- Dropdown menu End --}}

        {{-- Dropdown menu start --}}
        <a href="#" class="sl-menu-link @yield('projects')">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-bars tx-20"></i>
              <span class="menu-item-label">Project</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('project-add-ui') }}" class="nav-link @yield('add-project-info')">Add New Project</a></li>
            <li class="nav-item"><a href="{{ route('project-image') }}" class="nav-link @yield('add-project-image')">Upload Project Image</a></li>
          </ul>
        {{-- Dropdown menu End --}}

        {{-- Dropdown menu start --}}
        <a href="#" class="sl-menu-link @yield('jobCircular')">
            <div class="sl-menu-item">
                <i class="fa fa-certificate tx-20"></i>
              <span class="menu-item-label">Job Circular</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('job-circular-add-ui') }}" class="nav-link @yield('circular-add-ui')">New Job Circular</a></li>
            {{-- <li class="nav-item"><a href=" {{ route('sub-sub-categories') }} " class="nav-link @yield('add-sub-sub-categories')">Add Sub SubCategory</a></li> --}}
          </ul>
            {{-- Dropdown menu End --}}

        {{-- Dropdown menu start --}}
        <a href="#" class="sl-menu-link @yield('jobApplicants')">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-arrows-alt tx-20"></i>
              <span class="menu-item-label">Job Seeker</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('all-applicants-ui') }}" class="nav-link @yield('Applicant-list')">All Applications</a></li>
            {{-- <li class="nav-item"><a href=" {{ route('sub-sub-categories') }} " class="nav-link @yield('add-sub-sub-categories')">Add Sub SubCategory</a></li> --}}
          </ul>
            {{-- Dropdown menu End --}}

      {{-- <a href="mailbox.html" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
          <span class="menu-item-label">Mailbox</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link --> --}}

    </div><!-- sl-sideleft-menu -->

    <br>
  </div><!-- sl-sideleft -->
