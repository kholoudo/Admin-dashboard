@extends('layouts.app')
@section('content')
<div class="details">
    <h3>Baby sitting</h3>
    <div class="details_img" ></div>
    <div class="description">
    <p>Request your reliable babysitter now and rest assured</p>
    <span>5 JOD Per Hour</span>

    </div>
    <div class="book-btn">
        <a href="{{url('/book')}}"> <button>Book Now</button></a>
    </div>

    </div>


@endsection
