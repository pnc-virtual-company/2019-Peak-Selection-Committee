<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@extends('template')

@section('content')

<body class="bg-gradient-primary">
    <br>
    <div class="container">
  
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                  <hr>
                </div>
                <form class="user" action="index.php?action=get_form_data" method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" name="firstname" placeholder="First Name" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" name="lastname" placeholder="Last Name" required>
                    </div>
                    <div class="col-sm-6 mt-3">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Username for Login" required>
                    </div>
                    <div class="col-sm-6 mt-3">
                      <input type="text" class="form-control form-control-user" name="user_id"  placeholder="User ID" required>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="">Date Of Bith:</label>
                  <input type="date" name="dob" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address" required>
                  </div>
                  {{-- <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="phone" placeholder="Phone Number" required>
                  </div> --}}
                  <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                      </div>
                      <div class="col-sm-6">
                          <input type="password" class="form-control form-control-user" name="verify" placeholder="Repeat Password">
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
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="province" placeholder="Enter your province" required>
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
      <script>
          $(document).ready(function() {
              $('#ero').on('click',function() {
                  $('#hide').hide();
              });
              $('#student').on('click', function() {
                  $('#hide').show();
              })
          });
    </script>
  </body>
  

@endsection