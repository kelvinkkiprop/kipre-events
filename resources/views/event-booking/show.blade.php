@extends('layouts.app')

@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="display-5 fw-bold text-light text-uppercase"><br><br><span class="fs-1">{{ $package->name }}</span></div>
    </div>
</div>

<div class="container py-4">
    <form method="POST" action="/event-booking/{{ $package->id }}" enctype="multipart/form-data">
        <div class="row justify-content-center my-5">
            @csrf
            <div class="mb-3 col-md-12">
                <label for="title_id" class="col-form-label required">Select title:</label>
                 @if ($titles->count() > 0)
                    @foreach ($titles as $item)
                        <div class="form-check">
                            <input class="form-check-input @error('title_id') is-invalid @enderror" type="radio" name="title_id" id="title_id_no" value="{{ $item->id }}">
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
            <div class="mb-3 col-md-12" id="other_position_wrapper">
                <label for="other_position" class="col-form-label">Specify Position:</label>
                <input value="{{ $user->other_position }}" id="other_position" type="text" class="form-control @error('other_position') is-invalid @enderror" name="other_position">
                @error('other_position')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @if($package->id==2 || $package->id==3)
            <div class="mb-3 col-md-12">
                <label for="student_id" class="col-form-label">Upload Student Confirmation Document e.g. Student ID, Letter from Learning Institution etc.:</label>
                <input value="{{ $user->student_id }}" id="student_id" type="file" class="form-control @error('student_id') is-invalid @enderror" name="student_id">
                @error('student_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @endif
            <div class="mb-3 col-md-12">
                <label for="mode_of_attendance_id" class="col-form-label required">Mode of Attendance:</label>
                @if ($modes->count() > 0)
                    @foreach ($modes as $item)
                        <div class="form-check">
                            <input class="form-check-input @error('mode_of_attendance_id') is-invalid @enderror" type="radio" name="mode_of_attendance_id" id="mode_of_attendance_id" value="{{ $item->id }}">
                            <label class="form-check-label" for="mode_of_attendance_id">{{ $item->name }}</label>
                        </div>
                        @error('mode_of_attendance_id')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    @endforeach
                @endif
            </div>
            <div class="mb-3 col-md-12">
                <label for="will_present" class="col-form-label required">Would you like to present at the Conference?:</label>
                <div class="form-check">
                    <input class="form-check-input @error('will_present') is-invalid @enderror" type="radio" name="will_present" id="will_present" value="Yes, Poster" {{ old('will_present') == 'Yes, Poster' ? 'checked' : '' }}>
                    <label class="form-check-label" for="will_present">Yes, Poster</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input @error('will_present') is-invalid @enderror" type="radio" name="will_present" id="will_present" value="Yes, Talk" {{ old('will_present') == 'Yes, Talk' ? 'checked' : '' }}>
                    <label class="form-check-label" for="will_present">Yes, Talk</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input @error('will_present') is-invalid @enderror" type="radio" name="will_present" id="will_present" value="No" {{ old('will_present') == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label" for="will_present">No</label>
                </div>
                @error('will_present')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row" id="presentation_details">
                <div class="mb-3 col-md-12">
                    <label for="session_to_present_id" class="col-form-label required">Which session would you like to present?:</label>
                    <select value="{{ $user->session_to_present_id }}" id="session_to_present_id" type="text" class="form-control @error('session_to_present_id') is-invalid @enderror" name="session_to_present_id">
                        <option value="0" disabled="true" selected="true">--- Select Session ---</option>
                        @if ($sessions->count() > 0)
                            @foreach ($sessions as $item3)
                                <option value="{{ $item3->id }}">{{ $item3->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('session_to_present_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-md-12">
                    <label for="abstract" class="col-form-label">Upload an abstract (250 words, Times new romans 12, Continuous pros):</label>
                    <input value="{{ $user->abstract }}" id="abstract" type="file" class="form-control @error('abstract') is-invalid @enderror" name="abstract">
                    @error('abstract')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">@method('PUT') Submit Now</button>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Will_Present
        const radios = document.querySelectorAll("input[name='will_present']");
        const details = document.getElementById("presentation_details");
        details.style.display = "none";

        radios.forEach(radio => {
            radio.addEventListener("change", function() {
                if (this.value === "Yes, Poster" || this.value === "Yes, Talk") {
                    details.style.display = "block";
                } else {
                    details.style.display = "none";
                }
            });
        });

        const select = document.getElementById("position_id");
        const wrapper = document.getElementById("other_position_wrapper");
        wrapper.style.display = "none";
        function toggleOther() {
            if (select.value === "9") {
                wrapper.style.display = "block";
            } else {
                wrapper.style.display = "none";
                document.getElementById("other_position").value = ""; // clear when hidden
            }
        }

        // Run
        toggleOther();
        select.addEventListener("change", toggleOther);
    });
</script>

@endsection
