@extends('layouts.app')
@section('content')

{{-- <div class="details">
    <div class="details_img" src={{ asset('img/carwash.png')}}></div>
    <div class="description">
    <p>Bring back your car to like what you first bought it</p>
    <ul class="details-list">Prices
    <li class="details-l">Out: 3 JOD</li>
    <li class="details-l">In: 5 JOD</li>
    <li class="details-l">Dryclean:20 JOD</li>


    </ul>

    </div>
    <div class="book-btn">
        <a href="{{url('/book')}}"> <button>Book Now</button></a>
    </div>





    </div> --}}



<div class="grid product" style="display:flex;margin:5% 20% 5% 20%;">
    <div class="column-xs-12 column-md-7"style="margin:0.75em;padding:0.5em;">
      <div class="product-gallery">
        <div class="product-image">
          <img  style=" height: 52vh;margin:0.5em;width:100%;"class="active" src="https://ad962edbae8ba7b03b7f-d10007df79b5b7a4e475a291e50a08cf.ssl.cf3.rackcdn.com/2792/profitability-car-wash.png">
        </div>

      </div>
    </div>
    <div class="column-xs-12 column-md-5">
      <h1>Car Wash</h1>

        <li class="details-l">Out: 3 JOD</li>
        <li class="details-l">In: 5 JOD</li>
        <li class="details-l">Dryclean:20 JOD</li>


        </ul>
      <div class="description"style="">
        <p>The purposes of bonsai are primarily contemplation for the viewer, and the pleasant exercise of effort and ingenuity for the grower.</p>
        <p>By contrast with other plant cultivation practices, bonsai is not intended for production of food or for medicine. Instead, bonsai practice focuses on long-term cultivation and shaping of one or more small trees growing in a container.</p>
      </div>
      <a href="{{url('/book')}}"> <button class="add-to-cart">Book Now</button></a>
    </div>
  </div>


























@endsection
