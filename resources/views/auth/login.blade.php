@extends('layouts.app')

@section('pageTitle', 'Login')

@section('content')



<div class="container">
   <div class="row justify-content-center mt-5">
       <div class="col-md-4">

            @if(Session::has('register'))
                <p class="alert alert-info mb-3 mt-3" id="aRegister">
                    {{ Session::get('register') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </p>
            @endif

           <div class="card">
               <div class="card-body">
                   <img src="{{url('storage/img/logo.png')}}" class="p-3" style="width: 300px;" alt="logo">
                   <hr>
                   <form method="POST" action="{{ route('login') }}">
                       @csrf

                       <div class="form-group">
                           <input id="email" type="email" placeholder="Email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required autofocus>

                           @if ($errors->has('email'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                           @endif
                       </div>

                       <div class="form-group">
                           <input id="password" type="password" placeholder="Password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>

                           @if ($errors->has('password'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('password') }}</strong>
                               </span>
                           @endif
                       </div>


                       <div class="form-group mb-0">

                           <button type="submit" class="btn btn-primary btn-block">
                               {{ __('Login') }}
                           </button>

                           <hr>

                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection
