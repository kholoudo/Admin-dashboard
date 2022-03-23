@extends('layouts.app')
@section('content')


<div class="grid product" style="display:flex;margin:5% 20% 5% 20%;">
    <div class="column-xs-12 column-md-7">
      <div class="product-gallery">
        <div class="product-image">
          <img  style=" height: 52vh;margin:0.5em;width:fit-content;"class="active" src="https://source.unsplash.com/W1yjvf5idqA">
        </div>

      </div>
    </div>
    <div class="column-xs-12 column-md-5">
      <h1>Bonsai</h1>
      <h2>$19.99</h2>
      <div class="description"style="">
        <p>The purposes of bonsai are primarily contemplation for the viewer, and the pleasant exercise of effort and ingenuity for the grower.</p>
        <p>By contrast with other plant cultivation practices, bonsai is not intended for production of food or for medicine. Instead, bonsai practice focuses on long-term cultivation and shaping of one or more small trees growing in a container.</p>
      </div>
      <button class="add-to-cart">Book Now</button>
    </div>
  </div>














@endsection
