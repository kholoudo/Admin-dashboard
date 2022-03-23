@extends('layouts.app')

@section('content')


<div Class="home">
    <div class="IntroSection"></div>

    <div class="introElements">
    <p>Looking for a certain service to be done perfectly by a high-qualified team?  <br></br>Do You need some where to search in? Our website is a perfect choice for you.</p>


   <a href="{{ url('/services') }}"> <button class="homeBtn">Explore</button></a>





        </div>
        <br>
        <br>
        <br>
        <br>
        <h4 class="about-head" style="text-align:center;font-weight:bold;color:#276FB4;">About Service Way</h4>
        <br>

        <div Class="landingpage-about">

            <div Class="landingpage-about-img">
              <img src={{ asset('img/about.jpg')}} alt="service" />
            </div>
            <div Class="landingpage-about-text">
              <h5>Who We Are</h5>
              <p>
              We are an online platform that is specialized in providing different types of most needed services in our daily life.Through Serviceway you can choose the service you are looking for and book it at a certain date and time taking in consideration your convenienty and vailability.
              </p>
              <h5>Our Vision</h5>
              <p>
              We are an online platform that is specialized in providing different types of most needed services in our daily life.Through Serviceway you can choose the service you are looking for and book it at a certain date and time taking in consideration your convenienty and vailability.
              </p>
            </div>
          </div>








    <div Class="landingpage-explore">
            <h4>Upcoming Events</h4>
            <div Class="landingpage-explore-service">
                <div class="event-card-body">
                    <img class='event-card-img-top' src={{ asset('img/education.jpeg')}}>
                    <h5>Educational Events</h5>
                    <p class="card-text">lorem Ipsum dolor si met</p>
                    <a href="{{ url('/services') }}">  <button type="submit" class="btn btn-primary" style="background-color:#276FB4;margin-bottom:0.5em;">All Services</button></a>
                </div>
                <div class="event-card-body">
                    <img class='event-card-img-top' src={{ asset('img/communitywork.jpeg')}}>
                    <h5>Community Events</h5>
                    <p class="card-text">lorem Ipsum dolor si met</p>
                    <a href="{{ url('/services') }}"><button type="submit" class="btn btn-primary" style="background-color:#276FB4;margin-bottom:0.5em;">All Services</button></a>
                </div>
                <div class="event-card-body">
                    <img class='event-card-img-top' src={{ asset('img/kidsactivities.jpeg')}}>
                    <h5>Kids Events</h5>
                    <p class="card-text">lorem Ipsunm dolor si met</p>
                    <a href="{{ url('/services') }}"> <button type="submit" class="btn btn-primary" style="background-color:#276FB4;margin-bottom:0.5em;">All Services</button></a>
                </div>

            </div>
          </div>


          <div class="container mt-5 mb-5">
              <h5 class="testi-head">Testimonilas</h5>
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="img/mahdi.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Mahdi</h5> <span>Software Developer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="img/osama.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Osama</h5> <span>Web Developer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="img/Haneen.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Haneen</h5> <span>Software Architect</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
            </div>
        </div>



          </div>













     </div>











@endsection
