@extends('layout.pages.app')

@section('layout')

<!-- Main Content -->
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h3 class="text-dark fw-bold">About Us</h3>
            <p class="text-muted">Meet our dedicated team behind the MDC Accounting System</p>
        </div>
    </div>

    <!-- Team Members Section -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Team Member 1 -->

        @foreach($members as $member)
        <div class="col mb-3">
            <div class="card shadow-sm rounded">
                {{-- <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Team Member 1"> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $member['name'] }}</h5>
                    <p class="card-text text-muted">{{ $member['role'] }}</p>
                </div>
            </div>
        </div>
        @endforeach

            {{-- <!-- Team Member 2 -->
            <div class="col">
                <div class="card shadow-sm rounded">
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Team Member 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text text-muted">Lead Developer</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col">
                <div class="card shadow-sm rounded">
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Team Member 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Alice Johnson</h5>
                        <p class="card-text text-muted">UI/UX Designer</p>
                    </div>
                </div>
            </div> --}}

        <!-- More Team Members -->
        <!-- Add more members as needed following the same structure -->
    </div>
</div>

<!-- Custom CSS -->
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Roboto', sans-serif;
    }

    .card {
        border: none;
        overflow: hidden;
    }

    .card-img-top {
        transition: transform 0.3s ease;
    }

    .card:hover .card-img-top {
        transform: scale(1.1);
    }

    .card-body {
        background-color: #ffffff;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
    }

    .text-muted {
        color: #aaa;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
</style>

@endsection
