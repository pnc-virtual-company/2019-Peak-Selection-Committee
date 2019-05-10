@extends('template')
@section('pageTitle', 'List Candidate')
@section('content')

<div class="content">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-7">
            <h1 class="text-center">List of Candidates</h1>
            <br>
            <div class="float-right">
                <a href="{{url('/all')}}" class="btn btn-primary btn-sm ml-2">All Candidates</a>
                <a href="{{url('/selected')}}" class="btn btn-success btn-sm ml-2">Selected Candidates</a>
                
            </div>

            {{-- table of candidate --}}
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Province</th>
                        <th>Gender</th>
                        <th>Global Grade</th>
                        <th>Seleted</th>            
                    </tr>
                </thead>
                <tbody>
                 @foreach ($candidate as $item)
                    <tr>
                        <td>{{$item->Candidate_Name}}</td>
                        <td>{{$item->years}}</td>
                        <td>{{$item->province}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->grade}}</td>
                        <td>{{$item->select}}</td>
                         
                    </tr>
                @endforeach
               </tbody>     
            </table>
            @auth
               @if(\Auth::user()->role_id==1)
                    <a href="{{url('/createCandidate')}}" class="btn btn-primary btn-sm mb-4">Add candidate</a>
               @endif
            @endauth
        </div>
        {{-- end table of candidate --}}
        
        {{-- ====== pie chart ====== --}}
            <div class="col-sm-12 col-md-12 col-lg-5 mt-4">
                
                <h3 class="text-center">Among all candidates</h3>
                <div class="row">
                    <p style="margin-left:32vh"><b>Grade distribution</b></p>
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


{{-- pie chart --}}
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/mdb.min.js')}}"></script>
<script>


    // ============== pie chart ==============

        // === all candidates ===
        var ctxP = document.getElementById("candidates").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["A+", "A", "A-", "B+", "B","B-","Failed"],
                datasets: [{
                data: [30, 50, 100, 40, 120,49,230],
                backgroundColor: ["#00c853", "#c6ff00", "#eeff41", "#fdd835", "#f9a825","#e65100", "#d50000"],
                hoverBackgroundColor:  ["#00c853", "#c6ff00", "#eeff41", "#fdd835", "#f9a825","#e65100", "#d50000"]
                }]
            },
            options: {
                responsive: true
            }
        });
        // =========== all candidates =========

        // ========== gender ========
        var ctxP = document.getElementById("gender").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["F", "M"],
                datasets: [{
                data: [300, 50],
                backgroundColor: ["#64dd17", "#01579b"],
                hoverBackgroundColor: ["#64dd17", "#01579b"]
                }]
            },
            options: {
                responsive: true
            }
        });
        //  ========= end gender ==========

        // ========== ngo ========
        var ctxP = document.getElementById("ngo").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {        
                labels: ["Yes", "No"],
                datasets: [{
                data: [40, 120],
                backgroundColor: ["#00e676", "#d50000"],
                hoverBackgroundColor: ["#00e676", "#d50000"]
                }]
            },
            options: {
                responsive: true
            }
        });
        //  ========= end ngo ==========

        // ========== age ========
        var ctxP = document.getElementById("age").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["Age"],
                datasets: [{
                data: [100, 50],
                backgroundColor:  ["#FDB45C", "#949FB1"],
                hoverBackgroundColor: ["#FFC870", "#A8B3C5"]
                }]
            },
            options: {
                responsive: true
            }
        });
        //  ========= end age ==========

        // ========== province ========
        var ctxP = document.getElementById("province").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                Title:'Province',
                labels: ["Phnom Penh", "Prey Veng", "Ratanakiri", "Battambong"],
                datasets: [{
                data: [200, 90, 100, 90],
                backgroundColor: ["#009688", "#6d4c41", "#b0bec5", "#ffab91"],
                hoverBackgroundColor: ["#009688", "#6d4c41", "#b0bec5", "#ffab91"]
                }]
            },
            options: {
                responsive: true
            }
        });
        //  ========= end province ==========

    // =========== end pie chart ============


</script>

@endsection
<script>
</script>