@extends('layouts.app')
@section('content')

<table class="table table-bordered" style="margin:0.5em;padding:0.5em;width:70%;text-align:center;margin:auto 15%;margin-bottom:1em;">
    <h3 style="text-align:center;margin:0.5em;">Maintenace Services </h3>
    <thead>
        <tr>
            <th style="background-color:#f1bb68;">Service</th>
            <th style="background-color:#f1bb68;">Price</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>House Paint</td>
            <td>50 to 70 JOD</td>

        </tr>
        <tr>
            <td>Pipes Repair</td>
            <td>10 to 15 JOD</td>

        </tr>
        <tr>
            <td>Electricity</td>
            <td>10 to 20 JOD</td>

        </tr>
    </tbody>
</table>
<div style="text-align:center;margin:0.5em;">
<a href="{{url('/book')}}"> <button class="add-to-cart" >Book Now</button></a>
</div>








@endsection
