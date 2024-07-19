@extends('templates.main')
@section('content')

  <body>
    @include('subViews.nav')
    
     <!-- Start our team -->
     <div class="text-center mx-auto mb-5 " style="max-width: 500px; margin-top: 100px;" id="staff">
      <h2 class="d-inline-block text-uppercase border-bottom border-5 mb-3 qualified "style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive;">Our Qualified Doctors</h2>
      <h5 class="d-inline-block" style="font-family: 'Cormorant Garamond';font-size:25px;">Best Care & Better Doctors &hearts;</h5>
  </div>

  <!----------------------------------------------- Start Search form ------------------------------------------------------>
  <div class="container">

  <form method="get" action="{{route('Search_doctor_forPatient')}}">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    @csrf
    <div class="row mb-2" style="font-family: 'Cormorant Garamond', serif; ">
      <div class="col">
        <div class="form-outline">

          <!-- first name -->
          <input type="text" id="form6Example1" name="fname" value="{{request('fname')}}" class="form-control" />
          <label class="form-label" for="form6Example1">First name</label>
        </div>
       
      </div>

    </div>

 <!-- Specialty -->
   <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
    <input type="text" id="form6Example8" name="specialty" value="{{request('specialty')}}" class="form-control" />
    <label class="form-label" for="form6Example8">Specialty</label>
   
  </div>

   

    <!-- Submit button -->
    <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="search_doctor" value="search">
  </form>
  <a href="{{route('Doctors')}}" class="btn btn-primary btn mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px; float:right; color:white;">clear Search</a>
</div>
  <!------------------------------------------------------------- end search form--------------------------------------------------- -->


  <div class="container" style="margin-top: 100px">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      @foreach ($doctors as $doctor)
      <div class="col col-lg-4 col-md-6">
        <div class="card pos">
          <img src="{{asset('img/doctors/'.$doctor->image)}}" class="card-img-top" alt="...">
          <div class="product-overlay">
          </div> <!-- product-overlay -->
          <div class="card-body" style="text-align:center; height:400px">
            <h3 class="card-title text-center"style="font-family: 'Cormorant Garamond', serif;">Dr. {{$doctor->fname}} {{$doctor->lname}}</h3>
            <h5 class="text-center" style="font-family: 'Cormorant Garamond', serif;"> {{$doctor->specialty}}</h5>
            <p class="m text-center" style="font-size: 18px;font-family: 'Cormorant Garamond', serif;">{{$doctor->shift_time}}</p>
            <p class="n text-center" style="font-size: 18px;font-family: 'Cormorant Garamond', serif;">{{ $doctor->phone }}</p>
            <h6 class="text-center" style="font-family: 'Cormorant Garamond', serif;"> {{ $doctor->additional_info }}</h6>
            <a href="{{route('booking',['id'=>$doctor->id])}}" class="btn btn-primary"  >Booking Appointment</a>
            
            
          </div>
          </div>
      </div>
      @endforeach
    </div>
</div>

@include('subViews.footer')
@endsection
