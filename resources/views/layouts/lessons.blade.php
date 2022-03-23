@extends('layouts.app')
@section('content')
{{-- <div class="details">
    <h3>Private lessons</h3>
    <div class="details_img" img src={{ asset('img/cleaning.png')}}></div>
    <div class="description">
    <p>Highly-qualified team will take care of every corner at you home.</p>
    <span>Price from 5 to 7 JOD Per hour</span>

    </div>
    <div class="book-btn">
        <a href="{{url('/book')}}"> <button>Book Now</button></a>
    </div>





    </div> --}}
    <div class="grid product" style="display:flex;margin:5% 20% 5% 20%;">
        <div class="column-xs-12 column-md-7" style="margin:0.75em;padding:0.5em;">
          <div class="product-gallery">
            <div class="product-image">
              <img  style=" height: 52vh;margin:0.5em;width:100%;"class="active" src="https://img.freepik.com/free-photo/woman-listening-girl-reading-book_259150-58167.jpg?size=626&ext=jpg&ga=GA1.1.1424320422.1644278400">
            </div>

          </div>
        </div>
        <div class="column-xs-12 column-md-5">
          <h1>Private Lessons</h1>
          <h2>JOD 3 per hour</h2>
          <div class="description"style="">
            <p>The purposes of bonsai are primarily contemplation for the viewer, and the pleasant exercise of effort and ingenuity for the grower.</p>
            <p>By contrast with other plant cultivation practices, bonsai is not intended for production of food or for medicine. Instead, bonsai practice focuses on long-term cultivation and shaping of one or more small trees growing in a container.</p>
          </div>
          <a href="{{url('/book')}}"> <button class="add-to-cart">Book Now</button></a>
        </div>
      </div>





@endsection
