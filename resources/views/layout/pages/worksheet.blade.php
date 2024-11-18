@extends('layout.pages.app')

@section('layout')

<!-- Main Content -->
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h3 class="text-dark fw-bold">Worksheet Data</h3>
            <p class="text-muted">MDC Accounting System</p>
            <a href="{{ route('addSheet.index') }}" class="btn btn-primary">
                <i class="bi bi-file-earmark-plus"></i> Add Account
            </a>
        </div>
        <div>
            
        </div>
    </div>

    <!-- Worksheet Data Table -->
    <div id="alertContainer"></div>
    <div class="card shadow-sm rounded">
        <div class="card-body">
            {{-- <span class="badge bg-success mb-3">Del Mundo Landscape Specialist</span> --}}
            <div class="table-responsive">
                <table class="table table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Account Title</th>
                            <th colspan="2">Trial Balance</th>
                            <th colspan="2">Adjustments</th>
                            <th colspan="2">Adjusted Trial Balance</th>
                            <th colspan="2">Income Statement</th>
                            <th colspan="2">Balance Sheet</th>
                        </tr>
                        <tr class="table-secondary">
                            <th></th>
                            <th></th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Debit</th>
                            <th>Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($account as $accounts)
                            <tr>
                                <td>{{ $accounts->id }}</td>
                                <td class="text-start">{{ ucfirst($accounts->account_title) }}</td>

                                <!-- Trial Balance -->
                                @foreach($accounts->trialBalance as $trialBalance)
                                    <td contenteditable="true" class="text-success bg-light"
                                        data-id="{{ $accounts->id }}"
                                        data-type="trial_balance"
                                        data-field="debit">
                                        {{ $trialBalance->debit ? '₱' . number_format($trialBalance->debit) : '' }}
                                    </td>
                                    <td contenteditable="true" class="text-danger bg-light"
                                        data-id="{{ $accounts->id }}"
                                        data-type="trial_balance"
                                        data-field="credit">
                                        {{ $trialBalance->credit ? '₱' . number_format($trialBalance->credit) : '' }}
                                    </td>
                                @endforeach

                                <!-- Adjustments -->
                                @foreach($accounts->adjustment as $adjustment)
                                    <td contenteditable="true" class="text-success bg-light"
                                        data-id="{{ $accounts->id }}"
                                        data-type="adjustments"
                                        data-field="debit">
                                        {{ $adjustment->debit ? '₱' . number_format($adjustment->debit) : '' }}
                                    </td>
                                    <td contenteditable="true" class="text-danger bg-light"
                                        data-id="{{ $accounts->id }}"
                                        data-type="adjustments"
                                        data-field="credit">
                                        {{ $adjustment->credit ? '₱' . number_format($adjustment->credit) : '' }}
                                    </td>
                                @endforeach

                                <!-- Adjusted Trial Balance -->
                                @foreach($accounts->adjustedTrialBalance as $adjustedTrialBalance)
                                    <td contenteditable="true" class="text-success bg-light"
                                        data-id="{{ $accounts->id }}"
                                        data-type="adjustedTrialBalance"
                                        data-field="debit">
                                        {{ $adjustedTrialBalance->debit ? '₱' . number_format($adjustedTrialBalance->debit) : '' }}
                                    </td>
                                    <td contenteditable="true" class="text-danger bg-light"
                                        data-id="{{ $accounts->id }}"
                                        data-type="adjustedTrialBalance"
                                        data-field="credit">
                                        {{ $adjustedTrialBalance->credit ? '₱' . number_format($adjustedTrialBalance->credit) : '' }}
                                    </td>
                                @endforeach

                                <!-- Income Statement -->
                                @foreach($accounts->incomeStatement as $incomeStatement)
                                    <td contenteditable="true" class="text-success bg-light"
                                        data-id="{{ $accounts->id }}"
                                        data-type="incomeStatement"
                                        data-field="debit">
                                        {{ $incomeStatement->debit ? '₱' . number_format($incomeStatement->debit) : '' }}
                                    </td>
                                    <td contenteditable="true" class="text-danger bg-light"
                                        data-id="{{ $accounts->id }}"
                                        data-type="incomeStatement"
                                        data-field="credit">
                                        {{ $incomeStatement->credit ? '₱' . number_format($incomeStatement->credit) : '' }}
                                    </td>
                                @endforeach

                                <!-- Balance Sheet -->
                                @foreach($accounts->balanceSheet as $balanceSheet)
                                    <td contenteditable="true" class="text-success bg-light"
                                        data-id="{{ $accounts->id }}"
                                        data-type="balanceSheet"
                                        data-field="debit">
                                        {{ $balanceSheet->debit ? '₱' . number_format($balanceSheet->debit) : '' }}
                                    </td>
                                    <td contenteditable="true" class="text-danger bg-light"
                                        data-id="{{ $accounts->id }}"
                                        data-type="balanceSheet"
                                        data-field="credit">
                                        {{ $balanceSheet->credit ? '₱' . number_format($balanceSheet->credit) : '' }}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach

                        <!-- Totals Row -->
                        <tr class="fw-bold">
                            <td colspan="2" class="text-end">Total:</td>
                            <td>₱{{ number_format($totalDebitTrialBalance) }}</td>
                            <td>₱{{ number_format($totalCreditTrialBalance) }}</td>
                            <td>₱{{ number_format($totalDebitAdjustments) }}</td>
                            <td>₱{{ number_format($totalCreditAdjustments) }}</td>
                            <td>₱{{ number_format($totalDebitAdjustedTrialBalance) }}</td>
                            <td>₱{{ number_format($totalCreditAdjustedTrialBalance) }}</td>
                            <td>₱{{ number_format($totalDebitIncomeStatement) }}</td>
                            <td>₱{{ number_format($totalCreditIncomeStatement) }}</td>
                            <td>₱{{ number_format($totalDebitBalanceSheet) }}</td>
                            <td>₱{{ number_format($totalCreditBalanceSheet) }}</td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    {{ $account->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
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
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }

    .table thead th {
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.05em;
        color: white
    }


</style>

@endsection
