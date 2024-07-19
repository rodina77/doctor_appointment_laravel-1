@extends('templates.main')

@section('content')
<body>
    @include('subViews.sidebar')
    <!--Main Navigation-->
<header>

    <div class="container">
    <button type="button" id="btt" class="btn btn-info"> <a class="text-white"
        @class([Route::is('addStaff')])aria-current="page" href="{{route('addStaff')}}">ADD Staff+ </a
        > </button>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">address</th>
          <th scope="col">national id</th>
          <th scope="col">email</th>
          <th scope="col">phone</th>
          <th scope="col">shift_time</th>
          <th scope="col">salary</th>
          <th scope="col">staff_type</th>
          <th scope="col">info</th>
          <th scope="col">update</th>
          <th scope="col">delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($staff as $staff)
        <tr>
        <td>{{ $staff->id }}</td>
         <td>{{ $staff->fname }}</td>
         <td>{{ $staff->lname }}</td>
         <td>{{ $staff->address }}</td>
         <td>{{ $staff->national_id }}</td>
         <td>{{ $staff->email }}</td>
         <td>{{ $staff->phone }}</td>
         <td>{{ $staff->shift_time }}</td>
         <td>{{ $staff->sallary }}</td>
         <td>{{ $staff->staff_type }}</td>
         <td>{{ $staff->additional_info }}</td>
         <td><a class="text-white"
          @class([Route::is('UpdateStaff')])aria-current="page" href="{{route('UpdateStaff',['id'=>$staff->id])}}"><i class="fas fa-pen-to-square text-info"></i></a
          ></td>
         <td> 
          <form method="post" action="{{route('Delete_Staff',['id'=>$staff->id])}}">
          @csrf
          <input type="submit" class="btn btn-danger" value="delete">
        </form> </td>
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