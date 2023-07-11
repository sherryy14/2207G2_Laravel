@extends('template.section')
@push('title')
    <title>Users</title>
@endpush


@section('section')
    <table class="table table-dark my-3">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>City</th>
            <th>Action</th>
        </tr>

        @foreach ($users as $item)
            
        <tr>
            <td>{{$item->user_id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->city}}</td>
            <td>
             
                <a href="" class="btn btn-outline-warning">Edit</a>
                <a href="{{url('/delete')}}/{{$item->user_id}}" class="btn btn-outline-danger">Delete</a>
            </td>
            
        </tr>
        @endforeach
    </table>
@endsection
