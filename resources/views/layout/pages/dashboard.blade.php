@extends('layout.pages.app')

@section('layout')

<!-- Main Content -->
<div class="d-flex">
    {{-- <!-- Sidebar -->
    <div class="bg-dark text-white p-3 vh-100" style="width: 250px;">
        <h3 class="text-center mb-4"><i class="bi bi-building me-2"></i>Dashboard</h3>
        <ul class="nav flex-column">
            <li class="nav-item mb-3">
                <a class="nav-link text-white" href="{{ route('dashboard.index') }}">
                    <i class="bi bi-house me-2"></i> Overview
                </a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link text-white" href="{{ route('worksheet.index') }}">
                    <i class="bi bi-journal-text me-2"></i> Worksheet
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
            </li>
        </ul>
    </div> --}}

    <!-- Main Content Area -->
    <div class="container-fluid p-4">
        <div class="header mb-4">
            <h1 class="display-5">Account Overview</h1>
            <p class="text-muted">Summary of financial data for the current period.</p>
        </div>

        <!-- Cards Section -->
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        Trial Balance
                    </div>
                    <div class="card-body">
                        <p class="fs-5 mb-2"><strong>Debit:</strong> ₱{{ number_format($totalDebitTrialBalance) }}</p>
                        <p class="fs-5"><strong>Credit:</strong> ₱{{ number_format($totalCreditTrialBalance) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-success text-white">
                        Adjustments
                    </div>
                    <div class="card-body">
                        <p class="fs-5 mb-2"><strong>Debit:</strong> ₱{{ number_format($totalDebitAdjustments) }}</p>
                        <p class="fs-5"><strong>Credit:</strong> ₱{{ number_format($totalCreditAdjustments) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-info text-white">
                        Adjusted Trial Balance
                    </div>
                    <div class="card-body">
                        <p class="fs-5 mb-2"><strong>Debit:</strong> ₱{{ number_format($totalDebitAdjustedTrialBalance) }}</p>
                        <p class="fs-5"><strong>Credit:</strong> ₱{{ number_format($totalCreditAdjustedTrialBalance) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-warning text-dark">
                        Income Statement
                    </div>
                    <div class="card-body">
                        <p class="fs-5 mb-2"><strong>Debit:</strong> ₱{{ number_format($totalDebitIncomeStatement) }}</p>
                        <p class="fs-5"><strong>Credit:</strong> ₱{{ number_format($totalCreditIncomeStatement) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-danger text-white">
                        Balance Sheet
                    </div>
                    <div class="card-body">
                        <p class="fs-5 mb-2"><strong>Debit:</strong> ₱{{ number_format($totalDebitBalanceSheet) }}</p>
                        <p class="fs-5"><strong>Credit:</strong> ₱{{ number_format($totalCreditBalanceSheet) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9fafc;
    }
    .nav-link {
        font-size: 1.1rem;
        transition: background 0.3s;
    }
    .nav-link:hover {
        background-color: #495057;
        border-radius: 4px;
    }
    .card-header {
        font-weight: bold;
    }
</style>

@endsection
