@extends('template')
@section('content')
<div class="content">
    <h1 class="text-center">Detail Infomation of Candidate</h1>
    <div class="card mt-3">
   
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <div class="container mt-4">
              <div class="row">
                <div class="col-sm-4 mt-4">
                    <img src="{{url('storage/male.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150" height="100">
                </div>
                <div class="col-sm-4 mt-4" style="margin-left:330px;">
                  <label for="">Global Grade</label>
                <select name="" id="">
                    <option value="">Choose Grade</option>
                    <option value="">A+</option>
                    <option value="">A</option>
                    <option value="">A-</option>
                    <option value="">B+</option>
                    <option value="">B</option>
                    <option value="">B-</option>
                    <option value="">Failed</option>
                </select>
                <select name="" id="">
                    <option value="">+</option>
                    <option value="">-</option>
                </select><br>
                <p style="margin-left:200px;">NGO</p>
                <input type="checkbox" style="margin-left:10px;"><label for="">Information from PNC employee</label>
            </div>
        </div>
        <hr>
        <div >
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Student First Name</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Student Last Name</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Email</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Gender</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Age</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Date of Birth</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Global Grade</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Selected</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Year</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Province</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Phone Number</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded" style="width:100%;height:200px">Investigator's conclustion</div>
            <div class="mt-4">
              <a href="{{url('/listCan')}}"><button class="btn btn-primary btn-sm">Go back to students list</button></a>
            </div>
          
        </div>
        </div>
        <br>
       </div>
       <br>
    </div>
@endsection