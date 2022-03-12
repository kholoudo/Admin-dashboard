@extends('layouts.app')
@section('content')

<div class="service-details">
@foreach($services as $service)
{{-- {{dd($services)}} --}}
<h4>{{$service->service_name}}</h4>
<p>{{$service->service_description}}</p>
<span>{{$service->service_price}}</span>
<button>Book Now</button>
@endforeach



</div>





@endsection