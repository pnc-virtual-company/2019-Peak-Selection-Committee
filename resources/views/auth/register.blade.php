
@extends('layouts.app')

@section('pageTitle', 'Register')

@section('content')
<div class="container mt-4">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">
<a href="{{ route('login') }}" title="Go to Login" class="text-primarys">
<i class="material-icons">arrow_back</i>
</a>
<h2 class="text-center">{{ _('Register a User') }}</h2>
</div>

<div class="card-body">
<form method="POST" action="{{ route('register') }}">
@csrf
<div class="container">
<div class="form-group row mb-4">
<div class="col-md-6">
{{-- <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ _('Firstname') }}</label> --}}
<input id="firstname" placeholder="Firstname" type="text" class="form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

@if ($errors->has('firstname'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('firstname') }}</strong>
</span>
@endif
</div>
<div class="col-md-6">
{{-- <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ _('Lastname') }}</label> --}}
<input id="lastname" type="text" placeholder="Lastname" class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required>
@if ($errors->has('lastname'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('lastname') }}</strong>
</span>
@endif 
</div>
</div>
<div class="form-group mb-4">
{{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ _('E-Mail Address') }}</label> --}}

<input id="email" type="email" placeholder="Email Address" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

@if ($errors->has('email'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>



<div class="form-group mb-4">