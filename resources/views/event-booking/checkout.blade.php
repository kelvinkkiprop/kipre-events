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
            <h5 class="fw-bold">Thank you for submitting your online application. To complete your registration, kindly proceed with payment as outlined below:</h5>
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
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100 shadow-sm border-0 p-2">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>1. Kenyan/East African applicants: </strong> Please use the <strong>Kenyan Shillings (Kshs.) account details</strong> provided.</h5>
                                    <div class="card-text">
                                        <b>Paybill:</b> 329329 <br>
                                        <b>Account No:</b> 01024 8905 6900
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 shadow-sm border-0 p-2">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>2. International applicants:</strong> Please use the <strong>USD account details</strong> provided.</h5>
                                    <div class="card-text">
                                        <b>Account Name:</b> The Kenya Institute of Primate Research (USD): <br>
                                        <b>Bank:</b> Standard Chartered Bank <br>
                                        <b>BIC:</b> SCBLKENXXXX <br>
                                        <b>USD Account Number:</b> 8702 4890 56900 <br>
                                        <b>SWIFT:</b> SCBLKENXXXX <br>
                                        <b>Bank Code:</b> 02 <br>
                                        <b>Branch Code:</b> 07500
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 py-4">
                    <ul style="list-style-type: square; padding-left: 20px; font-weight: bold; color: #333;">
                        <li class="lead">Upon completing your payment, <span class="fw-bold">send proof of payment</span> to <a href="mailto:accounts@kipre.go.ke">accounts@kipre.go.ke</a> for verification.</li>
                        <li class="lead">Applicants experiencing any challenges with the payment process are encouraged to <span class="fw-bold">reach out to the same email address</span> for further assistance.</li>
                    </ul>
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
