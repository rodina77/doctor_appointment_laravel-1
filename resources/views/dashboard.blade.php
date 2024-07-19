@extends('templates.main')

@section('content')
<body>
    <!--Main Navigation-->
    @include('subViews.sidebar')
<header>
   

    <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">phone</th>
          <th scope="col">national id</th>
          <th scope="col">address</th>
          <th scope="col">time</th>
          <th scope="col">date</th>
          <th scope="col">doctor_name</th>
          <th scope="col">code</th>
          <th scope="col">delete</th>
        </tr>
      </thead>
      <tbody>
         @foreach ($patients as $patient)
        <tr>
        <td>{{ $patient->id }}</td>
         <td>{{ $patient->fname }}</td>
         <td>{{ $patient->lname }}</td>
         <td>{{ $patient->phone }}</td>
         <td>{{ $patient->national_id }}</td>
         <td>{{ $patient->address }}</td>
         <td>{{ $patient->time }}</td>
         <td>{{ $patient->date }}</td>
         <td>{{ $patient->doctor_name }}</td>
         <td>{{ $patient->code }}</td>
         <td>   
          <form method="post" action="{{route('delete_appointment',['id'=>$patient->id])}}">
          @csrf
          <input type="submit" class="btn btn-danger" value="Delete">
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