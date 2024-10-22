@extends('admin.master')

@section('main')
<div class="container py-5">
    <h2>Create Job Posting</h2>

    <form action="{{ route('admin.jobs.store') }}" method="POST">
        @csrf

        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Job Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <select name="company_id" id="company" class="form-control" required>
                <option value="">Select Company</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ request('company') == $company->id ? 'selected' : '' }}>
                        {{ $company->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location') }}" required>
        </div>

        <div class="mb-3">
            <label for="position_type" class="form-label">Position Type</label>
            <select name="position_type" id="position_type" class="form-control" required>
                <option value="remote">Remote</option>
                <option value="in-person">In-Person</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" name="salary" id="salary" class="form-control" value="{{ old('salary') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Job Description</label>
            <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Job</button>
    </form>
</div>
@endsection
