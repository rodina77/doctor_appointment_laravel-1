@extends('templates.main')

@section('content')
<body style="font-family: 'Merienda', cursive;">

  <div class="container">
    <h1 class="text-center form mb-5" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);">Update Doctor</h1>

    <!-- form -->
    <form method="post" action="{{route('Handle_Update_Doctor',['id'=>$doctor->id])}}" enctype="multipart/form-data" >
      <!-- 2 column grid layout with text inputs for the first and last names -->
      @csrf
      <div class="row mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <div class="col">
          <div class="form-outline">

            <!-- first name -->
            <input type="text" id="form6Example1" name="fname" value="{{$doctor->fname}}" class="form-control" />
            <label class="form-label" for="form6Example1">First name</label>
          </div>
         
        </div>


        <!-- last name -->
        <div class="col">
          <div class="form-outline">
            <input type="text" id="form6Example2" name="lname"  value="{{$doctor->lname}}"  class="form-control" />
            <label class="form-label" for="form6Example2">Last name</label>
          </div>
        
        </div>

      </div>

      <!-- address -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <input type="text" id="form6Example3" name="address" value="{{$doctor->address}}" class="form-control" />
        <label class="form-label" for="form6Example3">Address</label>
       
      </div>
     

      <!-- national id -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example4" name="national_id" value="{{$doctor->national_id}}" class="form-control" />
        <label class="form-label" for="form6Example4">National id </label>
       
      </div>
     

      <!-- Email  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="email" id="form6Example5" name="email"  value="{{$doctor->email}}" class="form-control" />
        <label class="form-label" for="form6Example5">Email</label>
       
      </div>
    


      <!-- Number -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example6" name="phone" value="{{$doctor->phone}}" class="form-control" />
        <label class="form-label" for="form6Example6">Phone</label>
      
      </div>
     

      <!-- code  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="number" id="form6Example7" name="code" value="{{$doctor->code}}" class="form-control" />
        <label class="form-label" for="form6Example7">code</label>
       
      </div>

       <!-- Specialty -->
     <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
      <input type="text" id="form6Example8" name="specialty" value="{{$doctor->specialty}}" class="form-control" />
      <label class="form-label" for="form6Example8">Specialty</label>
     
    </div>
     

      <!-- shift time -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example8" name="shift_time" value="{{$doctor->shift_time}}" class="form-control" />
        <label class="form-label" for="form6Example8">shift time</label>
       
      </div>
      

      <!-- salary -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example9" name="sallary" value="{{$doctor->sallary}}" class="form-control" />
        <label class="form-label" for="form6Example9">Salary</label>
       
      </div>

       <!-- Image -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
    
        <input type="file" id="form6Example8" name="image" value="{{$doctor->image}}"  class="form-control" />
        <label class="form-label" for="form6Example8">Image</label>
     
      </div>
      

      <!-- Additional information  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <textarea class="form-control" id="form6Example10" name="additional_info" value="{{$doctor->additional_info}}" rows="4"></textarea>
        <label class="form-label" for="form6Example10">Additional information</label>
      
      </div>
      

 
      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="update_doctor" value="Update"></input>
    </form>
  </div>
  
  @endsection