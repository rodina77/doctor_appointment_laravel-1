@extends('templates.main')
@section('content')
<body>
@include('subViews.nav')
  <!----------Header---------->

  <header>
    <div class="bg-image" style=" background-image: url({{asset('img/home.jpg')}}); height: 100vh; background-attachment: fixed;">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="content1">
          <h1 class="text-white mb-0" style="font-family: 'Merienda',cursive;">
            Medical Clinic</h1>
          <p style="font-family: 'Cormorant Garamond', serif; ">clinic which both provides treatment for patients</p>
          <p style="font-family: 'Cormorant Garamond', serif; ">you will receive services from a specialized team of highly trained physicians</p>
          <div class="flex" style="display: flex;">
            <a href="https://usecheck.com/" class="btn-shine" target="_blank">learn more</a>
            <a class="a1" href="#about"><i class="fas fa-arrow-down"></i></a>
          </div>
        </div>

      </div>
    </div>
  </header>


  <!----------About---------->

  <section class="about_section" id="about">
    <h2 style="text-align: center; padding: 70px 0px 50px 0px; font:black bold ;  font-family: 'Merienda',cursive;">
      About us</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p style="padding-top: 30px; font-family: 'Cormorant Garamond', serif; font-size: 18px;">Medical Clinics provides concise and comprehensive coverage of the issues
            physicians and patient face every day, with contributions from leading experts in medicne. Topics include
            endocrinology, cardiology, infectious disease, nephrology, pulmonology, and gastroenterology. In addition,
            you can also do all what you need from our website or application.are a world-class healthcare provider in
            Egypt, offering high-quality medical services alongside a unique client journey. The goal is simple - to
            revolutionize the healthcare industry through a seamless client experience, whether it be in physical
            branches or throughout their digital channels.

            With a modernized approach towards healthcare and in response to the growing client need to access
            healthcare 24/7 in our fast-paced world, OneHealth medical centers offer physical and virtual consultations
            with more than 30 specialties and sub-specialties to clients.
          </p>
        </div>
        <div class="col-lg-6">
          <img src="{{asset('img/about.png')}}" style="width: 100%;height: 100%;" alt="">

        </div>
      </div>
    </div>

  </section>


  <!----------Team---------->

  <section class="Team" id="team" style="font-family: 'Merienda',cursive;">

    <div class="text-center p-4"
      style=" color: rgb(69, 68, 68); font: 40px italic; border-radius: 50px; margin-bottom: 10px;  font-family: 'Merienda',cursive;">
      Our Team
    </div>

    <div class="container" style="margin-bottom:30px ;">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card shadow" style="width: 100%; margin-left: 15%; ">
            <img src="{{asset('img/hamza.jpeg')}}"
              style="width: 50%; height: 100%; border-radius: 50%; margin: auto; padding-bottom: 7%;"
              class="card-img-top" alt="Fissure in Sandstone" />
            <div class="card-body text-center">
              <h5 class="card-title">Mohamed Hamza</h5>
            </div>

          </div>

        </div>

        <div class="col-lg-4">
          <div class="card shadow" style="width: 100%; margin-left: 15%;">
            <img src="{{asset('img/essraa.jpeg')}}" style="width: 50%; height: 50%; border-radius: 50%; margin: auto;"
              class="card-img-top" alt="Fissure in Sandstone" />
            <div class="card-body text-center">
              <h5 class="card-title">Esraa Mohamed</h5>
            </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="card shadow" style="width: 100%; margin-left: 15%; ">
            <img src="{{asset('img/aya.jpg')}}" style="width: 48%; height: 48%; border-radius: 50%; margin: auto;"
              class="card-img-top" alt="Fissure in Sandstone" style="height: 400px;" />
            <div class="card-body text-center">
              <h5 class="card-title">Aya Ayman</h5>
            </div>

          </div>
        </div>

      </div>
    </div>


    <div class="container" style="margin-bottom:30px">
      <div class="row justify-content-center">


        <div class="col-lg-4">
          <div class="card shadow" style="width: 100%; margin-left: 15%;">
            <img src="{{asset('img/rodina.jpeg')}}" style="width: 50%; height: 50%; border-radius: 50%; margin: auto;"
              class="card-img-top" alt="Fissure in Sandstone" style="height: 400px;" />
            <div class="card-body text-center">
              <h5 class="card-title">Rodina Ibrahim</h5>
            </div>

          </div>
        </div>
        <div class="col-lg-4">
          <div class="card shadow" style="width: 100%; margin-left: 15%;">
            <img src="{{asset('img/mariam.jpg')}}"
              style="width: 50%; height: 100%; border-radius: 50%; margin: auto; padding-bottom: 7%;"
              class="card-img-top" alt="Fissure in Sandstone" style="height: 400px;" />
            <div class="card-body text-center">
              <h5 class="card-title">Mariam Hesham</h5>
            </div>


          </div>

        </div>


        <div class="col-lg-4">
          <div class="card shadow" style="width: 100%; margin-left: 15%;">
            <img src="{{asset('img/dina.jpg')}}"
              style="width: 50%; height: 70%; border-radius: 50%; margin: auto; padding-bottom: 5%;"
              class="card-img-top" alt="Fissure in Sandstone" style="height: 400px;" />
            <div class="card-body text-center">
              <h5 class="card-title">Dina Ahmed</h5>
            </div>

          </div>
        </div>



      </div>
    </div>
  </section>
  @include('subViews.footer')
  @endsection

