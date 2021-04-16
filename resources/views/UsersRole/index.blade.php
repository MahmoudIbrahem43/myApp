@extends('layouts.layout')

@section('title')
INDEX
@endsection

@section('content')
@csrf

<table id="usersRole" class="table table-bordered table-responsive-lg">
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


        </tr>
    </thead>
    <tbody>



    </tbody>
</table>




@section('page_js')
<script src="{{asset('assets/js/usersRole.js')}}"></script>
@endsection


@endsection