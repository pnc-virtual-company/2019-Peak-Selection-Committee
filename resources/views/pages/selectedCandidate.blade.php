@extends('template')
@section('pageTitle', 'Selected Candidate')
@section('content')

<style>
    .buttons-excel {
        border: none;
        background: none;
    }
</style>

<div class="content">
    <h2 class="text-center">List all of Selected Candidates</h2>

    <a href="{{route('candidates.index')}}" class="btn btn-primary float-right">All of Candidates</a>
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

</script>

@endpush
