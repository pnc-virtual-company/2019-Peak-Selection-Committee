

@extends('template')

@section('pageTitle', 'List Candidate')

@section('content')

<div class="content">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-7">
            <h1 class="text-center">List of Candidates</h1>

            <br>
            <div class="float-right">
                <a href="{{url('/infoCan')}}" class="btn btn-primary btn-sm ml-2">All Candidates</a>
                <button class="btn btn-success btn-sm">Selected Candidates</button>
            </div>
            <br><br>

            {{-- table of candidate --}}
            <table id="listCandidates" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                    </tr>
                    <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                    </tr>
                    <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                    </tr>
                    <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                    </tr>
                    <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                    </tr>
                    <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>
            
             <a href="{{url('/createCandidate')}}" class="btn btn-primary btn-sm mb-4">Add candidate</a>
        </div>
        {{-- end table of candidate --}}
        
        {{-- ====== pie chart ====== --}}
            <div class="col-sm-12 col-md-12 col-lg-5 mt-4">
                
                <h3 class="text-center">Among all candidates</h3>
                <div class="row">
                    <canvas id="candidates"></canvas>
                </div>

                <h3 class="text-center">Among selected candidates only</h3>
                <div class="row">
                    <canvas class="col-sm-12 col-md-12 col-lg-6" id="gender"></canvas>
                    <canvas class="col-sm-12 col-md-12 col-lg-6" id="ngo"></canvas>
                
                    <canvas class="col-sm-12 col-md-12 col-lg-6" id="age"></canvas>
                    <canvas class="col-sm-12 col-md-12 col-lg-6" id="province"></canvas> 
                </div>
            
            </div>
        </div> 
	</div>
   
</div>

@endsection