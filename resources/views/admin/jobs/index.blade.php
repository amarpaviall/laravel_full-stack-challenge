@extends('admin.master')

@section('main')
<div class="container py-5">
    <h3 class="mb-4">Job Listings</h3>
    @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
    <!-- Filters Section -->
    {{-- <form method="GET" action="{{ route('admin.jobs') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <select name="position_type" class="form-control">
                    <option value="">Position Type</option>
                    <option value="remote" {{ request('position_type') == 'remote' ? 'selected' : '' }}>Remote</option>
                    <option value="in-person" {{ request('position_type') == 'in-person' ? 'selected' : '' }}>In-person</option>
                </select>
            </div>

            <div class="col-md-3">
                <input type="text" name="salary" class="form-control" placeholder="Minimum Salary" value="{{ request('salary') }}">
            </div>

            <div class="col-md-3">
                <select name="company" class="form-control">
                    <option value="">Select Company</option>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}" {{ request('company') == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-3">
                <input type="text" name="location" class="form-control" placeholder="Location" value="{{ request('location') }}">
            </div>

            <div class="col-md-12 mt-3">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form> --}}
    <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary mb-3">Create New Job</a>

    <!-- Jobs Listing -->
    @if($jobs->count())
        <div class="row">
            @foreach ($jobs as $job)
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $job->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $job->company->name }} - {{ $job->location }}</h6>
                            <p class="card-text">{{ Str::limit($job->description, 100) }}</p>
                            <p class="card-text"><strong>Salary:</strong> ${{ number_format($job->salary, 2) }}</p>
                            <a href="{{ route('admin.jobs.show', $job->id) }}" class="btn btn-info">View Details</a>
                            <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-warning">Edit Job</a>
                            <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" style="display:inline-block;" x-data="{ show: false }">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" @click="show = !show">Delete</button>

                                <!-- This div will be hidden until show is true -->
                                <div x-show="show" style="position: absolute; background: white; border: 1px solid #ccc; padding: 10px; z-index: 10;">
                                    <p>Are you sure you want to delete?</p>
                                    <button type="submit" class="btn btn-danger">Yes</button>
                                    <button type="button" class="btn btn-secondary" @click="show = false">No</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $jobs->links() }}
        </div>
    @else
        <p>No job postings found.</p>
    @endif
</div>
@endsection

