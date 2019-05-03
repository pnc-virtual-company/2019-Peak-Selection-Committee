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
                          <a href="{{route('users.show', $item->id)}}" class="text-success" data-toggle="modal" data-id="{{$item['id']}}" data-target="#exampleModalCenter"><i class="large material-icons">visibility</i></a>
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


  <!-- Modal of View detail -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Detail information of User</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><b>Name:</b> {{$item->firstname}} {{$item->lastname}}</p>
        <p><b>Email:</b> {{$item->email}} </p>
        <p><b>Role:</b> 
              @if($item->role_id == 1)
                  <td>Admin</td>
              @else
                  <td>Normal</td>
              @endif  
          </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

{{-- end of modal view detail --}}

<script src="{{asset('Js/app.js')}}" ></script>

<script>
  $('#delete,#exampleModalCenter').on('show.bs.modal', function (event) { 
    var button = $(event.relatedTarget);
    var id = button.data('id');  
    var modal = $(this);
    var url="{{url('users')}}/"+id;
    console.log(url);
    $('#fid').attr('action',url); 
})
</script>

  {{-- <script src="{{asset('Js/app.js')}}" ></script> --}}

    <script>
    
    
  </script>
   



