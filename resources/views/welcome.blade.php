@extends('templates.main')

@section('content')

<body style="font-family: 'Merienda', cursive;">

  <div class="welcome" style="text-align: center;">
    <img src="{{asset('img/preview.jpg')}}" style="width: 300px; height: 300px; border-radius: 50%;" alt="">
    <h1 style="text-shadow: 2px 4px 4px rgba(46,91,173,0.6);">Welcome To our Clinic</h1>
    <p style="font-family: 'Cormorant Garamond', serif; font-size: 20px;">Services are available to you 24 hours</p>
   <a href="{{route('login')}}">
    <input type="submit" class="btn btn-primary" style="border-radius: 10px; font-family: 'Cormorant Garamond'" value="LOGIN"/>
    </a> 
    <a href="{{route('signup')}}">
    <input type="submit" class="btn btn-primary " style="border-radius: 10px;font-family: 'Cormorant Garamond'" value="SIGNUP"/>
    </a>
  </div>

  @endsection