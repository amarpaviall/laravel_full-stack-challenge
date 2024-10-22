
@extends('admin.master')

@section('main')
<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                @include('message')
                <div class="card border-0 shadow mb-4">
                   <div class="card-body dashboard text-center">
                        <p class="h2">Welcome Administrator!!</p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


