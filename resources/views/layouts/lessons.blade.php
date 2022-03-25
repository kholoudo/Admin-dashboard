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
          <h3 style="margin-top:1em;">Private Lessons</h3>
          <h4>JOD 3 per hour</h4>
          <div class="description"style="">
            <p>Students who supplement their core course with 1-1 lessons, benefit from the undivided attention of their teacher, who will make sure classes are structured to suit their student's needs. </p>
            <p>Not only does this increase the knowledge and understanding input you receive in class, but you can also focus on what's important to you and study at your own pace. Many students enjoy the freedom this brings, as private lessons can be very flexible.</p>
          </div>
          <a href="{{url('/book')}}"> <button class="add-to-cart">Book Now</button></a>
        </div>
      </div>





@endsection
