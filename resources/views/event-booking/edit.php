@extends('layouts.app')

@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="display-5 fw-bold text-light"><br><br><span class="fs-1">EVENT event-booking</span></div>
    </div>
</div>

<div class="container py-4">
    <div class="row justify-content-center my-4">

        <div class="text-center">
            <h5 class="h4 fw-bolder">SELECT PARTICIPATION TO PROCEED:</h5>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-2">

            <div class="col">
                <div class="card border-0 h-100 rounded-0">
                    <div class="card-header text-center bg-info">
                        <div class="card-title h3 fw-bolder text-light">Kenyan / East <br> African Participants</div>
                    </div>
                    <div class="card-body p-4">
                        <div class="fw-bold display-5 text-info">
                            <sup>KES</sup> 7,500*
                        </div>
                        <div class="lead">
                            <div class="p-3 border-bottom-dotted">
                                Participation for all non-students open to Kenyans and East African residents.
                            </div>
                            <div class="p-3 border-bottom-dotted fw-bold">
                                * Early Registration (Ending 31st July, 2025)
                            </div>
                            <div class="p-3 border-bottom-dotted">
                                ** Late registration fee is Sh. 13,000. Starting from 1st August until the events starts
                            </div>
                            <div class="p-3">
                                On-Site registration will be available at Sh. 16,000
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-info">
                        <div class="text-center text-light">
                            <a href="/event-booking/1" class="h4  text-decoration-none text-reset">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 h-100 rounded-0">
                    <div class="card-header text-center bg-info">
                        <div class="card-title h3 fw-bolder text-light">Kenyan / East <br> African Students</div>
                    </div>
                    <div class="card-body p-4">
                        <div class="fw-bold display-5 text-info">
                            <sup>KES</sup> 4,000*
                        </div>
                        <div class="lead">
                            <div class="p-3 border-bottom-dotted">
                                Participation open to Kenyan and East African students .
                            </div>
                            <div class="p-3 border-bottom-dotted fw-bold">
                                * Early registration price (Ending 31st July, 2025)
                            </div>
                            <div class="p-3 border-bottom-dotted">
                                ** Late registration fee is Sh. 6,000. Starting from 1st August until the events starts.
                            </div>
                            <div class="p-3">
                                On-Site registration will be available at Sh. 9,000
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-info">
                        <div class="text-center text-light">
                            <a href="/event-booking/2" class="h4  text-decoration-none text-reset">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 h-100 rounded-0">
                    <div class="card-header text-center bg-info">
                        <div class="card-title h3 fw-bolder text-light">International <br> Students</div>
                    </div>
                    <div class="card-body p-4">
                        <div class="fw-bold display-5 text-info">
                            <sup>USD</sup>100*
                        </div>
                        <div class="lead">
                            <div class="p-3 border-bottom-dotted">
                               Participation open to International Students outside of the East African Region.
                            </div>
                            <div class="p-3 border-bottom-dotted fw-bold">
                                * Early registration price (Ending 31st July, 2025)
                            </div>
                            <div class="p-3 border-bottom-dotted">
                                Late registration fee is $150. Starting from 1st August until the events starts.
                            </div>
                            <div class="p-3">
                               On-Site registration will be available at $200
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-info">
                        <div class="text-center text-light">
                            <a href="/event-booking/3" class="h4  text-decoration-none text-reset">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 h-100 rounded-0">
                    <div class="card-header text-center bg-info">
                        <div class="card-title h3 fw-bolder text-light">International <br> Participants</div>
                    </div>
                    <div class="card-body p-4">
                        <div class="fw-bold display-5 text-info">
                            <sup>USD</sup>200*
                        </div>
                        <div class="lead">
                            <div class="p-3 border-bottom-dotted">
                               Participation for all International Guests from countries outside of the East African Region.
                            </div>
                            <div class="p-3 border-bottom-dotted fw-bold">
                                * Early registration price (Ending 31st July, 2025)
                            </div>
                            <div class="p-3 border-bottom-dotted">
                                ** Late registration fee is $300. Starting from 1st August until the events starts.
                            </div>
                            <div class="p-3">
                               On-Site registration will be available at $300
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-info">
                        <div class="text-center text-light">
                            <a href="/event-booking/4" class="h4  text-decoration-none text-reset">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
