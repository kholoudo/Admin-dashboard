@extends('layouts.app')
@section('content')
<div class="cards-container">
    <h4>Our Services</h4>
<div class="cards-list">

    <div class="service-card 1">
        <div class="card_title title-white">
            <p class="service-title">Home Cleaning</p>
          </div>
      <div class="card_image"> <img src="{{ asset('img/cleaning.jpg') }}" />
        <a href="{{url('/details')}}"></a>
    </div>
      
      {{-- <div class="service-btn">
      <button>View details</button></div> --}}
    </div>

      <div class="service-card 2">
        <div class="card_title title-white">
            <p>Car Wash</p>
          </div>
      <div class="card_image">
        <img src="{{ asset('img/carwash.png') }}" />
        </div>
        {{-- <div class="service-btn">
            <button>View details</button></div> --}}
    </div>

    <div class="service-card 4">
        <div class="card_title">
            <p>Home Maintenance</p>
          </div>
        <div class="card_image">
          <img src="{{ asset('img/maintenance.jpg') }}" />
        </div>
        {{-- <div class="service-btn">
            <button>View details</button></div> --}}
      </div>


    <div class="service-card 3">
        <div class="card_title">
            <p>Baby Sitting</p>
          </div>
      <div class="card_image">
        <img src="{{ asset('img/babysitting.jpg') }}" />
      </div>
      {{-- <div class="service-btn">
        <button>View details</button></div> --}}
    </div>


      {{-- <div class="service-card 5">
        <div class="card_title">
            <p>Baby Sitting</p>
          </div>
        <div class="card_image">
          <img src="{{ asset('img/kids.jfif') }}" />
        </div>
        
      </div> --}}


        <div class="service-card 4">
            <div class="card_title title-black">
                <p>Private Lessons</p>
              </div>
            <div class="card_image">
              <img src="{{asset('img/private.jpg')}}" />
              </div>
             
            </div>

    </div>

















</div>


@endsection
