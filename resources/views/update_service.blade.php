@extends('templates.main')

@section('content')
<body style="font-family: 'Merienda', cursive;">
  <div class="container">
    <h1 class="text-center form mb-5" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);">Update Service</h1>

    <!-- form -->
    <form action="{{route('Handle_Update_Service',['id'=>$service->id])}}" method="post" enctype="multipart/form-data">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      @csrf
     

      <!-- service name -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <input type="text" id="form6Example3" name="service_name" value="{{$service->service_name}}" class="form-control" />
        <label class="form-label" for="form6Example3">Service name</label>
      </div>


      <!-- Service code -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example4" name="service_code" value="{{$service->service_code}}" class="form-control" />
        <label class="form-label" for="form6Example4">Service code</label>
      </div>

      

      <!-- surgery type  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example5" name="service_type" value="{{$service->service_type}}" class="form-control" />
        <label class="form-label" for="form6Example5">Surgery type</label>
      </div>



      <!-- cost -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example6" name="cost" value="{{$service->cost}}" class="form-control" />
        <label class="form-label" for="form6Example6">Cost</label>
      </div>

    
       <!-- Image -->
       <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
    
        <input type="file" id="form6Example8" name="image" value="{{$service->image}}"  class="form-control" />
        <label class="form-label" for="form6Example8">Image</label>
     
      </div>
      
        


      <!-- Additional information  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <textarea class="form-control" id="form6Example10" type="text" name="additional_info" value="{{$service->additional_info}}" rows="4"></textarea>
        <label class="form-label" for="form6Example10">Additional information</label>
      </div>



      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="update_service" value="Update"></input>
    </form>
  </div>

  @endsection