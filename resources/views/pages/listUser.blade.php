
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
                          <a href="{{route('users.destroy', $item->id)}}"  data-toggle="modal" data-target="#delete" data-id="{{$item['id']}}" class="text-danger"><i class=" material-icons">delete</i></a>
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

<div class="modal fade" tabindex="-1" role="dialog" id="delete">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure want to Delete?.</p>
          <small id="users"></small>
        </div>
        <div class="modal-footer">
            <form action="" id="fid" method="post">
                @csrf
                @method('delete')
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit"  class="btn btn-primary">Yes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  {{-- <script src="{{asset('Js/app.js')}}" ></script> --}}

    <script>
    
    
  </script>
   


