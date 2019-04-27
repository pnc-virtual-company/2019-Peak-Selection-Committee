
@extends('layouts.app')

@section('pageTitle', 'Register')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
             
              <div class="row">
                <div class="col-lg">
                  <div class="p-5">
                    <a href="{{ route('login') }}" title="Go to Login" class="text-primary">
                      <i class="material-icons">arrow_back</i>
                    </a>
                    <div class="text-center">
                      <h3>Register a User</h3>
                      <hr>
                    </div>

                    <form class="user" action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                      @csrf

                    <form class="user" action="" method="POST" enctype="multipart/form-data">

                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="password" class="form-control" name="password" placeholder="Password" required>
                          </div>
                          <div class="col-sm-6">
                              <input type="password" class="form-control" name="verify" placeholder="Confirm Password">
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <label for="gender">Gender:</label>
                          <select name="gender" id="gender" class="form-control">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                          </select>
                      </div>
                    
                      <div class="form-group">
                        <input type="text" class="form-control" name="province" placeholder="Enter your province" required>
                      </div>
                      <br>

                     <a href="{{route('login')}}" class="btn btn-primary btn-block"><i class="fas fa-user-plus"></i>Register New User</a>
<<<<<<< HEAD
=======


                      {{-- <button type="submit" class="btn btn-primary btn-user btn-block"><i class="fas fa-user-plus"></i>
                        Register New user
                    </button> --}}

>>>>>>> bff536623c196113a471745b3d4b99a7fdac1f1f
                  </form>
                  </div>
              </div>
              </div>
          </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
      
    </div>

@endsection