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
              <img id="image"src={{ asset('img/about.jpg')}} alt="service" />
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
                    <p class="card-text">Once they are launched, you will come across an event for every month that you can attend and benefit from in multiple ways.</p>
                    <a href="{{ url('/services') }}">  <button type="submit" class="btn btn-primary" style="background-color:#276FB4;margin-bottom:0.5em;">All Services</button></a>
                </div>
                <div class="event-card-body">
                    <img class='event-card-img-top' src={{ asset('img/communitywork.jpeg')}}>
                    <h5>Community Events</h5>
                    <p class="card-text">Event communities connect like-minded people, providing opportunities for moments of inspiration that encourage members to engage and commit.</p>
                    <a href="{{ url('/services') }}"><button type="submit" class="btn btn-primary" style="background-color:#276FB4;margin-bottom:0.5em;">All Services</button></a>
                </div>
                <div class="event-card-body">
                    <img class='event-card-img-top' src={{ asset('img/kidsactivities.jpeg')}}>
                    <h5>Kids Events</h5>
                    <p class="card-text">Spend quality time with your kids and family while trying some fresh and fun activities.Variety of fun and creative activities willbe waiting you.</p>
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
                            <p>“Excellent service! Great communication, accountable, keep their promise. Service way always finds good people who are trustworthy and dependable. I would recommend your service to anyone in need quality service.”</p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="img/osama.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Osama</h5> <span>Web Developer</span>
                            <p>“Communication between the office and us was very good. They kept us informed and up-dated. The maintenance worker did an excellent job on the repair work around our windows. We would have no hesitation in using their service again.”</p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="img/Haneen.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Haneen</h5> <span>Software Architect</span>
                            <p>“The babysitter was excellent. Very warm and set our hearts at ease<br> the minute she walked in the door.<br> She was very entertaining and had our little one in bed before we got home.”</p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
            </div>
        </div>



          </div>













     </div>











@endsection
