@extends('layouts.app')

@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="display-5 fw-bold text-light text-uppercase"><br><br><span class="fs-1">{{ $package->name }}</span></div>
    </div>
</div>

<div class="container py-4">
    <form method="POST" action="/event-booking/{{ $user->id }}">
        <div class="row justify-content-center my-5">
            @csrf
            <div class="mb-3 col-md-12">
                <label for="title_id" class="col-form-label required">Select title:</label>
                 @if ($titles->count() > 0)
                    @foreach ($titles as $item)
                        <div class="form-check">
                            <input class="form-check-input @error('title_id') is-invalid @enderror" type="radio" name="title_id" id="title_id_no" value="0" {{ old('title_id') == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="title_id_no">{{ $item->name }}</label>
                        </div>
                        @error('title_id')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    @endforeach
                @endif
            </div>
            <div class="mb-3 col-md-4">
                <label for="first_name" class="col-form-label required">First Name:</label>
                <input value="{{ $user->first_name }}" id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" required>
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-md-4">
                <label for="middle_name" class="col-form-label">Middle Name:</label>
                <input value="{{ $user->middle_name }}" id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" required>
                @error('middle_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-md-4">
                <label for="last_name" class="col-form-label required">Last Name:</label>
                <input value="{{ $user->last_name }}" id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" required>
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="col-form-label required">Email Address:</label>
                <input value="{{ $user->email }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-md-6">
                <label for="phone" class="col-form-label required1">Phone:</label>
                <input value="{{ $user->phone }}" id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" required>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-md-12">
                <label for="institution" class="col-form-label">Institution:</label>
                <input value="{{ $user->institution }}" id="institution" type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" required>
                @error('institution')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-md-12">
                <label for="physical_address" class="col-form-label">Physical Address (Use institution or office address):</label>
                <input value="{{ $user->physical_address }}" id="physical_address" type="text" class="form-control @error('physical_address') is-invalid @enderror" name="physical_address" required>
                @error('physical_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-md-12">
                <label for="country_id" class="col-form-label required">Country (Where your country_id is located):</label>
                <select value="{{ $user->country_id }}" id="country_id" type="text" class="form-control @error('country_id') is-invalid @enderror" name="country_id" required>
                    <option value="0" disabled="true" selected="true">--- Select Country ---</option>
                    @if ($countries->count() > 0)
                        @foreach ($countries as $item2)
                            <option value="{{ $item2->id }}">{{ $item2->name }}</option>
                        @endforeach
                    @endif
                </select>
                @error('country_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-md-12">
                <label for="position_id" class="col-form-label required">Position:</label>
                <select value="{{ $user->position_id }}" id="position_id" type="text" class="form-control @error('position_id') is-invalid @enderror" name="position_id" required>
                    <option value="0" disabled="true" selected="true">--- Select Position ---</option>
                    @if ($positions->count() > 0)
                        @foreach ($positions as $item3)
                            <option value="{{ $item3->id }}">{{ $item3->name }}</option>
                        @endforeach
                    @endif
                </select>
                @error('position_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">@method('PUT') Submit Now</button>
            </div>
        </div>
    </form>
</div>

@endsection
