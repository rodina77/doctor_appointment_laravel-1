@extends('templates.main')
@section('content')

  <body>
    @include('subViews.nav')
     <!-- Services Start -->
     <div class="container-fluid py-5" id="services" style="margin-bottom: 70px;">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-uppercase border-bottom border-5  mb-3"style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive; color:#0b616c;font-size:28px;">Services</h5>
                <h1 class="display-4 mb-5"style="font-family: 'Cormorant Garamond';font-size:25px;">Our Excellent Medical Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive; font-size:22px;">Blood Testing</h4>
                        <p class="m-0"style="font-family: 'Cormorant Garamond';font-size:18px;line-height:20px;">A full blood count (FBC) is a common blood test that can provide information about a range of conditions. A full blood count looks at the different cells in your blood.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                          <i class="fa-solid fa-arrow-right"></i>                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-procedures text-white"></i>
                        </div>
                        <h4 class="mb-3"style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive; font-size:22px;">Operation & Surgery</h4>
                        <p class="m-0"style="font-family: 'Cormorant Garamond';font-size:18px;line-height:20px;">surgery is a medical procedure which involves major incision and medical to cure the diseases or to replace any organ.Common Surgical opertions Appendectomy..etc</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                          <i class="fa-solid fa-arrow-right"></i>                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-stethoscope text-white"></i>
                        </div>
                        <h4 class="mb-3"style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive; font-size:22px;">Outdoor Checkup</h4>
                        <p class="m-0"style="font-family: 'Cormorant Garamond';font-size:18px;line-height:20px;">Our Outdoor Checkup services provide comprehensive healthcare solutions right at your doorstep. With a patient-centric approach, we bring quality healthcare services to you.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                          <i class="fa-solid fa-arrow-right"></i>                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    <!-- start pricing -->
    <div class="text-center mx-auto mb-5" style="max-width: 500px;" id="price">
        <h5 class="d-inline-block text-uppercase border-bottom border-5 "style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);font-family: 'Merienda', cursive; color:#0b616c;font-size:28px;">Price</h5>
        <h1 class="display-4"style="font-family: 'Cormorant Garamond';font-size:25px;">Medical Services prices</h1>
    </div>



    <div class="container">
        <!-- ---------------------------------Start search services-------------------------------------- -->
        
    <form action="{{route('Search_service_for_patient')}}" method="get">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      @csrf
     

      <!-- service name -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <input type="text" id="form6Example3" name="service_name" value="{{request('service_name')}}" class="form-control" />
        <label class="form-label" for="form6Example3">Service name</label>
      </div>


      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="add_service" value="Search">
    </form>
    <a href="{{route('services')}}" class="btn btn-primary btn mb-5" style="font-family: 'Cormorant Garamond'; font-size: 15px; float:right; color:white;">clear Search</a>

        <!-- ---------------------------------end search services---------------------------------------- -->
    </div>

    <div class="container" style="margin-top: 100px">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($services as $service)
        <div class="col col-lg-4 col-md-6">
          <div class="card pos" style="height: 750px">
            <img src="{{asset('img/services/'. $service->image )}}" class="card-img-top" alt="...">
            <div class="product-overlay">
             
            </div> <!-- product-overlay -->
            <div class="card-body">
              <h3 class="card-title text-center"style="font-family: 'Cormorant Garamond', serif;">{{ $service->service_name }}</h3>
              <h5 class="text-center" style="font-family: 'Cormorant Garamond', serif;">Service type: {{ $service->service_type }}</h5>
              <p class="m text-center" style="font-size: 18px;font-family: 'Cormorant Garamond', serif;">Service code: {{ $service->service_code }}</p>
              <p class="n text-center" style="font-size: 18px;font-family: 'Cormorant Garamond', serif;">Service cost: {{ $service->cost }}</p>
              <h6 class="text-center" style="font-size: 18px;font-family: 'Cormorant Garamond', serif;">Additional information: {{ $service->additional_info }}</h6>
              
            </div>
            </div>
        </div>
        @endforeach
      </div>
  </div>

      <!-- ---------------- pricing section ends--------------------->
      @include('subViews.footer')
      @endsection
