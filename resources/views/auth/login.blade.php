@extends('auth.contenido')

@section('login')
<div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card-group mb-0">
          <div class="card p-4" style="background:#89c4e9;">
          <form class="form-horizontal was-validated" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
          {{ csrf_field() }}
              <div class="card-body text-center">
              <h1> Optica Vanguardia</h1>
            
              <div class="form-group row">
                          

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Usuario">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
              <div class="form-group mb-4{{$errors->has('password' ? 'is-invalid' : '')}}">
               
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary form-control ">Acceder</button>
                </div>
              </div>
            </div>
          </form>
          </div>
          
        </div>
      </div>
    </div>
@endsection
