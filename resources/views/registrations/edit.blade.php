
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
                    <li class="breadcrumb-item" aria-current="page">Registrations</li>
                    <li class="breadcrumb-item active" aria-current="page">Process</li>
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
                            <h3 class="card-title">Process Registration</h3>
                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('event-registrations.update', $item->id) }}">
                                @csrf

                                <div class="form-group">
                                    <label for="title" class="col-form-label required">Title:</label>
                                    <input id="title" type="text" name="title" value="@if($item->event){{ $item->event->title }}@endif"
                                        class="form-control @error('title') is-invalid @enderror" required
                                        autocomplete="title" readonly>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="user" class="col-form-label required">User:</label>
                                    <input id="user" type="tel" name="user" value="@if( $item->user){{ $item->user->name }}@endif"
                                        class="form-control @error('user') is-invalid @enderror" required
                                        autocomplete="user" readonly>
                                    @error('user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="status_id" class="col-form-label required">Payment Status:</label>
                                    <select id="status_id" type="text"
                                        class="form-control @error('status_id') is-invalid @enderror" name="status_id"
                                        value="{{ $item->status_id }}" required>
                                        <option value="0" disabled="true" selected="true">--- Select Status  ---
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

                                <div class="text-end my-3">
                                    <a href="{{ route('event-registrations.index') }}" class="btn btn-danger">Cancel</a>
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
