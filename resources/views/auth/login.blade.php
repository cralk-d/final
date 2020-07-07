@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row justify-content-center">
           <div class="card col-lg-6 card-primary card-outline">
            <div class="card-body">
                <h4 class="d-flex align-content-center">LOGIN</h4><hr>
                <form method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-block btn-primary">
                                <img src="icons/lock.svg" height="24" width="24">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="col-md-6">
                            @if (Route::has('password.request'))
                                <button class="btn btn-block btn-outline-warning" href="{{ route('password.request') }}">
                                    <img src="icons/question-circle.svg" height="24" width="24">
                                    {{ __('Forgot Your Password?') }}
                                </button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
       </div> 
    </div>
</div>

@endsection
