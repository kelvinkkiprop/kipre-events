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
                    <li class="breadcrumb-item active" aria-current="page">Registrations</li>
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
                            <div class="card-title">
                                {{-- <a href="{{ route('users.create') }}" class="btn btn-danger btn-sm">
                                    <i class="bi bi-plus-circle-fill"></i> Add New
                                </a> --}}
                            </div>
                            <div class="card-tools">
                                <form method="POST" action="search-users">
                                    @csrf
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input id="search_term" type="text" name="search_term" value="{{ old('search_term') }}" class="form-control @error('search_term') is-invalid @enderror" placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                        @error('search_term')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">

                            @if ($items->count() > 0)
                                <div class="table-responsive p-0">
                                    <table class="table table-striped text-nowrap1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Event</th>
                                                <th>User</th>
                                                <th>Package</th>
                                                <th>Will Present</th>
                                                <th>Abstract</th>
                                                <th>Student ID</th>
                                                <th>Status</th>
                                                <th>Created</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr>
                                                    <td>{{ ($items->currentpage() - 1) * $items->perpage() + $loop->index + 1 }}.
                                                    </td>
                                                    <td>
                                                        @if ($item->event)
                                                            {{ $item->event->name }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->user)
                                                            {{ $item->user->name }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->package)
                                                            {{ $item->package->name }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->will_present }}</td>
                                                    <td><a href="{{ $item->abstract_url }}" target="_blank"><i class="bi bi-eye-fill"></i></a></td>
                                                    <td><a href="{{ $item->student_id_url }}" target="_blank"><i class="bi bi-eye-fill"></i></a></td>
                                                    <td>
                                                        @if ($item->status)
                                                            <span
                                                                class="badge rounded-pill @if ($item->status_id == 1) bg-primary @elseif ($item->status_id == 2) bg-warning @else bg-danger @endif badge-pill">{{ $item->status->name }}</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('d M, Y') }}</td>
                                                    {{-- <td>
                                                        <div class="text-nowrap">
                                                            <a class="btn btn-outline-dark btn-sm mr-1"  href="{{ route('users.show', $item->id) }}" title="Show">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a>
                                                            <a class="btn btn-dark btn-sm mr-1"  href="{{ route('users.edit', $item->id) }}" title="Edit">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </a>
                                                            @if ($item->created_by == Auth::user()->id || Auth::user()->role_id == 1)
                                                                <a href="#" class="btn btn-danger btn-sm" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                                                    <i class="bi bi-trash-fill"></i>
                                                                </a>
                                                            @endif
                                                        </div>
                                                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-danger text-white">
                                                                        <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Confirm Delete</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                        <p><i class="bi bi-exclamation-triangle-fill display-4"></i></p>
                                                                        <p><strong>Delete item?</strong></p>
                                                                    </div>
                                                                    <div class="modal-footer bg-dark">
                                                                        <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">No</button>
                                                                        <form method="POST" action="{{ route('users.destroy', $item->id) }}">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger btn-sm">Yes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="p-5 text-center text-muted">No items</p>
                            @endif

                            <p class="mt-1">
                                {{ $items->links() }}
                            </p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
