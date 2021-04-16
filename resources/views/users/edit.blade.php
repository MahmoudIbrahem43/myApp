@extends('layouts.layout')

@section('title')
TABLES
@endsection

@section('content')


    <h1>EDIT BLADE</h1>
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit user</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

    
        <div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Name:</strong>
        <input type="text" name="name" class="form-control" placeholder="name"  value="{{ $user->name }}">
    </div>
</div>

<!-- ********************************* -->

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>User Name:</strong>
        <input class="form-control" style="height:50px" name="user_name" type="text" placeholder="user name"  value="{{ $user->user_name}}" />
    </div>
</div>

<!-- ********************************* -->
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Mobile:</strong>
        <input class="form-control" style="height:50px" name="mobile" type="text" placeholder="+012"  value="{{ $user->mobile}}" />
    </div>
</div>
<!-- ********************************* -->
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Date Of Birth:</strong>
        <input type="date" name="date_of_birth" class="form-control" placeholder="mm/dd/yyyy"  value="{{ $user->date_of_birth}}">
    </div>
</div>

<!-- ********************************* -->


<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Email:</strong>
        <input type="email" name="email" class="form-control" placeholder="email"  value="{{ $user->email}}">
    </div>
</div>


<!-- ********************************* -->




<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Gender:</strong>
        <input type="text" name="gender" class="form-control" placeholder="gender"  value="{{ $user->gender}}">
    </div>
</div>


<!-- ********************************* -->



<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Country:</strong>
        <input type="text" name="country" class="form-control" placeholder="country"  value="{{ $user->country}}">
    </div>
</div>


<!-- ********************************* -->


<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>City:</strong>
        <input type="text" name="city" class="form-control" placeholder="city"  value="{{ $user->city}}">
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
            <option value="1">admin</option>
            <option value="2">editor</option>
            <option value="3">subscriptor</option>
            <option value="4">customer</option>
            <option value="5">shop manger</option>
            <option value="6">order taker</option>

</select>

<!-- ********************************* -->



<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary" onclick="getSelectValues()">Submit</button>
</div>
</div>

</form>


<!-- 
    @section('page_js')
    <script src="{{asset('assets/js/user.js')}}"></script>
    @endsection -->

@endsection