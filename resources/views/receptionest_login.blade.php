@extends('templates.main')

@section('content')

<body style="font-family: 'Merienda', cursive;">
  <!-- Section: Design Block -->
  <section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }

      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
                background: hsla(0, 0%, 100%, 0.55);
                backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);">Receptionest Login</h2>
              <form method="post" action="{{route('handleLoginStaff')}}">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->

                <!-- Email input -->
                <div class="form-outline mb-4" style="font-family: 'Cormorant Garamond', serif; ">
                  <input type="email" id="form3Example3" class="form-control" name="email" value="{{old('email')}}"/>
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4" style="font-family: 'Cormorant Garamond', serif; ">
                  <input type="password" id="form3Example4" class="form-control" name="password"/>
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
                @if(session('error')) 
                <span class="error">{{ session('error') }}</span> <br>
                @endif
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'">
                  Login
                </button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="{{asset('img/surgery.jpeg')}}" class="w-100 rounded-4 shadow-4"
            style="height: 500px" alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  @endsection