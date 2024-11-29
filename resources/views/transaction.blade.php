@extends('layout.admin_master')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Transactions</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>User</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Transaction ID</th>
                            <th>User</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->user->name ?? 'N/A' }}</td>
                                <td>{{ ucfirst($transaction->type) }}</td>
                                <td>{{ number_format($transaction->amount, 2) }}</td>
                                <td>{{ $transaction->description }}</td>
                                <td>{{ $transaction->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
