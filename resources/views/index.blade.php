@extends('layouts.app')

@section('content')

<div>

    <section id="hero-section" class="my-5 py-5">
        <div class="container">
            <div class="fw-bolder text-center display-1">
                Joint International <br> Biomedical & <br> Biotechnology <br> Conference + Workshop <br> 2025
            </div>

            <div class="d-flex justify-content-center gap-5 my-4">
                <div class="d-flex align-items-center lead">
                    <i class="bi bi-geo-alt-fill text-primary me-2 fs-5"></i>
                    <span class="fw-semibold">Nairobi, Kenya</span>
                </div>
                <div class="d-flex align-items-center lead">
                    <i class="bi bi-calendar-event-fill text-success me-2 fs-5"></i>
                    <span class="fw-semibold">27th - 31st October 2025</span>
                </div>
            </div>

            <div id="countdown" class="d-flex justify-content-center gap-4 mt-5">
                <div class="time-circle border-primary text-primary">
                    <span id="days" class="fs-1">00</span>
                    <small>Days</small>
                </div>
                <div class="time-circle border-warning text-warning">
                    <span id="hours" class="fs-1">00</span>
                    <small>Hours</small>
                </div>
                <div class="time-circle border-info text-info">
                    <span id="minutes" class="fs-1">00</span>
                    <small>Minutes</small>
                </div>
                <div class="time-circle border-success text-success">
                    <span id="seconds" class="fs-1">00</span>
                    <small>Seconds</small>
                </div>
            </div>

            <div class="d-flex justify-content-center gap-5 my-4">
                <div class="d-flex align-items-center">
                    <a class="btn btn-warning btn-lg rounded-0" href="/event-booking"><small>APPLY NOW</small></a>
                </div>
                <div class="d-flex align-items-center">
                    <a class="btn btn-warning btn-lg rounded-0" href="https://primateresearch.go.ke/events/international-biotechnology-and-biomedical-workshop-and-conference-2025/" target="_blank"><small>ABOUT CONFERECE</small></a>
                </div>
            </div>

        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <div class="lead">
                <p>
                    The International Joint Biotechnology and Biomedical Workshop and Conference 2025, a premier event jointly organized by:
                </p>
                <div>
                    Kenya Institute of Primate Research (www.kipre.go.ke) <br>
                    Mount Kenya University (www.mku.ac.ke) <br>
                    AIBBC (www.aibbc.org) <br>
                    Kenya Society for Immunology (www.ksi.or.ke)
                </div> <br>
                <p>
                    This conference is a must-attend for students, faculty, healthcare practitioners, academic and industrial researchers,
                    government and county officers, and anyone passionate about advancing health through innovative research.
                </p>
            </div>
        </div>
    </section>

    <section id="highlight-section" class="container py-5">
        <div class="text-center">
            <h4 class="fw-bolder text-uppercase text-danger">Register & Book Your Slot Today</h4>
            <div class="py-4">
                <p class="h1 fw-bold">This exclusive gathering is designed to foster collaboration, share groundbreaking research, and explore the latest
                advancements in biotechnology and biomedical sciences.</p>
                <a class="btn btn-warning btn-lg rounded-0" href="/event-booking"><small>BOOK YOUR SLOT</small></a>
            </div>
        </div>
    </section>

    <section id="event-schedule-section" class="container py-5">
        <div class="text-center">
            <h3 class="text-danger">Events</h3>
            <div class="display-6 fw-bolder">Event Schedule</div>
            <p class="text-muted lead">Our premier event brings together leading experts, researchers, and innovators from around the world</p>
        </div>
        <div class="py-4">
            <ul class="nav nav-tabs border-0 justify-content-center mb-4" id="dayTabs" role="tablist">
                <li class="nav-item px-2" role="presentation">
                    <div class="card border-danger rounded-0 nav-link p-0 active1" id="day1-tab" data-bs-toggle="tab" data-bs-target="#day1" type="button" role="tab" aria-controls="day1" aria-selected="true">
                        <div class="card-header rounded-0 bg-danger text-white text-center">
                            Day 01
                        </div>
                        <div class="card-body py-1 px-4">
                              <div class="d-flex justify-content-center gap-3">
                                <div class="d-flex1 align-items-center">
                                    <h1 class="display-5 fw-bolder text-danger">27</h1>
                                </div>
                                <div class="d-flex1 align-items-center py-2">
                                    <div class="text-danger">OCT</div>
                                    <div class="text-muted">2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item px-2" role="presentation">
                    <div class="card border-success rounded-0 nav-link p-0 active1" id="day2-tab" data-bs-toggle="tab" data-bs-target="#day2" type="button" role="tab" aria-controls="day2" aria-selected="true">
                        <div class="card-header rounded-0 bg-success text-white text-center">
                            Day 02
                        </div>
                        <div class="card-body py-1 px-4">
                              <div class="d-flex justify-content-center gap-3">
                                <div class="d-flex1 align-items-center">
                                    <h1 class="display-5 fw-bolder text-success">28</h1>
                                </div>
                                <div class="d-flex1 align-items-center py-2">
                                    <div class="text-success">OCT</div>
                                    <div class="text-muted">2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item px-2" role="presentation">
                    <div class="card border-primary rounded-0 nav-link p-0 active1" id="day2-tab" data-bs-toggle="tab" data-bs-target="#day2" type="button" role="tab" aria-controls="day2" aria-selected="true">
                        <div class="card-header bg-primary text-white text-center">
                            Day 03
                        </div>
                        <div class="card-body py-1 px-4">
                              <div class="d-flex justify-content-center gap-3">
                                <div class="d-flex1 align-items-center">
                                    <h1 class="display-5 fw-bolder text-primary">29</h1>
                                </div>
                                <div class="d-flex1 align-items-center py-2">
                                    <div class="text-primary">OCT</div>
                                    <div class="text-muted">2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item px-2" role="presentation">
                    <div class="card border-warning rounded-0 nav-link p-0 active1" id="day4-tab" data-bs-toggle="tab" data-bs-target="#day4" type="button" role="tab" aria-controls="day4" aria-selected="true">
                        <div class="card-header rounded-0 bg-warning text-white text-center">
                            Day 04
                        </div>
                        <div class="card-body py-1 px-4">
                              <div class="d-flex justify-content-center gap-3">
                                <div class="d-flex1 align-items-center">
                                    <h1 class="display-5 fw-bolder text-warning">30</h1>
                                </div>
                                <div class="d-flex1 align-items-center py-2">
                                    <div class="text-warning">OCT</div>
                                    <div class="text-muted">2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item px-2" role="presentation">
                    <div class="card border-info rounded-0 nav-link p-0 active1" id="day5-tab" data-bs-toggle="tab" data-bs-target="#day5" type="button" role="tab" aria-controls="day5" aria-selected="true">
                        <div class="card-header rounded-0 bg-info text-white text-center">
                            Day 05
                        </div>
                        <div class="card-body py-1 px-4">
                              <div class="d-flex justify-content-center gap-3">
                                <div class="d-flex1 align-items-center">
                                    <h1 class="display-5 fw-bolder text-info">31</h1>
                                </div>
                                <div class="d-flex1 align-items-center py-2">
                                    <div class="text-info">OCT</div>
                                    <div class="text-muted">2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="tab-content border-0 m-0 p-0" id="dayTabsContent">
                <div class="tab-pane fade show active1" id="day1" role="tabpanel" aria-labelledby="day1-tab">
                    <h5>Schedule - Day 1 (27 Oct 2025)</h5>
                    <p>09:00 - Opening Ceremony</p>
                    <p>10:00 - Keynote Address</p>
                </div>
                <div class="tab-pane fade" id="day2" role="tabpanel" aria-labelledby="day2-tab">
                    <h5>Schedule - Day 2 (28 Oct 2025)</h5>
                    <p>09:00 - Session A</p>
                    <p>11:00 - Coffee Break</p>
                </div>
                <div class="tab-pane fade" id="day3" role="tabpanel" aria-labelledby="day3-tab">
                    <h5>Schedule - Day 3 (29 Oct 2025)</h5>
                </div>
                <div class="tab-pane fade" id="day4" role="tabpanel" aria-labelledby="day4-tab">
                    <h5>Schedule - Day 4 (30 Oct 2025)</h5>
                </div>
                <div class="tab-pane fade" id="day5" role="tabpanel" aria-labelledby="day5-tab">
                    <h5>Schedule - Day 5 (31 Oct 2025)</h5>
                </div>
            </div>
        </div>
        <div class="text-center my-1">
            <a class="btn btn-primary btn-lg rounded-0" href="{{ asset('docs/KIPRE_JOINT_CONFERENCE_PROGRAM_30th_SEPT_2025.pdf') }}" target="_blank"><small class="fw-bold">DOWNLOAD SCHEDULES</small></a>
        </div>
    </section>

</div>

@endsection
