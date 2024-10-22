@extends('admin.master')

@section('main')
<section class="section-5 bg-2">
    <div class="container py-5">
        <h3>Edit Company</h3>
            <form action="{{ route('admin.companies.update', $company->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="name" class="form-label">Company Name</label>
                    <input type="text" name="name" value="{{ $company->name }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" value="{{ $company->location }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripation</label>
                    <textarea name="description" id="description" class="form-control destextarea" rows="5">{{ $company->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>

            <a href="{{ route('admin.companies') }}" class="btn btn-primary mt-3">Back to Companies</a>
    </div>
 </section>
@endsection
