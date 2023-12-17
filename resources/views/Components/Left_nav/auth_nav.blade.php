<!-- Forms start -->
<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
      aria-expanded="false" aria-controls="sidebarForms">
      <i data-feather="file-text" class="icon-dual"></i>
      <span data-key="t-forms">Authentication</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarForms">
      <ul class="nav nav-sm flex-column">
        
        <li class="nav-item">
          <a href="{{route('login')}}" class="nav-link" data-key="t-file-uploads">Login</a>
        </li>
        <li class="nav-item">
          <a href="{{route('sign-up')}}" class="nav-link" data-key="t-file-uploads">Sign Up</a>
        </li>
        
      </ul>
    </div>
  </li>
  <!-- Forms end -->