
@extends('user.dashboard.user-master')

@section('content')

    <!-- Content -->
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h3>My Payments</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-0">All Payments</h6>
            </div>
            <div class="table-responsive">
                <table id="recent-orders" class="table table-lg">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Payment Method</th>
                        <th>Payment Service</th>
                        <th>Amount</th>
                        <th>Transaction ID</th>
                        <th>Status</th>
                        {{-- <th class="text-right">View</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($payments as $payment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $payment->transaction_method }}</td>
                                <td>{{ ucfirst($payment->userService->service->name) }}</td>
                                <td>Rs. {{ $payment->total_amount }}</td>
                                <td>{{ $payment->transaction_id }}</td>
                                <td>{{ $payment->status }}</td>
                                <td></td>
                                {{-- <td class="text-right">
                                    <a href="{{ route('service.detail', ['slug' => $service->slug]) }}" target="_blank" class="btn btn-primary text-white" data-toggle="tooltip" title="View">
                                        View
                                    </a>
                                </td> --}}
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- ./ Content -->

@endsection

