@extends('layouts.app')

@section('content')


<div class="breadcrumb">
    <div class="container">
        <div class="display-5 fw-bold text-light"><br><br><span class="fs-1">CONFIRM PASSWORD</span></div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-0">
                {{-- <div class="card-header">{{ __('Confirm Password') }}</div> --}}

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-0">
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Confirm Password') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
