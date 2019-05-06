
@extends('template')
@section('pageTitle', 'List User')
@section('content')
<div class="content">
    <h2 class="text-center">List Of User</h2>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        @auth
                            @if(\Auth::user()->role_id==1)
                            <th>Action</th>
                            @endif
                        @endauth
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Role</th>             
                    </tr>
                </thead>
                <tbody>
                 @foreach ($users as $item)
                    <tr>
                        @auth
                        @if(\Auth::user()->role_id==1)
                            <td>
                                <a href="{{url('users')}}/{{ $item->id }}/edit" title="@lang('edit')"><i class="material-icons">edit</i></a>
                                <a href="{{route('users.destroy', $item->id)}}"  data-toggle="modal" data-target="#delete" data-id="{{$item['id']}}" class="text-danger"><i class=" material-icons">delete</i></a>
                                <a href="{{route('users.show', $item->id)}}"  data-toggle="modal" data-target="#ViewDetail" data-id="{{$item['id']}}"><i class="large material-icons">visibility</i></a>
                            </td>
                            @endif
                        @endauth
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
            @auth
                @if(\Auth::user()->role_id==1)
                    <a href="{{url('createuser')}}"><button class="btn btn-primary"><i class="material-icons left">people</i> Create User</button></a>
                    <button class="btn btn-primary"><i class="material-icons left">import_export</i> Export  List</button>
                @endif
            @endauth
        </div>
@endsection

{{-- Modal of delete user --}}
<div class="modal fade" tabindex="-1" role="dialog" id="delete">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete User</h5>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit"  class="btn btn-primary">Yes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  {{-- end of modal delete user --}}

  {{-- Modal view user   --}}
  <div class="modal fade" id="ViewDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">View Detail information of User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <span><b>First Name: </b></span><td>{{$item->firstname}}</td><br><br>
                    <span><b>Last Name: </b></span><td>{{$item->lastname}}</td><br><br>
                    <span><b>Email: </b></span><td>{{$item->email}}</td><br><br>
                    @if($item->role_id == 1)
                    <span><b>Role User: </b></span><td>Admin</td>
                    @else
                    <span><b>Role User: </b></span><td>Normal</td>
                    @endif  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      {{-- end of modal user --}}
  <script src="{{asset('Js/app.js')}}" ></script>
   


