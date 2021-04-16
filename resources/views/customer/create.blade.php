@extends('layouts.layout')

@section('title')
TABLES
@endsection

@section('content')


<h1>CREATE BLADE</h1>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Customer</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('customer.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
        </div>

        <!-- ********************************* -->

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Name:</strong>
                <input class="form-control" style="height:50px" name="user_name" type="text" placeholder="user name" />
            </div>
        </div>

        <!-- ********************************* -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile:</strong>
                <input class="form-control" style="height:50px" name="mobile" type="text" placeholder="+012" />
            </div>
        </div>
        <!-- ********************************* -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Of Birth:</strong>
                <input type="date" name="date_of_birth" class="form-control" placeholder="mm/dd/yyyy">
            </div>
        </div>

        <!-- ********************************* -->


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="email">
            </div>
        </div>


        <!-- ********************************* -->




        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <input type="text" name="gender" class="form-control" placeholder="gender">
            </div>
        </div>


        <!-- ********************************* -->



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country:</strong>
                <input type="text" name="country" class="form-control" placeholder="country">
            </div>
        </div>


        <!-- ********************************* -->


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>City:</strong>
                <input type="text" name="city" class="form-control" placeholder="city">
            </div>
        </div>


        <!-- ********************************* -->



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" placeholder="********">
            </div>
        </div>


        <!-- ********************************* -->


        <label for="roles">Choose a role:</label>

        <select name="role_id" id="roles">
            
            <option value="4">customer</option>
          
          

        </select>


        <!-- ********************************* -->



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" onclick="getSelectValues()">Submit</button>
        </div>
    </div>

</form>
@endsection