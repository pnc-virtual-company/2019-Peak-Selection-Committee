@extends('template')
@section('pageTitle', 'List Candidate')
@section('content')

<div class="content">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-7">
            <h1 class="text-center">List of Candidates</h1>
            <br>
            <div class="float-right">
                @auth
                    @if(Auth::user()->role_id==1)
                        <a href="{{route('candidates.create')}}" class="btn btn-primary btn-sm ">Add a candidate</a>
                    @endif
                @endauth
                <a href="{{url('selected')}}" class="btn btn-success btn-sm">List all of Selected Candidates</a>

            </div>
            <br><br>

            {{-- table of candidate --}}
            <table id="listCandidates" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Province</th>
                        <th>Gender</th>
                        <th>Global Grade</th>
                        <th>Selected</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($candidates as $item)
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
           
        </div>
        {{-- end table of candidate --}}

        {{-- ====== pie chart ====== --}}
            <div class="col-sm-12 col-md-12 col-lg-5 mt-4">

                <h3 class="text-center">Among all candidates</h3>
                <div class="row">
                    <canvas id="candidates" width="900" height="550"></canvas>
                </div>

                <h3 class="text-center">Among all of candidates</h3>
                <div class="row">
                    <canvas class="col-sm-12 col-md-6 col-lg-6" width="900" height="550" id="gender"></canvas>
                    <canvas class="col-sm-12 col-md-6 col-lg-6" width="900" height="550" id="chart_ngo"></canvas>

                    <canvas class="col-sm-12 col-md-6 col-lg-6" width="900" height="550" id="age"></canvas>
                    <canvas class="col-sm-12 col-md-6 col-lg-6" width="900" height="550" id="province"></canvas>
                </div>

            </div>
        </div>
	</div>

</div>

@endsection

{{-- pie chart --}}
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/mdb.min.js')}}"></script>

@push('scripts')

<script>

    // ============== pie chart ==============

        // === all candidates ===

        var rows = document.getElementById("listCandidates").getElementsByTagName("tbody")[0].getElementsByTagName("tr"),
            len = rows.length,
            i,
            letters = [],
            cellNum = 4;
        for(i = 0; i < len; i++) {
            letters.push(rows[i].cells[cellNum].innerHTML);
        }
        console.log(len);
        console.log(letters);
        letters.sort();
        var label = [];
        var data = [];
        var current = null;
        var cnt = 0;
        for (var i = 0; i < letters.length; i++) {
            if (letters[i] != current) {
                if (cnt > 0) {
                    label.push(current);
                    data.push(cnt);
                }
                current = letters[i];
                cnt = 1;
            } else {
                cnt++;
            }

        }
        if (cnt > 0) {
            label.push(current);
            data.push(cnt);
        }
        console.log(data);
        console.log(label);

        new Chart(document.getElementById("candidates"), {
            type: 'pie',
            data: {
                labels: label,
                datasets: [{
                    backgroundColor: ["#c6ff00", "#00c853", "#eeff41", "#f9a825", "#fdd835", "#e65100", "#d50000"],
                    data: data
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Grade distribution'
                }
            }
        });

        // =========== end all candidates =========

        // ========== gender ========

        var rows = document.getElementById("listCandidates").getElementsByTagName("tbody")[0].getElementsByTagName("tr"),
            len = rows.length,
            i,
            letters = [],
            cellNum = 3;
        for(i = 0; i < len; i++) {
            letters.push(rows[i].cells[cellNum].innerHTML);
        }
        console.log(len);
        console.log(letters);
        letters.sort();
        var label = [];
        var data = [];
        var current = null;
        var cnt = 0;
        for (var i = 0; i < letters.length; i++) {
            if (letters[i] != current) {
                if (cnt > 0) {
                    label.push(current);
                    data.push(cnt);
                }
                current = letters[i];
                cnt = 1;
            } else {
                cnt++;
            }

        }
        if (cnt > 0) {
            label.push(current);
            data.push(cnt);
        }
        console.log(data);
        console.log(label);

        new Chart(document.getElementById("gender"), {
            type: 'pie',
            data: {
                labels: label,
                datasets: [{
                    backgroundColor: ["#64dd17", "#01579b"],
                    data: data
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Gender'
                }
            }
        });

        //  ========= end gender ==========

        // ========== ngo ========
        new Chart(document.getElementById("chart_ngo"), {
            type: 'pie',
            data: {
                labels: ["Yes", "No"],
                datasets: [{
                    backgroundColor:  ["#00e676", "#d50000"],
                    data: [40, 120]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'NGO Provanance'
                }
            }
        });
        //  ========= end ngo ==========

        // ========== age ========
        new Chart(document.getElementById("age"), {
            type: 'pie',
            data: {
                labels: ["18 - 21", "22 - 25"],
                datasets: [{
                    backgroundColor:  ["#FDB45C", "#949FB1"],
                    data: [100, 50]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Age'
                }
            }
        });
        //  ========= end age ==========

        // ========== province ========

        var rows = document.getElementById("listCandidates").getElementsByTagName("tbody")[0].getElementsByTagName("tr"),
            len = rows.length,
            i,
            letters = [],
            cellNum = 2;
        for(i = 0; i < len; i++) {
            letters.push(rows[i].cells[cellNum].innerHTML);
        }
        console.log(len);
        console.log(letters);
        letters.sort();
        var label = [];
        var data = [];
        var current = null;
        var cnt = 0;
        for (var i = 0; i < letters.length; i++) {
            if (letters[i] != current) {
                if (cnt > 0) {
                    label.push(current);
                    data.push(cnt);
                }
                current = letters[i];
                cnt = 1;
            } else {
                cnt++;
            }

        }
        if (cnt > 0) {
            label.push(current);
            data.push(cnt);
        }
        console.log(data);
        console.log(label);

        new Chart(document.getElementById("province"), {
            type: 'pie',
            data: {
                labels: label,
                datasets: [{
                    backgroundColor: ["#009688", "#6d4c41", "#b0bec5", "#ffab91"],
                    data: data
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Province'
                }
            }
        });

        //  ========= end province ==========

    // =========== end pie chart ============


</script>
@endpush
