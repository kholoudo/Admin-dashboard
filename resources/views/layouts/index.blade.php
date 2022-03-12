@extends('layouts.app')

@section('content')


<div Class="home">
    <div class="IntroSection"></div>

    <div class="introElements">
    <p>“The best way to find yourself is to lose yourself in the service of others.” — Mahatma Gandhi<br></br><br></br>Do You need some where to start from, here is a perfect choice for you.</p>


    <button class="homeBtn">Join Us<Link to='/login'></button>





        </div>

    <div Class="landingpage-explore">
            <h4>Upcoming Events</h4>
            <div Class="landingpage-explore-service">
                <div class="event-card-body">
                    <img class='event-card-img-top' src={{ asset('img/education.jpeg')}}>
                    <h5>Educational Events</h5>
                    <p class="card-text">lorem Ipsum dolor si met</p>
                    <button type="submit" class="btn btn-primary" style="background-color:#276FB4;margin-bottom:0.5em;">All Services</button>
                </div>
                <div class="event-card-body">
                    <img class='event-card-img-top' src={{ asset('img/communitywork.jpeg')}}>
                    <h5>Community Events</h5>
                    <p class="card-text">lorem Ipsum dolor si met</p>
                    <button type="submit" class="btn btn-primary" style="background-color:#276FB4;margin-bottom:0.5em;">All Services</button>
                </div>
                <div class="event-card-body">
                    <img class='event-card-img-top' src={{ asset('img/kidsactivities.jpeg')}}>
                    <h5>Kids Events</h5>
                    <p class="card-text">lorem Ipsunm dolor si met</p>
                    <button type="submit" class="btn btn-primary" style="background-color:#276FB4;margin-bottom:0.5em;">All Services</button>
                </div>

            </div>
          </div>

{{-- carousel --}}

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="heading-section mb-5">Carousel #03</h2>
            </div>
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(images/work-1.jpg);">
                                <div class="text w-100">
                                    <span class="cat">Web Design</span>
                                    <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(images/work-2.jpg);">
                                <div class="text w-100">
                                    <span class="cat">Web Design</span>
                                    <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(images/work-3.jpg);">
                                <div class="text w-100">
                                    <span class="cat">Web Design</span>
                                    <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(images/work-4.jpg);">
                                <div class="text w-100">
                                    <span class="cat">Web Design</span>
                                    <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="work">
                            <div class="img d-flex align-items-end justify-content-center" style="background-image: url(images/work-5.jpg);">
                                <div class="text w-100">
                                    <span class="cat">Web Design</span>
                                    <h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- endcarousel --}}

























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
