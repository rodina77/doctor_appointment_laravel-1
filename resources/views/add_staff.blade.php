@extends('templates.main')

@section('content')

<body>
  <div class="container">
    <h1 class="text-center form mb-5" style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6); font-family: 'Merienda', cursive;">Add Staff</h1>

    <!-- form -->
    <form action="{{route('Handle_addStaff')}}" method="post">

     
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <div class="col">
          <div class="form-outline">
            @csrf
 

            <!-- first name -->
            <input type="text" id="form6Example1" name="fname" value="{{ old('fname') }}" class="form-control" />
            <label class="form-label" for="form6Example1">First name</label>
          </div>
         
        </div>
        @error('fname')
        <div class="text-danger">{{ $message }}</div>
      @enderror


        <!-- last name -->
        <div class="col">
          <div class="form-outline">
            <input type="text" id="form6Example2" name="lname" value="{{ old('lname') }}" class="form-control" />
            <label class="form-label" for="form6Example2">Last name</label>
          </div>
        </div>
        @error('lname')
        <div class="text-danger">{{ $message }}</div>
      @enderror
      </div>

      <!-- address -->
      <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
        <div class="form-outline" >
        <input type="text" id="form6Example3" name="address" value="{{ old('address') }}" class="form-control" />
        <label class="form-label" for="form6Example3">Address</label>
      </div>
      @error('address')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

      <!-- national id -->
      <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
        <div class="form-outline" >
        <input type="text" id="form6Example4" name="national_id" value="{{ old('national_id') }}" class="form-control" />
        <label class="form-label" for="form6Example4">National id </label>
      </div>
      @error('national_id')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

      <!-- Email  -->
      <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
        <div class="form-outline" >
        <input type="email" id="form6Example5" name="email" value="{{ old('email') }}" class="form-control" />
        <label class="form-label" for="form6Example5">Email</label>
      </div>
      @error('email')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>


      <!-- Number -->
      <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
        <div class="form-outline" >
        <input type="text" id="form6Example6" name="phone" value="{{ old('phone') }}" class="form-control" />
        <label class="form-label" for="form6Example6">Phone</label>
      </div>
      @error('phone')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

      <!-- code  -->
      <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
        <div class="form-outline" >
        <input type="password" id="form6Example7" name="password" value="{{ old('password') }}" class="form-control" />
        <label class="form-label" for="form6Example7">Password</label>
      </div>
      @error('passsword')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

      <!-- shift time -->
      <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
        <div class="form-outline" >
        <input type="text" id="form6Example8" name="shift_time" value="{{ old('shift_time') }}" class="form-control" />
        <label class="form-label" for="form6Example8">shift time</label>
      </div>
      @error('shift_time')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>


      <!-- salary -->
      <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
        <div class="form-outline" >
        <input type="text" id="form6Example9" name="sallary" value="{{ old('sallary') }}" class="form-control" />
        <label class="form-label" for="form6Example9">Salary</label>
      </div>
      @error('sallary')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

     <!-- staff type -->
  <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
      <select name="staff_type" id="form3Example3" class="form-control">
        <option value="{{ old('staff_type') }}" selected disabled >select staff category</option>
        <option value="receptionest" {{ old('staff_type') == 'receptionest' ? 'selected' : '' }}>Receptionest</option>
        <option value="nurse" {{ old('staff_type') == 'nurse' ? 'selected' : '' }}>Nurse</option>
    </select>
    @error('staff_type')
    <div class="text-danger">{{ $message }}</div>
  @enderror
</div>

     <!-- Additional information  -->
     <div style="font-family: 'Cormorant Garamond', serif;" class=" mb-2">
      <div class="form-outline" >
        <textarea class="form-control" id="form6Example10" type="text" name="additional_info" value="{{ old('additional_info') }}" rows="4"></textarea>
        <label class="form-label" for="form6Example10">Additional information</label>
      </div>
      @error('additional_info')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="add_staff" value="ADD">
      
   
    </form>
  </div>

  @endsection