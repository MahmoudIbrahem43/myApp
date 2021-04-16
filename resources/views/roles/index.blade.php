@extends('layouts.layout')

@section('title')
INDEX
@endsection

@section('content')
@csrf


<div class="topnav-">
    <a class="active" href="#home">All Roles: ({{$data['allCount']}}) </a>

    @foreach ($data['roles'] as $role)
    <a href="#">{{$role->name}} ({{$role->total}})</a>
    @endforeach
</div>
<br>

<h1>Role index</h1>

<div>
    <h1>Roles BLADE</h1>
    <br>
    <a href="{{route('roles.create') }}">Add new Role</a>
    <table id="roles" class="table table-bordered table-responsive-lg">
    <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>slug</th>
                <th> # </th>
                <th> # </th>

            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    @section('page_js')
    <script src="{{asset('assets/js/role.js')}}"></script>
    @endsection
    @endsection