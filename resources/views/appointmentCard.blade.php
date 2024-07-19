@extends('templates.main')

@section('content')


<body style="font-family: 'Merienda', cursive;">


  @include('subViews.nav')

  @if ($appointment)
  <div class="container" style="padding: 100px 0px">
    @foreach ($appointment as $appointment )
  <div class="card text-center">
    <div class="card-header">
      Patient Appointment
    </div>
    <div class="card-body">
      <h5 class="card-title"> {{ $appointment->fname }}</h5>
      <p class="card-text">Your Date: {{ $appointment->date }}</p>
      <p class="card-text"> Your Time: {{ $appointment->time }}</p>
      <p class="card-text">Doctor :{{ $appointment->doctor_name }}</p>
    </div>
    <div class="card-footer text-muted">
        <form method="post" action="{{route('cancel_appointment',['id'=>$appointment->id])}}">
            @csrf
            <input type="submit" class="btn btn-danger" value="Cancel">
          </form>
    </div>

  </div>
  @endforeach
</div>
@else
<div class="container" style="padding:100px 50px;text-align: center">
    <h1>there are no appointments</h1>
     <p>if you want to reserve new appointment</p>
   <a href="{{route('Doctors')}}"><button class="btn bg-info text-white">click here</button></a>
</div>
@endif
  @include('subViews.footer')
  @endsection