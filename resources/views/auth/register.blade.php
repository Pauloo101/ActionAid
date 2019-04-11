@extends('welcome')

@section('welcome')
    <form method="POST" action="{{ route('register')}}">
    <div class="card" style="background-color: rgba(243,225,178,0.24);">
        <div class="card-body shadow-lg" style="background-color: transparent;">
            <h4 class="card-title" style="color: rgb(0,0,0);">Register</h4>
            <h6 class="text-muted card-subtitle mb-2">.</h6>

                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-user" style="font-size: 24px;"></i>
                        </span>
                    </div>
                    <input type="text" placeholder="Name"
                           class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name" value="{{ old('name') }}" required autofocus/>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-envelope" style="font-size: 24px;">
                            </i>
                        </span>
                    </div>
                    <input type="email" placeholder="Email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                           value="{{ old('email') }}" required/>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-key" style="font-size: 24px;">
                            </i></span>
                    </div>
                    <input type="password" placeholder="Password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                           required/>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-key" style="font-size: 24px;">
                            </i>
                        </span>
                    </div>
                    <input type="password" placeholder="Confirm Password" class="form-control"
                           name="password_confirmation" required/>
                </div>
                <button class="btn btn-primary" type="submit" style="margin-bottom: 9px;"> Register</button>
            <div class="row">
                <div class="col text-right" style="margin-top: 11px;">
                    <a href="/login" class="text-right"> Already a member? sign in </a>
                </div>
            </div>
        </div>
    </div>
        </form>
@endsection
