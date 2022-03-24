@extends('layouts.app')
@section('content')

{{-- <div class="page-header mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Book A Table</h2>
            </div>
            <div class="col-12">
                <a href="{{ url('/') }}">Home</a>
                <a href="">Booking</a>
            </div>
        </div>
    </div>
</div> --}}
<!-- Page Header End -->


<!-- Booking Start -->
<div class="booking">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="booking-content">
                    <div class="section-header">
                        {{-- <p>Book Now</p> --}}
                        <h2>Book Your Service Now</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            reserve you service anytime and from any device. it is easy to use and reservations are instantly confirmed in real-time.
                        </p>
                        <p>

Saturday - Friday </p>
<p>

8 :00 AM - 18:00 PM</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="booking-form">
                    @if (session()->has('success'))
                    <div  style="width: 100%" class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <p class="updated">{!! session()->get('success') !!}</p></div>
                        @endif

                    <form  method="post" action="{{route('book.store') }}"
                        >
                        @csrf


                        <div class="control-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Name" required="required" name="name"  />
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-user"></i></div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="control-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Table Number" required="required" />
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="control-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Mobile"  name="mobile_number"required="required" />
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            {{-- <div class="input-group date" id="date" data-target-input="nearest"> --}}
                                <input min="{{date("Y-m-d")}}" type="date" class="form-control datetimepicker-input" placeholder="Date" name="date" data-target="#date" data-toggle="datetimepicker"/>
                                {{-- <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div> --}}
                            {{-- </div> --}}
                        </div>
                        {{-- <div class="control-group"> --}}
                            {{-- <div class="input-group time" id="time" data-target-input="nearest"> --}}
                                {{-- <input type="time" class="form-control datetimepicker-input" placeholder="Time" name="time" data-target="#time" data-toggle="datetimepicker"/> --}}
                                {{-- <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                            </div> --}}
                        {{-- </div> --}}
                        <div class="control-group">
                            <div class="input-group">
                        <select style="
                        background-color: #fbaf32;" class="custom-select form-control" name="time">
                            <option >Select Time</option>
                            <option value="08:00-10:00">08:00-10:00</option>
                            <option value="10:00-12:00">10:00-12:00</option>
                            <option value="12:00-14:00">12:00-14:00</option>
                            <option value="14:00-16:00">14:00-16:00</option>
                            <option value="16:00-18:00">16:00-18:00</option>

               </select>
               <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
            </div>
        </div>
    </div>
                        {{-- <div class="control-group">
                            <div class="input-group">
                                <select  style="
                                background-color: #fbaf32;"class="custom-select form-control" name="guest_number">
                                    <option selected>Guest</option>
                                    <option value="1">1 Guest</option>
                                    <option value="2">2 Guest</option>
                                    <option value="3">3 Guest</option>
                                    <option value="4">4 Guest</option>
                                    <option value="5">5 Guest</option>
                                    <option value="6">6 Guest</option>
                                    <option value="7">7 Guest</option>
                                    <option value="8">8 Guest</option>
                                    <option value="9">9 Guest</option>
                                    <option value="10">10 Guest</option>
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="control-group">
                            <div class="input-group">
                                <select style="
                                background-color: #fbaf32;" class="custom-select form-control" name="service_name">
                                    <option selected>service name</option>
                                     @foreach($services as $oneservice)
                                    { <option value="{{ $oneservice->id }}">{{ $oneservice->service_name }} </option>
                                  @endforeach
                       </select>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">

                            <textarea  rows="7" class="form-control" id="message" name="note" placeholder="write your notes here "  data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <script> function error(){
                                alert("you must login befor booking")
                            }</script>
                            @if(!Auth::check())
                            <button  onclick="error()" class="btn custom-btn" type="submit">Book Now</button>
                            @else
                            <button class="btn custom-btn" type="submit">Book Now</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->


@endsection
