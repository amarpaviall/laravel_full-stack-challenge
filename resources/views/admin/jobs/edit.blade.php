@extends('admin.master')

@section('main')
<div class="container py-5">
    <h2>Edit Job Posting</h2>

    <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST">
        @csrf

        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Job Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $job->title }}" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ $job->location }}" required>
        </div>

        <div class="mb-3">
            <label for="position_type" class="form-label">Position Type</label>
            <select name="position_type" id="position_type" class="form-control" required>
                <option value="remote" {{ $job->position_type == 'remote' ? 'selected' : '' }}>Remote</option>
                <option value="in-person" {{ $job->position_type == 'in-person' ? 'selected' : '' }}>In-Person</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" name="salary" id="salary" class="form-control" value="{{ $job->salary }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Job Description</label>
            <textarea name="description" id="description" class="form-control destextarea" rows="5" required>{{ $job->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Job</button>
    </form>
</div>
@endsection
