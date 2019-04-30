
@extends('template')

@section('pageTitle', 'List User')

@section('content')
<div class="content">
    <h2 class="text-center">List Of User</h2>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Role</th>             
                    </tr>
                </thead>
                <tbody>
                 @foreach ($users as $item)
                    <tr>
                        <td>
                          <a href="{{url('users')}}/{{ $item->id }}/edit" title="@lang('edit')"><i class="material-icons">edit</i></a>
                          <a href="" class="text-danger"><i class="large material-icons">delete</i></a>
                          <a href="" class="text-success"><i class="large material-icons">visibility</i></a>
                        </td>
                        <td>{{$item->firstname}}</td>
                        <td>{{$item->lastname}}</td>
                        <td>{{$item->email}}</td>
                        @if($item->role_id == 1)
                            <td>Admin</td>
                        @else
                            <td>Normal</td>
                        @endif  
                       {{-- <span>{{ $item->roles->pluck('name')->implode(', ') }}</span> --}}        
                    </tr>
                @endforeach
               </tbody>     
            </table>
            <br/>
            <a href="{{url('createuser')}}"><button class="btn btn-primary"><i class="material-icons left">people</i> Create User</button></a>

            {{-- <button class="btn btn-primary"><i class="material-icons left">people</i> Create User</button> --}}
            <button class="btn btn-primary"><i class="material-icons left">import_export</i> Export  List</button>
           
        </div>
@endsection


   


