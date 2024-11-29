@extends('layout.admin_master')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Fund Your Wallet</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-12 mb-1">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount">
                        </div>
                        <div class="col-md-12 mt-1">
                            <button type="submit">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
