@extends('welcome')

@section('welcome')
    <div class="card" style="background-color: rgba(243,225,178,0.24);">
        <div class="card-body shadow-lg" style="background-color: transparent;">
            <h4 class="card-title" style="color: rgb(0,0,0);">Login</h4>
            <h6 class="text-muted card-subtitle mb-2">.</h6>
            <form method="POST" action={{ route ('login') }}>
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text"><i
                                    class="far fa-envelope" style="font-size: 24px;"></i></span></div>
                    <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" required autofocus type="email" placeholder="Email / Username">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('email') }}</strong>
           </span>
                    @endif

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-key"
                                                                                       style="font-size: 24px;"></i></span>
                    </div>
                    <input id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" type="password" placeholder="Password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
                    @endif

                </div>

                <div class="row">
                    <div class="col text-left">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember"
                                   name="remember"  {{ old('remember') ? 'checked' : '' }}/>
                            <label class="form-check-label" for="formCheck-1">Remember me</label></div>
                    </div>
                    <div class="col text-center"><button class="btn btn-primary" type="submit" style="margin-bottom: 9px;"><i class="fas fa-sign-in-alt" style="font-size: 16px;"></i> Login</button></div>
                </div>

            </form>
            <div class="col text-right"><a href="/register">New User? Sigup</a></div>
            <div class="col">
                <div class="row">
                    <div class="col text-right" style="margin-top: 11px;"><a class="text-right" href="{{ route ('password.request')}}">Forgot
                        Password ?</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
