@extends('admin.master')

@section('main')
<section class="section-5 bg-2">
    <div class="container py-5">
    @if($company)
        <h3>{{ $company->name }}</h3>
        <h4>Location: {{ $company->location }}</h4>
        <p>{{ $company->description }}</p>
        @else
        <p>No company found.</p>
    @endif
    </div>
 </section>
@endsection
