@extends('layouts.adminLTE')

@section('content')

    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Users</li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create User</h3>
                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('users.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="first_name" class="col-form-label required">First Name:</label>
                                    <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}"
                                        class="form-control @error('first_name') is-invalid @enderror" required
                                        autocomplete="first_name">
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="col-form-label required">Last Name:</label>
                                    <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}"
                                        class="form-control @error('last_name') is-invalid @enderror" required
                                        autocomplete="last_name">
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Email:</label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror" required
                                        autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-form-label required">Phone:</label>
                                    <input id="phone" type="tel" name="phone" value="{{ old('phone') }}"
                                        class="form-control @error('phone') is-invalid @enderror" required
                                        autocomplete="phone">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="role_id" class="col-form-label required">Role:</label>
                                    <select id="role_id" type="text"
                                        class="form-control @error('role_id') is-invalid @enderror" name="role_id"
                                        value="{{ old('role_id') }}" required>
                                        <option value="0" disabled="true" selected="true">--- Select Role
                                            ---
                                        </option>
                                        @if ($roles->count() > 0)
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('role_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password:</label>
                                    <input id="password" type="password" name="password" value="{{ old('password') }}"
                                        class="form-control @error('password') is-invalid @enderror" required
                                        autocomplete="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="text-end my-3">
                                    <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
