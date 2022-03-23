@extends('layouts.app')
@section('content')

<div class="details">
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





    </div>











@endsection
