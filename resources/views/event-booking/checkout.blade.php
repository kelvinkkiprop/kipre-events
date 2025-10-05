@extends('layouts.app')

@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="display-5 fw-bold text-light"><br><br><span class="fs-1">CHECKOUT</span></div>
    </div>
</div>

<div class="container py-4">
    <div class="row justify-content-center my-4">

        <div class="text-center">
            <h6 class="h4 fw-bold">Thank you. Your registration has been submitted.</h6>
        </div>
        <div class="row">
            <form method="POST" action="/checkout/{{ $item->id }}">
            @csrf

                <div class="col-md-12">
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>NUMBER</th>
                                <th>DATE</th>
                                <th>PACKAGE</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">{{ $item->invoice_number }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('d M, Y')  }}</td>
                                    <td>@if($item->package){{ $item->package->name }}@endif</td>
                                    <th>@if($item->package){{ $item->package->currency_type }}. {{ $item->package->cost }}@endif</th>
                                </tr>
                            </tbody>
                    </table>
                </div>

                <div class="col-md-12">
                    <h5 class="fw-bolder">Our Bank Details:</h5>
                    <h6 class="fw-bold">The Kenya Institute of Primate Research (USD):</h6>
                    <div>Bank: <strong>Standard Chartered Bank</strong></div>
                    <div>BIC: <strong>SCBLKENXXXX</strong></div>
                    <div>USD Account Number: <strong>8702 4890 56900</strong></div>
                    <div>SWIFT: <strong>SCBLKENXXXX</strong></div>
                    <div>Bank Code: <strong>02</strong></div>
                    <div>Branch  Code: <strong>07500</strong></div>
                </div>

                <div class="col-md-12 my-4">
                    <h5 class="fw-bolder">Billing address</h5>
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div>@if($item->user){{ $item->user->name }}@endif</div>
                            <div>@if($item->user){{ $item->user->physical_address }}@endif</div>
                            <div><i class="bi bi-telephone-fill"></i> @if($item->user){{ $item->user->phone }}@endif</div>
                            <div><i class="bi bi-envelope-fill"></i> @if($item->user){{ $item->user->email }}@endif</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-primary">Complete</button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection
