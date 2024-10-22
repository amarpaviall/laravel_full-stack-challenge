@extends('admin.master')

@section('main')
<section class="section-5 bg-2">
    <div class="container py-5">
        <h3>Create New Company</h3>

            <form action="{{ route('admin.companies.save') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Company Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripation</label>
                    <textarea name="description" id="description" class="form-control" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
    </div>
 </section>
@endsection
