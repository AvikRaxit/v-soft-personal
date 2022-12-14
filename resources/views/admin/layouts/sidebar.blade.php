<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="{{route('dashboard')}}">
      {{-- <img src="{{asset('backend/img/logo/logo.png')}}" style="float:left;line-height:.8;width:100px" alt="Vareli Tecnac"> --}}
      <span class="">Vareli TechSoft</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">Pages</li>

      <li class="sidebar-item active">
        <a class="sidebar-link" href="{{route('dashboard')}}">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>
      @if (session()->get('loginId')->role == 1)
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{route('manageUser')}}">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">User Manage</span>
        </a>
      </li>
      @endif
      @if (session()->get('loginId')->role == 1)
      <li class="sidebar-item">
        <a class="sidebar-link" href="pages-sign-in.html">
          <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">User Manage</span>
        </a>
      </li>
      @endif
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="pages-sign-up.html">
          <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="pages-blank.html">
          <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
        </a>
      </li>

      <li class="sidebar-header">
        Tools & Components
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="ui-buttons.html">
          <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="ui-forms.html">
          <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="ui-cards.html">
          <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="ui-typography.html">
          <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="icons-feather.html">
          <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
        </a>
      </li>

      <li class="sidebar-header">
        Plugins & Addons
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="charts-chartjs.html">
          <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="maps-google.html">
          <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
        </a>
      </li>
    </ul>
  </div>
</nav>