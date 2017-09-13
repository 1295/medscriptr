@extends('layouts.assets')

@section('content')
  <div class="container">
            <form class="form-horizontal" role="form" method="post" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="fname" placeholder="First Name" class="form-control" autofocus>
                        <span class="help-block">First Name, eg.:Harry</span>
                    </div>
                </div>                
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="lname" placeholder="Last Name" class="form-control" autofocus>
                        <span class="help-block">Last Name, eg.: Smith</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="role" class="col-sm-3 control-label">Role</label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="role">
                            <option value="1">Administrator</option>
                            <option value="2">Doctor</option>
                            <option value="3">Nurse</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                 <!-- /.form-group -->
                                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
@endsection
  
