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
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ $totalUsers }}</h3>
                            <p>Users</p>
                        </div>
                        <i class="small-box-icon bi bi-people-fill display-1"></i>
                        <a href="/users" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <h3>{{ $totalEventRegistrations }}</h3>
                            <p>Registrations</p>
                        </div>
                        <i class="small-box-icon bi bi-calendar-fill display-1"></i>
                        <a href="/event-registrations" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{ $totalPayments }}</h3>
                            <p>Payments</p>
                        </div>
                        <i class="small-box-icon bi bi-cash display-1"></i>
                        <a href="/event-registrations" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>{{ $totalEvents }}</h3>
                            <p>Events</p>
                        </div>
                        <i class="small-box-icon bi bi-alarm-fill display-1"></i>
                        <a href="/event-registrations" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Events Registrations</h3>
                </div>
                <div class="card-body">

                    @if ($recentEventRegistrations->count() > 0)
                        <div class="table-responsive p-0">
                            <table class="table table-striped text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Package</th>
                                        <th>Cost</th>
                                        <th>Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recentEventRegistrations as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}.</td>
                                            <td>@if($item->user){{ $item->user->name }}@endif</td>
                                            <td>@if($item->package){{ $item->package->name }}@endif</td>
                                            <td>@if($item->package){{ $item->package->currency_type }}. {{ $item->package->cost }}@endif</td>
                                            <td>{{ Carbon\Carbon::parse($item->created_at)->format('d M, y') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="p-5 text-muted text-center">No items</p>
                    @endif

                </div>
            </div>


        </div>
    </div>

@endsection

