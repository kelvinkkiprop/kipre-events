@extends('layouts.app')

@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="display-5 fw-bold text-light"><br><br><span class="fs-1">MY ACCOUNT</span></div>
    </div>
</div>

<div class="container py-4">
    <div class="row justify-content-center my-5">
        <div class="col-md-4">
            <div class="text-center p-3">
                <i class="bi bi-person-circle display-1 text-primary mb-2"></i>
                <h1 class="h3 mb-1">{{ $user->name }}</h1>
                <div class="text-muted">{{ $user->email }}</div>
            </div>
            <div class="d-flex align-items-start">
                <div class="list-group w-100" id="list-tab" role="tablist">
                    <button class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center"
                        id="list-home-list" data-bs-toggle="list" data-bs-target="#list-home" role="tab" aria-controls="list-home">
                        Account <i class="bi bi-person-circle"></i>
                    </button>
                    <button class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                        id="list-profile-list" data-bs-toggle="list" data-bs-target="#list-profile" role="tab" aria-controls="list-profile">
                        Change Password <i class="bi bi-lock-fill"></i>
                    </button>
                    <button class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                        id="list-settings-list" data-bs-toggle="list" data-bs-target="#list-settings" role="tab" aria-controls="list-settings">
                        Delete Account <i class="bi bi-trash-fill"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="px-4">
                        <h3><i class="bi bi-person-circle"></i> Account</h3>
                        <form method="POST" action="/account/{{ Auth::user()->id }}">
                            @csrf
                            <div class="mb-3">
                                <label for="first_name" class="col-form-label">First Name:</label>
                                <input value="{{ $user->first_name }}" id="first_name" type="text"
                                       class="form-control @error('first_name') is-invalid @enderror" name="first_name" required>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="col-form-label">Last Name:</label>
                                <input value="{{ $user->last_name }}" id="last_name" type="text"
                                       class="form-control @error('last_name') is-invalid @enderror" name="last_name" required>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="col-form-label">Email Address:</label>
                                <input value="{{ $user->email }}" id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Update Account</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="px-4">
                        <h3><i class="bi bi-lock-fill"></i> Change Password</h3>
                        <form method="POST" action="/password/{{ Auth::user()->id }}">
                            @csrf
                            <div class="mb-3">
                                <label for="current_password" class="col-form-label">Current Password:</label>
                                <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required>
                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password:</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="col-form-label">Confirm Password:</label>
                                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="px-4">
                        <h3><i class="bi bi-trash-fill"></i> Delete Account</h3>
                        <form method="POST" action="/delete-account/{{ Auth::user()->id }}">
                            @csrf
                            <div class="text-muted">
                                Are you sure you want to delete your account? This will erase all of your
                                account data from the site. To delete your account enter your password below.
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password:</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Delete Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
