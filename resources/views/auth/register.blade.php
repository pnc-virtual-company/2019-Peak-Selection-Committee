
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
    <div class="form-group mb-4">
        {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ _('Password') }}</label> --}}
            <input id="password" type="password" placeholder="Password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

@if ($errors->has('email'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-user-plus"></i>
                                {{ _('Register') }}
                            </button>
                    </div>

                  </form>
                  </div>
              </div>
              </div>
          </div>
          </div>

{{--                        
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
