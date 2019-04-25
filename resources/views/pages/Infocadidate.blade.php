@extends('template')
@section('content')
<div class="content">
<h1 class="text-center">Information of candidate</h1>
    <div class="card mt-4">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

          <div class="container mt-4">
              <div class="row">
                <div class="col-sm-4 mt-4">
                    <img src="{{url('storage/male.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150" height="100">
                    <span>Student Name</span>
                    <div class="row" style="margin-left:113px;"> 
                        <div class="col-md-6">
                           <p>Gender:</p>
                           <p>Age:</p>
                        </div>
                        <div class="col-md-6">
                            <p>Province:</p>
                            <p>Year:</p>
                        </div>
                    </div>
                   
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
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Student profile summary</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Parental information</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Family members summary</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Children imformation summary</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Health condition summary</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Household monthly income summary</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Residential and appliant assets summary</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Family self production summary</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Debt summary</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Household monthly expense summary</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded">Poverty card summary</div>
            <div class="shadow-lg p-3 mb-2 bg-white rounded" style="width:100%;height:200px">Investigator's conclustion</div>
            <div class="mt-4">
                    <a href="{{url('/listCan')}}"><button class="btn btn-primary btn-sm">Go back to students list</button></a>
            <div class="float-right">
                <button class="btn btn-danger btn-sm">Delete profile</button>
                <a href="{{url('/detailInfo')}}"><button class="btn btn-success btn-sm">See profile details</button></a>
                <button class="btn btn-info btn-sm">Edit profile</button>
            </div>
        </div>
          
        </div>
        </div>
        <br>
       </div>
       <br>
    </div>
@endsection