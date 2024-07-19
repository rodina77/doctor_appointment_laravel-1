<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4 bg-secondary">

        @if(session('staff'))
        <a class="list-group-item py-2 ripple text-white"
          aria-current="true"
          @class([Route::is('dashboard')])aria-current="page" href="{{route('dashboard')}}">Appointments
        <i class="bi bi-clipboard2-pulse-fill"></i><span></span>
        </a>
        <a class="list-group-item" href="{{route('handleLogoutStaff')}}">
          <button type="button"  class="btn text-white btn-info btn-rounded">
         Log out
        </button>
        </a>

        @elseif (session('admin'))
        <a class="list-group-item py-2 ripple text-white"
         @class([Route::is('staffDashboard')])aria-current="page"
          href="{{route('staffDashboard')}}">staff
          <i class="bi bi-microsoft-teams"></i></i><span></span>
        </a>

        <a class="list-group-item py-2 ripple text-white"
        @class([Route::is('serviceDashboard')])aria-current="page" href="{{route('serviceDashboard')}}">services<i class="bi bi-capsule-pill"></i><span></span></a
        >

        <a class="list-group-item py-2 ripple text-white"
        @class([Route::is('doctorDashboard')])aria-current="page" href="{{route('doctorDashboard')}}">doctors<i class="bi bi-heart-pulse-fill"></i><span></span></a
        >
        <a class="list-group-item" href="{{route('handleLogoutAdmin')}}">
          <button type="button"  class="btn text-white btn-info btn-rounded">
         Log out
        </button>
      </a>
        @endif
      
      </div>
    </div>
  </nav>