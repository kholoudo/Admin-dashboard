@extends('layouts.app')
@section('content')


{{-- <div class="details">
    <h3>Home Cleaning</h3>
<img  class="details_img" src={{asset('img/clean2.jpg')}}/>
<div class="description">
<p>Highly-qualified team will take care of every corner at you home.</p>
<span>Price from 5 to 7 JOD Per hour</span>

</div>
<div class="book-btn">
   <a href="{{url('/book')}}"> <button>Book Now</button></a>
</div>





</div> --}}

<div class="grid product" style="display:flex;margin:5% 20% 5% 20%;">
    <div class="column-xs-12 column-md-7"style="margin:0.75em;padding:0.5em;">
      <div class="product-gallery">
        <div class="product-image">
          <img  style=" height: 52vh;margin:0.5em;width:100%;"class="active" src="https://www.rbcclean.com/wp-content/uploads/2020/08/Residential-Cleaning-Service.jpg">
        </div>

      </div>
    </div>
    <div class="column-xs-12 column-md-5">
      <h3 style="margin-top:1em;">Home Cleaning</h3>
      <h4> 3 to 5 JOD Per hour</h4>
      <div class="description"style="">
        <p>We provide elite cleaning services designed to keep your home sparkling and beautiful so that you can focus on things that matter more, like your family and friends.</p>
        <p>Not only do we provide our customers with clean homes, but we do our part to keep the Earth clean, too. We focus on using green cleaning materials that are environmentally responsible or sustainable. We are one of the few cleaning services in Jordan to do this.</p>
      </div>
      <a href="{{url('/book')}}"><button class="add-to-cart">Book Now</button></a>
    </div>
  </div>


@endsection
