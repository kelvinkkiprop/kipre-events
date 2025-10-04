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
                    <li class="breadcrumb-item active" aria-current="page">Show</li>
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
                            <h3 class="card-title">Show User</h3>
                        </div>
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name:</label>
                                <div class="col-md-8">
                                    <label
                                        class="col-form-label font-weight-normal text-black-75">{{ $item->name }}</label>
                                </div>
                            </div>

                            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
