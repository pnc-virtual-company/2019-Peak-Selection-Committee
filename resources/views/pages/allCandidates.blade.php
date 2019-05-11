@extends('template')
@section('pageTitle', 'List Candidate')
@section('content')

<div class="content">
        <div>
            <h1 class="text-center">All of Candidates</h1>
            <br>
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
            <a href="{{ route('candidate.index') }}" title="Go to Login"> <button class="btn btn-primary text-primarys">Back</button></a>
        </div>
    </div>
</div>
@endsection