@extends('templates.main')

@section('content')
<body>
    <!--Main Navigation-->
    @include('subViews.sidebar')
<header>
   

    <div class="container"style="margin-left: 200px">
      <button type="button" id="btt" class="btn btn-info" style="margin-left: 0px"> <a class="text-white"
        aria-current="page" href="{{route('Add_service')}}">ADD Service+ </a
        > </button>

        <!-- ---------------------------------Start search services-------------------------------------- -->
        
    <form action="{{route('Search_service')}}" method="get">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      @csrf
     

      <!-- service name -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif; ">
        <input type="text" id="form6Example3" name="service_name" value="{{request('service_name')}}" class="form-control" />
        <label class="form-label" for="form6Example3">Service name</label>
      </div>

     
      <!-- Service code -->
      <div class="form-outline mb-2" style="font-family: 'Cormorant Garamond', serif;">
        <input type="text" id="form6Example4" name="service_code" value="{{request('service_code')}}" class="form-control" />
        <label class="form-label" for="form6Example4">Service code</label>
      </div>

      <!-- Submit button -->
      <input type="submit" class="btn btn-primary btn-block mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px;" name="add_service" value="Search">
    </form>
    <a href="{{route('serviceDashboard')}}" class="btn btn-primary btn mb-4" style="font-family: 'Cormorant Garamond'; font-size: 15px; float:right; color:white;">clear Search</a>

        <!-- ---------------------------------end search services---------------------------------------- -->

    <table class="table"style="margin-left: 0px">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Service Name</th>
          <th scope="col">Service Code</th>
          <th scope="col">Service Type</th>
          <th scope="col">cost</th>
          <th scope="col">additional info</th>
          <th scope="col">update</th>
          <th scope="col">delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($services as $services)
        <tr>
        <td>{{ $services->id }}</td>
         <td>{{ $services->service_name }}</td>
         <td>{{ $services->service_code }}</td>
         <td>{{ $services->service_type }}</td>
         <td>{{ $services->cost }}</td>
         <td>{{ $services->additional_info }}</td>
         <td><a class="text-white"
          @class([Route::is('Update_Service')])aria-current="page" href="{{route('Update_Service',['id'=>$services->id])}}"><i class="fas fa-pen-to-square text-info"></i></a
          ></td>
         <td>  
          <form method="post" action="{{route('Delete_Service',['id'=>$services->id])}}">
          @csrf
          <input type="submit" class="btn btn-danger" value="delete">
        </form></td>
         </tr>
       @endforeach
  
     
      </tbody>
    </table>
  </div>
   
  </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="margin-top: 58px;">
    <div class="container pt-4"></div>
  </main>
  <!--Main layout-->


    <!-- MDB -->
    <script src="{{asset('js/index.js')}}"></script>

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
@endsection