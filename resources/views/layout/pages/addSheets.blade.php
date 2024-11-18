@extends('layout.pages.app')

@section('layout')

<style>
    .form-section {
        margin-bottom: 1.5rem; /* Add space between sections */
    }

    .form-section h5 {
        font-size: 14px;
        margin-bottom: 0.5rem; /* Add spacing below the label */
    }

    .form-control {
        width: 100%; /* Ensure full width for inputs */
    }

    .btn {
        display: block;
        width: 100%; /* Full-width button */
        max-width: 200px; /* Optional: Limit button width */
        margin: 1.5rem auto 0; /* Center the button */
    }
</style>

<!-- Main Content -->
<div class="container mt-4">
    <h3 class="text-dark font-weight-bold">ADD SHEETS</h3>
    <p class="text-secondary">FOR THE MONTH ENDED NOVEMBER 30, 2026</p>

    @if(session('success')) 
        <h5 class="text-success">
            {{ session('success') }}
        </h5>
    @else
        <h5 class="text-danger">
            {{ session('failed') }}
        </h5>
    @endif

    @php
        $categories = [
            'Trial Balance' => 'TrialBalance',
            'Adjustments' => 'Adjustments',
            'Adjusted Trial Balance' => 'AdjustedTrialBalance',
            'Income Statement' => 'IncomeStatement',
            'Balance Sheet' => 'BalanceSheet',
        ];
    @endphp

    <form action="{{ route('addSheet.store') }}" method="POST">
        @csrf

        <!-- Account Title -->
        <div class="form-section">
            <h5>Account Title</h5>
            <input type="text" class="form-control" name="accountTitle" placeholder="Enter Account Title" required>
        </div>

        <!-- Categories -->
        @foreach($categories as $label => $name)
            <div class="form-section">
                <h5>{{ $label }}</h5>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" id="debit{{ $name }}" name="debit{{ $name }}" placeholder="Debit">
                    </div>
                    <div class="col mt-2">
                        <input type="text" class="form-control" id="credit{{ $name }}" name="credit{{ $name }}" placeholder="Credit">
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Submit Button -->
        <button class="btn btn-primary" type="submit">Add</button>
    </form>
</div>
@endsection
