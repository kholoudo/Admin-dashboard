@extends('layouts.app')
@section('content')


<div class="details">
    <h3>Home Cleaning</h3>
<img  class="details_img" src={{asset('img/clean2.jpg')}}/>
<div class="description">
<p>Highly-qualified team will take care of every corner at you home.</p>
<span>Price from 5 to 7 JOD Per hour</span>

</div>
<div class="book-btn">
   <a href="{{url('/book')}}"> <button>Book Now</button></a>
</div>





</div>


@endsection
