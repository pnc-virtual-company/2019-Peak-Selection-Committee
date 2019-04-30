@extends('template')

@section('content')

@include('validation-errors')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@lang('Edit a user')</div>

                <div class="card-body">

                    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        <!-- Simulate PUT or PATCH verb, 
                             See: https://laravel.com/docs/5.7/controllers#resource-controllers  //-->
                        @method('PUT')
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="fname">@lang('First Name')</label>
                            <input type="text" class="form-control" id="fname" name="firstname" value="{{ $user->firstname }}">
                        </div>

                        <div class="form-group">
                            <label for="lname">@lang('Last Name')</label>
                            <input type="text" class="form-control" id="name" name="lastname" value="{{ $user->lastname }}">
                        </div>

                        <div class="form-group">
                            <label for="email">@lang('Email')</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="roles[]">User Role: </label>
                            {{-- <select class="form-control" id="roles" name="roles[]" multiple size="5"> --}}
                                {{-- @foreach ($roles as $role) --}}
                                    {{-- <option value="{{ $role->id }}" @if(in_array($role->id, $user->roleIds)) selected @endif>{!! $role->name !!}</option> --}}
                                {{-- @endforeach --}}
                            @foreach ($roles as $role) 
                                @if ($role->id == $user->role_id)
                                    <label class="radio-inline">
                                        <input type="radio" value="{{ $role->id }}" name="roles" checked> {{$role->name}}
                                    </label>                                        
                                @else
                                    <label class="radio-inline">
                                        <input type="radio" value="{{ $role->id }}" name="roles"> {{$role->name}}
                                    </label>                                        
                                @endif
                            @endforeach
                            {{-- </select> --}}
                        </div>

                        <input type="submit" class="btn btn-primary" value="Save" />

                        <a href="{{url('/users')}}" class="btn btn-danger">Back</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script type="text/javascript">
//On document ready, 
$(function() {

});
</script>
@endpush
