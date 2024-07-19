  <!----------Navbar---------->
  <nav class="navbar navbar-expand-lg py-3 navbar-light bg-light " id="home">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('img/logo.svg')}}" alt="logo" style="margin-left: 50px;">
        <h2 style="font-family: 'Merienda',cursive;">HealthCare</h2>
      </a>

      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse " style=" cursor: pointer; font-family: 'Cormorant Garamond', serif; font-size: 18px;"id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a  @class(['nav-link','active'=>Route::is('home')])aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link " href="{{route('home')}}#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}#team">Team</a>
          </li>
          <li class="nav-item">
            <a @class(['nav-link','active'=>Route::is('services')]) href="{{route('services')}}">Services</a>
          </li>
          <li class="nav-item">
            <a @class(['nav-link','active'=>Route::is('Doctors')])  href="{{route('Doctors')}}">Doctors</a>
          </li>
          <li class="nav-item">
            <a @class(['nav-link','active'=>Route::is('appointmentCard')])  href="{{route('appointmentCard')}}">Appointment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="right" style="font-family: 'Cormorant Garamond', serif; ">
      <div class="row" style="margin-right: 40px;">
        <div class="col-7" style="text-align: center;">
          <img src="{{asset('img/patients/'.session('patient')->image)}}" alt="photo" class="profile">
          <p class="user_name" style="padding: 0; margin:0">Hi {{session('patient')->fname}} {{session('patient')->lname}}</p>
        </div>
        <div class="col-5 last" style="display: flex; ">
          <a href="{{route('handleLogoutPatient')}}">
            <button type="button"  class="btn btn-info btn-rounded">
           Log out
          </button>
        </a>
        </div>

      </div>
    </div>
  </nav>