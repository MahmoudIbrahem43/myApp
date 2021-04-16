@extends('layouts.layout')

@section('title')
INDEX
@endsection

@section('content')
@csrf

<div class="topnav-">
    <a class="active" href="{{ route('UsersRole.showUsers')}}">All Roles: ({{$data['allCount']}}) </a>

    @foreach ($data['roles'] as $role)
    <a href="{{ route('UsersRole.showUsers').'?id='.$role->role_id}}">{{$role->name}} ({{$role->total}})</a>
    @endforeach
</div>

<br>

<div>
    <h1>Users BLADE</h1>
    <br>
    <a href="{{route('users.create')}}">Add new User</a>
    <table id="users" class="table table-bordered table-responsive-lg">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>User name</th>
                <th>Mobile</th>
                <th>Date of birth</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Country</th>
                <th>City</th>
                <th>Role id</th>
                <th> # </th>
                <th> # </th>

            </tr>
        </thead>
        <tbody>



        </tbody>
    </table>




    @section('page_js')
    <script src="{{asset('assets/js/user.js')}}"></script>
    @endsection



    @endsection