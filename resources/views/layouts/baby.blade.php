@extends('layouts.app')
@section('content')
{{-- <div class="details">
    <h3>Baby sitting</h3>
    <div class="details_img" ></div>
    <div class="description">
    <p>Request your reliable babysitter now and rest assured</p>
    <span>5 JOD Per Hour</span>

    </div>
    <div class="book-btn">
        <a href="{{url('/book')}}"> <button>Book Now</button></a>
    </div>

    </div> --}}




    <div class="grid product" style="display:flex;margin:5% 20% 5% 20%;">
        <div class="column-xs-12 column-md-7" style="margin:0.75em;padding:0.5em;">
          <div class="product-gallery">
            <div class="product-image">
              <img  style=" height: 52vh;width:100%;"class="active" src="https://weclean.ae/wp-content/uploads/2021/07/babysitting-pic1-1024x549-1.jpg">
            </div>

          </div>
        </div>
        <div class="column-xs-12 column-md-5">
          <h2>Baby Sitting</h2>
          <h3>JOD5 per hour</h3>
          <div class="description"style="">
            <p> Based on your needs and specifications, we will match your family with a dedicated babysitter or nanny that you and your family will not only be comfortable, but impressed, with.</p>
            <p>From your first phone call, our unique process takes into account, among other things, personality, needs and expectations  to match your family with the best possible fit.</p>
          </div>
          <a href="{{url('/book')}}"><button class="add-to-cart">Book Now</button></a>
        </div>
      </div>















@endsection
