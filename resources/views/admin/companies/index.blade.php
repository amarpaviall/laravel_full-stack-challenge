@extends('admin.master')

@section('main')
<section class="section-5 bg-2">
    <div class="container py-5">
            <h3>Companies</h3>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('admin.companies.create')}}" class="btn btn-primary mb-3">Create New Company</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th class="table-description">Descripation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->location }}</td>
                        <td>{{ $company->description }}</td>
                        <td>
                            <a href="{{ route('admin.companies.show', $company->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('admin.companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST" style="display:inline-block;" x-data="{ show: false }">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" @click="show = !show">Delete</button>
                                <div x-show="show" style="position: absolute; background: white; border: 1px solid #ccc; padding: 10px; z-index: 10;">
                                    <p>Are you sure you want to delete?</p>
                                    <button type="submit" class="btn btn-danger">Yes</button>
                                    <button type="button" class="btn btn-secondary" @click="show = false">No</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
 </section>
@endsection

