@extends('layouts.app')
@section('content')
{{-- <div class="cards-container">
    <h4>Our Services</h4>
<div class="cards-list">

    <div class="service-card ">
        <div class="card_title title-white">
            <p class="service-title">Home Cleaning</p>
          </div>
      <div class="card_image">
        <a href="{{url('/homeclean')}}"> <img src="{{ asset('img/cleaning.jpg') }}"/></a>
        </div></div>


      <div class="service-card ">
        <div class="card_title title-white">
            <p>Car Wash</p>
          </div>
      <div class="card_image">
        <a href="{{url('/car')}}"><img src="{{ asset('img/carwash.png') }}" /></a>
        </div></div>


    <div class="service-card ">
        <div class="card_title">
            <p>Home Maintenance</p>
          </div>
        <div class="card_image">
            <a href="{{url('/maintenance')}}"> <img src="{{ asset('img/maintenance.jpg') }}" /></a>
        </div>
               </div>


    <div class="service-card ">
        <div class="card_title">
            <p>Baby Sitting</p>
          </div>
      <div class="card_image">
        <a href="{{url('/baby')}}"><img src="{{ asset('img/babysitting.jpg') }}" /></a>
      </div></div>

        <div class="service-card ">
            <div class="card_title title-black">
                <p>Private Lessons</p>
              </div>
            <div class="card_image">
                <a href="{{url('/lessons')}}"><img src="{{asset('img/private.jpg')}}" /></a>
              </div>

               </div>

</div>
</div> --}}

<div class="service">
    <div class="service_container">
        <div class="section-header">

            <h2 style="text-align:center;margin:0.5em;">Available Services</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <img style="width:100%;height:100%;"src="{{ asset('img/cleaning.jpg') }}" alt="Service">
                    <h3>Home Cleaning</h3>
                    <p>
                        Life is too short to clean your own home! Our team at The Service waya is here for you.
                    </p>
                    <a class="btn" href="{{url('/homeclean')}}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <img src="{{ asset('img/carwash.png') }}" alt="Service">
                    <h3>Car Wash</h3>
                    <p>
                        High-quality hand wash, affordable prices. Get washed right where you parked at your office, apartment, or home.
                    </p>
                    <a class="btn" href="{{url('/car')}}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <img src="{{ asset('img/maintenance.jpg') }}" alt="Service">
                    <h3>Home Maintenance</h3>
                    <p>
                       We provide  a comprehensive preventive maintenance program to preserve and enhance the value, life, and beauty of your home.
                    </p>
                    <a class="btn" href="{{url('/maintenance')}}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <img src="{{ asset('img/babysitting.jpg') }}" alt="Service">
                    <h3>Baby Sitting</h3>
                    <p>
                        Find a full-time, part-time, babysitter share or occasional trusted caregiver through schools and parenting groups.
                    </p>
                    <a class="btn" href="{{url('/baby')}}">Learn More</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <img src="{{asset('img/private.jpg')}}" alt="Service">
                    <h3>Private Lessons</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                    </p>
                    <a class="btn" href="{{url('/lessons')}}">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>


























@endsection
