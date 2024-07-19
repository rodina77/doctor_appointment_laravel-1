@extends('templates.main')

@section('content')
<body style="font-family: 'Merienda', cursive;">

  <div class="container">
    <h1 class="text-center form mb-5" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);">Update Staff</h1>

    <!-- form -->
    <form method="post" action="{{route('HandleUpdateStaff',['id'=>$staff->id])}}" >
      <!-- 2 column grid layout with text inputs for the first and last names -->
      @csrf
      <div class="row mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <div class="col">
          <div class="form-outline">

            <!-- first name -->
            <input type="text" id="form6Example1" name="fname" value="{{$staff->fname}}" class="form-control" />
            <label class="form-label" for="form6Example1">First name</label>
          </div>
         
        </div>


        <!-- last name -->
        <div class="col">
          <div class="form-outline">
            <input type="text" id="form6Example2" name="lname"  value="{{$staff->lname}}"  class="form-control" />
            <label class="form-label" for="form6Example2">Last name</label>
          </div>
        
        </div>

      </div>

      <!-- address -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <input type="text" id="form6Example3" name="address" value="{{$staff->address}}" class="form-control" />
        <label class="form-label" for="form6Example3">Address</label>
       
      </div>
     

      <!-- national id -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example4" name="national_id" value="{{$staff->national_id}}" class="form-control" />
        <label class="form-label" for="form6Example4">National id </label>
       
      </div>
     

      <!-- Email  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="email" id="form6Example5" name="email"  value="{{$staff->email}}" class="form-control" />
        <label class="form-label" for="form6Example5">Email</label>
       
      </div>
    


      <!-- Number -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example6" name="phone" value="{{$staff->phone}}" class="form-control" />
        <label class="form-label" for="form6Example6">Phone</label>
      
      </div>
     

      <!-- password  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="password" id="form6Example7" name="password" value="{{$staff->password}}" class="form-control" />
        <label class="form-label" for="form6Example7">password</label>
       
      </div>

    

      <!-- shift time -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example8" name="shift_time" value="{{$staff->shift_time}}" class="form-control" />
        <label class="form-label" for="form6Example8">shift time</label>
       
      </div>
      

      <!-- salary -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example9" name="sallary" value="{{$staff->sallary}}" class="form-control" />
        <label class="form-label" for="form6Example9">Salary</label>
       
      </div>

      
      
      <!-- Additional information  -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <textarea class="form-control" id="form6Example10" name="additional_info" value="{{$staff->additional_info}}" rows="4"></textarea>
        <label class="form-label" for="form6Example10">Additional information</label>
      
      </div>
      

 
      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="update_staff" value="Update"></input>
    </form>
  </div>
  
  @endsection