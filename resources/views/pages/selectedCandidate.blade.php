@extends('template')
@section('pageTitle', 'Selected Candidate')
@section('content')
<div class="content">
    <h2 class="text-center">Selected Candidates</h2>
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
                        <td>{{$item->select}}</td>
                    </tr>
                @endforeach
               </tbody>     
            </table>
                <a href="{{ route('candidate.index') }}" title="Go to Login"> <button class="btn btn-primary text-primarys">Back</button></a>
        </div>
@endsection
