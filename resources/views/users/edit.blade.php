
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

                            <form method="POST" action="{{ route('users.update', $item->id) }}">
                                @csrf

                                <div class="form-group">
                                    <label for="first_name" class="col-form-label required">First Name:</label>
                                    <input id="first_name" type="text" name="first_name" value="{{ $item->first_name }}"
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
                                    <input id="last_name" type="text" name="last_name" value="{{ $item->last_name }}"
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
                                    <input id="email" type="email" name="email" value="{{ $item->email }}"
                                        class="form-control @error('email') is-invalid @enderror" required
                                        autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="role_id" class="col-form-label required">Role:</label>
                                    <select id="role_id" type="text"
                                        class="form-control @error('role_id') is-invalid @enderror" name="role_id"
                                        value="{{ $item->role_id }}" required>
                                        <option value="0" disabled="true" selected="true">--- Select Role
                                            ---
                                        </option>
                                        @if ($roles->count() > 0)
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    @if ($item->role_id == $role->id) selected="true" @endif>
                                                    {{ $role->name }}
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
                                    <label for="phone" class="col-form-label required">Phone:</label>
                                    <input id="phone" type="tel" name="phone" value="{{ $item->phone }}"
                                        class="form-control @error('phone') is-invalid @enderror" required
                                        autocomplete="phone">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="status_id" class="col-form-label required">Status:</label>
                                    <select id="status_id" type="text"
                                        class="form-control @error('status_id') is-invalid @enderror" name="status_id"
                                        value="{{ $item->status_id }}" required>
                                        <option value="0" disabled="true" selected="true">--- Select Status
                                            ---
                                        </option>
                                        @if ($statuses->count() > 0)
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }}"
                                                    @if ($item->status_id == $status->id) selected="true" @endif>
                                                    {{ $status->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('status_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password:</label>
                                    <input id="password" type="password" name="password" value="{{ $item->password }}"
                                        class="form-control @error('password') is-invalid @enderror" required
                                        autocomplete="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="reset_password"
                                            id="reset_password" {{ old('reset_password') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="reset_password">Reset password</label>
                                    </div>
                                </div>

                                <div class="text-end my-3">
                                    <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">@method('PUT')Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
