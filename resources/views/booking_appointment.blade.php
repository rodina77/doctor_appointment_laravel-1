@extends('templates.main')

@section('content')


<body>


  @include('subViews.nav')
  <!-- Section: Design Block -->
  <section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 300px;
          "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive;">Booking Appointment</h2>
            
            <form method="post" action="{{route('handleappointment')}}">
              <!-- 2 column grid layout with text inputs for the first and last names -->
                @csrf
              <!-- patient first name -->
              <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
                <input type="text" id="form3Example1" class="form-control" name="fname" value="{{session('patient')->fname}}" />
                <label class="form-label" for="form3Example1">Patient first name</label>
              </div>

              <!-- last name -->
              <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
                <input type="text" id="form3Example2" class="form-control" name="lname" value="{{session('patient')->lname}}"/>
                <label class="form-label" for="form3Example2">Last name</label>
              </div>

              <!-- national id  -->
              <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
                <input type="text" id="form3Example3" class="form-control" name="national_id" value="{{session('patient')->national_id}}" />
                <label class="form-label" for="form3Example3">patient_national_id</label>
              </div>

                   <!-- code  -->
                   <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
                    <input type="text" id="form3Example4" class="form-control" name="doctor_name" value="{{$doctor->fname}}" />
                    <label class="form-label" for="form3Example4">Doctor name</label>
                  </div>

              <!-- code  -->
              <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
                <input type="number" id="form3Example9" class="form-control" name="code" value="{{$doctor->code}}" />
                <label class="form-label" for="form3Example9">Doctor code</label>
              </div>

              <!-- address  -->
              <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
                <div class="form-outline" >
                <input type="text" id="form3Example5" class="form-control" name="address" value="{{old('address')}}" />
                <label class="form-label" for="form3Example5">Address</label>
              </div>
              
                @error('address')
                <div class="text-danger">{{ $message }}</div>
              @enderror 
            </div>

              <!-- phone  -->
              <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
                <div class="form-outline" >
                <input type="text" id="form3Example6" class="form-control" name="phone" value="{{session('patient')->phone}}" />
                <label class="form-label" for="form3Example6">Phone</label>
              </div>
            </div>

              <!-- Date  -->
              <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
                <div class="form-outline" >
                <input type="date" id="form3Example7" class="form-control" name="date" value="{{old('date')}}" />
                <label class="form-label" for="form3Example7">Date</label>
              </div>
              @error('date')
              <div class="text-danger">{{ $message }}</div>
            @enderror 
          </div>
        
              <!-- Time  -->
              <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
                <div class="form-outline" >
                <input type="time" id="form3Example8" class="form-control" name="time" value="{{old('time')}}" />
              </div>
              @error('time')
              <div class="text-danger">{{ $message }}</div>
            @enderror 
          </div>
        


              <!-- Submit button -->
              <button type="submit" class="btn btn-primary mb-4" style="width: 200px; font-family: 'Cormorant Garamond'">
                book
              </button>


            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

  @include('subViews.footer')
  @endsection