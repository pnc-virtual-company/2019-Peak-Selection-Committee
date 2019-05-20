@extends('template')
@section('pageTitle', 'Selected Candidate')
@section('content')

<style>
    .buttons-excel {
        border: none;
        background: none;
        position: absolute;
    }
    .btn_all_candidates {
        margin-left: 121px;
        position: absolute;
        margin-top: 1px;
    }
</style>

<div class="row">

    <div class="col-sm-12 col-md-12 col-lg-7">

    <div class="content">
        <h2 class="text-center">List all of Selected Candidates</h2>
        <br>
        <a href="{{route('candidates.index')}}" class="btn btn-primary btn_all_candidates">All of Candidates</a>
        <table id="tableSelected" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Province</th>
                    <th>Gender</th>
                    <th>Global Grade</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $selected=\DB::table('candidates')->where('select',"Yes")->get();
            ?>
                @foreach ( $selected as $item)
                <tr>
                    <td>{{$item->Candidate_Name}}</td>
                    <td>{{$item->years}}</td>
                    <td>{{$item->province}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->grade}}</td>
            @endforeach
            </tbody>
        </table>
    </div>

    </div>
    {{-- ====== pie chart ====== --}}
    <div class="col-sm-12 col-md-12 col-lg-5">

        <h3 class="text-center">Among selected candidates</h3>
        <div class="row">
            <canvas id="candidates" width="900" height="550"></canvas>
        </div>

        <h3 class="text-center">Among selected candidates only</h3>
        <div class="row">
            <canvas class="col-sm-12 col-md-6 col-lg-6" width="900" height="550" id="gender"></canvas>
            <canvas class="col-sm-12 col-md-6 col-lg-6" width="900" height="550" id="chart_ngo"></canvas>

            <canvas class="col-sm-12 col-md-6 col-lg-6" width="900" height="550" id="age"></canvas>
            <canvas class="col-sm-12 col-md-6 col-lg-6" width="900" height="550" id="province"></canvas>
        </div>

    </div>

</div>

@endsection

<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/colreorder/1.5.1/js/dataTables.colReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

{{-- pie chart --}}
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/mdb.min.js')}}"></script>

@push('scripts')

<script>

//======hany script export file====
    $(document).ready(function() {
        $('#tableSelected').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excel',
                    text: '<button class="btn btn-primary tbn-export">Export List</button>',
                },
            ]
        });
    });

// ================ pie chart =============
    // ========== selected candidate ========

        new Chart(document.getElementById("candidates"), {
            type: 'pie',
            data: {
                labels: {!!json_encode($grade_candidates['labels'])!!},
                datasets: [{
                    backgroundColor: ["#00c853", "#c6ff00", "#eeff41", "#fdd835", "#f9a825", "#e65100"],
                    data: {!!json_encode($grade_candidates['datas'])!!},
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Grade distribution'
                }
            }
        });
    // ============ end selected candidate =============

    // ========== gender ========

    var rows = document.getElementById("tableSelected").getElementsByTagName("tbody")[0].getElementsByTagName("tr"),
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
                labels: {!!json_encode($ngo_candidates['labels'])!!},
                datasets: [{
                    backgroundColor:  ["#00e676", "#d50000"],
                    data: {!!json_encode($ngo_candidates['datas'])!!},
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'NGO Provanance'
                }
            }
        });
        // ============ end ngo =============

        // ========== age ========
        new Chart(document.getElementById("age"), {
            type: 'pie',
            data: {
                labels: {!!json_encode($age_candidates['labels'])!!},
                datasets: [{
                    backgroundColor:  ["#FDB45C", "#949FB1"],
                    data: {!!json_encode($age_candidates['datas'])!!},
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

    var rows = document.getElementById("tableSelected").getElementsByTagName("tbody")[0].getElementsByTagName("tr"),
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
                    backgroundColor: ["#64dd17", "#01bc9b",
                                        "#015cdb", "#bba7a1",
                                        "#917dc7", "#490850",
                                        "#cdcdcd", "#808080",
                                        "#effd43", "#fffffe",
                                        "#d4779b", "#24bc45"],
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

</script>

@endpush
