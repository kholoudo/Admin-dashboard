@extends('admin.layout')
@section('content')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Responsive Table</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <a  href="{{url('/admin/services/add')}}">  <button type="button" class="btn btn-primary mb-3">Add new Service</button></a>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name</th>
                        {{-- <th scope="col">Last Name</th> --}}
                        <th scope="col">Description</th>
                        {{-- <th scope="col">Country</th> --}}


                    </tr>
                </thead>
                <tbody>
                @php
                    $i=1
                @endphp

                    @foreach ( $services as $service )
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $service->service_name }}</td>
                        <td>{{ $service->service_description }}</td>


                        <td><a  href="{{url('editservice/'.$service->service_id)}}"><button type="button" class="btn btn-success"> Edit</button></a>

                            <a  href="{{url('deleteservice/'.$service->service_id)}}"><button type="button" class="btn btn-danger"  >Delete</button></a>
                        </td>


                        {{-- <td>USA</td>
                        <td>123</td>
                        <td>Member</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
