@extends('admin.master')

@section('main')
<div class="container py-5">
    <h2>{{ $job->title }}</h2>
    <h4>Company: {{ $job->company->name }}</h4>
    <p>Location: {{ $job->location }}</p>
    <p>Position Type: {{ ucfirst($job->position_type) }}</p>
    <p>Salary: ${{ number_format($job->salary, 2) }}</p>
    <p>Description: {{ $job->description }}</p>

    <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-warning">Edit Job</a>
    <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Job</button>
    </form>
</div>
@endsection
