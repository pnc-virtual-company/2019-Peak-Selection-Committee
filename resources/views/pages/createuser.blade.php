@extends('template')

@section('pageTitle', 'Create User')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0 bg-light">
             
              <div class="row">
                <div class="col-lg">
                  <div class="p-5">
                    <div class="text-center">
                      <h3>Create New User</h3>
                      <hr>
                    </div>
                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                      @csrf
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
                          <label for="gender">User Role:</label>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="role" id="admin" value="ERO">
                              <label class="form-check-label" id="ero" for="ero">Admin</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="role" id="normal_user" value="normal user">
                              <label class="form-check-label" for="student">Normal User</label>
                          </div>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary btn-user btn-block"><i class="fas fa-user-plus"></i>
                          Create New User
                      </button>
                      
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