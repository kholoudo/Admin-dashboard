@extends('admin.layout')
@section('content')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Responsive Table</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <a  href="{{url('/admin/categories/add')}}">  <button type="button" class="btn btn-primary mb-3">Add new category</button></a>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>


                    </tr>
                </thead>
                <tbody>
                @php
                    $i=1
                @endphp

                    @foreach ( $categories as $category )
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $category->category_name }}</td>


                        <td>
                            <a  href="{{url('editcategory/'.$category->id)}}">
                            <button type="button" class="btn btn-success"> Edit</button>
                        </a>

                            <a
                            href="{{url('deletecategory/'.$category->id)}}">
                            <button type="button" class="btn btn-danger"  >Delete</button>
                        </a>
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
