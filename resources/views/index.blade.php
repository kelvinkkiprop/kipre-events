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
                    <span class="fw-semibold">29th - 31st October 2025</span>
                </div>
            </div>

            <div id="countdown" class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-3 mt-5">
                <div class="time-circle border-primary text-primary text-center">
                    <span id="days" class="fs-1 d-block">00</span>
                    <small>Days</small>
                </div>
                <div class="time-circle border-warning text-warning text-center">
                    <span id="hours" class="fs-1 d-block">00</span>
                    <small>Hours</small>
                </div>
                <div class="time-circle border-info text-info text-center">
                    <span id="minutes" class="fs-1 d-block">00</span>
                    <small>Minutes</small>
                </div>
                <div class="time-circle border-success text-success text-center">
                    <span id="seconds" class="fs-1 d-block">00</span>
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
                    <div class="card border-primary rounded-0 nav-link p-0 active1" id="day1-tab" data-bs-toggle="tab" data-bs-target="#day1" type="button" role="tab" aria-controls="day1" aria-selected="true">
                        <div class="card-header bg-primary text-white text-center">
                            Day 01
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
                    <div class="card border-warning rounded-0 nav-link p-0 active1" id="day2-tab" data-bs-toggle="tab" data-bs-target="#day2" type="button" role="tab" aria-controls="day2" aria-selected="true">
                        <div class="card-header rounded-0 bg-warning text-white text-center">
                            Day 02
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
                    <div class="card border-danger rounded-0 nav-link p-0 active1" id="day3-tab" data-bs-toggle="tab" data-bs-target="#day3" type="button" role="tab" aria-controls="day3" aria-selected="true">
                        <div class="card-header rounded-0 bg-danger text-white text-center">
                            Day 03
                        </div>
                        <div class="card-body py-1 px-4">
                              <div class="d-flex justify-content-center gap-3">
                                <div class="d-flex1 align-items-center">
                                    <h1 class="display-5 fw-bolder text-danger">31</h1>
                                </div>
                                <div class="d-flex1 align-items-center py-2">
                                    <div class="text-danger">OCT</div>
                                    <div class="text-muted">2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="tab-content border-0 m-0 p-0" id="dayTabsContent">
                <div class="tab-pane fade show1 active1" id="day1" role="tabpanel" aria-labelledby="day1-tab">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-info1">
                            <caption class="fw-bolder" style="caption-side: top;">Day 1 Schedule</caption>
                            <thead class="table-primary">
                                <th colspan="2">JOINT KIPRE SESSION <br> WEDNESDAY OCTOBER 29, 2025</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>08:00-09:00</td>
                                    <td>Registration</td>
                                </tr>
                                <tr>
                                    <td>09:00-10:00</td>
                                    <td>KIPRE- opening Board/ DG/ IAB</td>
                                </tr>
                                <tr>
                                    <td>9:30-10:00</td>
                                    <td><strong>Keynote Talk 1:</strong> Prof Jann Hau</td>
                                </tr>
                                <tr>
                                    <th>10:00-10:30</th>
                                    <th>Health Break</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="table-warning"> Primate Behavior, ethics and medicine (AAALAC) <br> Dr Mercy Akinyi / Dr Daniel Chai</td>
                                </tr>
                                <tr>
                                    <td>10:30-11:00</td>
                                    <td><strong>Keynote Talk 1:</strong>  Prof Steve Shapiro</td>
                                </tr>
                                <tr>
                                    <td>11:00-11:20</td>
                                    <td><strong>Talk 2:</strong>  Ms Theresa Nyawira</td>
                                </tr>
                                <tr>
                                    <td>11:20-11:40</td>
                                    <td><strong>Talk 3:</strong>  Dr Benson Kibore</td>
                                </tr>
                                <tr>
                                    <td>11:40-12:00</td>
                                    <td><strong>Talk 5:</strong>  Dr Yasmina Paramastr</td>
                                </tr>
                                <tr>
                                    <td>12:00-12:20</td>
                                    <td><strong>Talk 6:</strong>  Prof Susan Alberts</td>
                                </tr>
                                <tr>
                                    <td>12:20-13:00</td>
                                    <td>Round table discussion</td>
                                </tr>
                                <tr>
                                    <th>13:00-14:00</th>
                                    <th>Lunch Break</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th class="table-warning">One Health: Emerging and re-emerging infectious diseases <br> Dr Joseph Kamau</th>
                                </tr>
                                <tr>
                                    <td>14:00-14:30</td>
                                    <td><strong>Keynote Talk 2:</strong>  Dr Isaac Ngere</td>
                                </tr>
                                <tr>
                                    <td>14:30-14:50</td>
                                    <td><strong>Talk 7:</strong>  Dr James Hassell</td>
                                </tr>
                                <tr>
                                    <td>14:50-15:10</td>
                                    <td><strong>Talk 8:</strong>  Dr Geoffrey Siwo</td>
                                </tr>
                                <tr>
                                    <td>15:10-15:30</td>
                                    <td><strong>Talk 9:</strong>  Prof Salome Bukachi</td>
                                </tr>
                                <tr>
                                    <td>15:30-15:50</td>
                                    <td><strong>Talk 10:</strong> Dr Emmanuel Okunga</td>
                                </tr>
                                <tr>
                                    <td>1550- 16:10</td>
                                    <td>Round table discussion</td>
                                </tr>
                                <tr>
                                    <th>16:10-16:30</th>
                                    <th>Health Break</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th class="table-warning">Research and Development Initiatives in Reproductive Health and Infectious Diseases <br> Dr Ruth Nyakundi</th>
                                </tr>
                                <tr>
                                    <td>16:30-17:00</td>
                                    <td><strong>Keynote Talk 3:</strong> Prof Niroshini Nirmalan</td>
                                </tr>
                                <tr>
                                    <td>17:00-17:20</td>
                                    <td><strong>Talk 9:</strong> Prof Kumar Nirbhay</td>
                                </tr>
                                <tr>
                                    <td>17:20-17:40</td>
                                    <td><strong>Talk 10:</strong>Prof Tony Perry (Mammalian Molecular)</td>
                                </tr>
                                <tr>
                                    <td>17:40-18:00</td>
                                    <td><strong>Talk 11:</strong>Prof Jorum Kirundi</td>
                                </tr>
                                <tr>
                                    <td>18:00-18:30</td>
                                    <td>Closing remarks/ cocktail</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade active1 show1" id="day2" role="tabpanel" aria-labelledby="day2-tab">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-info1">
                            <caption class="fw-bolder" style="caption-side: top;">Day 2 Schedule</caption>
                            <thead class="table-primary">
                                <th colspan="2">JOINT KIPRE SESSION <br> THURSDAY, OCTOBER 30, 2025</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>07:00-08:00</td>
                                    <td>Onsite registration/ Exhibition setup</td>
                                </tr>
                                <tr>
                                    <td>08:00-09:00</td>
                                    <td>Welcome and Opening program (Director General KIPRE, CS, PS, KIPRE Board Chair, Remarks by Partner Organizers)</td>
                                </tr>
                                <tr>
                                    <td>09:00-10:00</td>
                                    <td><strong>Plenary Talk 1:</strong> Dr Peter Mwethera (Director General, KIPRE)</td>
                                </tr>
                                <tr>
                                    <td>9:30-10:00</td>
                                    <td><strong>Plenary Talk 2:</strong> Prof Jerome Kim (Director General of International Vaccine Institute)</td>
                                </tr>
                                <tr>
                                    <th>10:00-10:30</th>
                                    <th>
                                        Health Break <br>
                                        <div class="row m-0">
                                            <div class="col-6 alert alert-success rounded-0 border-0">
                                                PARALLEL SESSION I <br> Immunology of parasitic infections and progress in vaccine development <br>
                                                Venue: Room A  <br> Chairs: Dr Benard Kanoi/ Ruth N
                                            </div>
                                            <div class="col-6 alert alert-danger rounded-0 border-0">
                                                PARALLEL SESSION II <br> Advances in biomedical, diagnostic and therapeutic technologies <br>
                                                Venue: Room B  <br> Chairs: KIPRE/JKUAT
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>10:30-10:50</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Keynote Talk 1:</strong> Prof Faith Osier (online)</div>
                                            <div class="col-6"><strong>Keynote Talk 2:</strong> Prof Hiromi Miyoshi</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10:50-11:10</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Keynote Talk 3:</strong> Dr. Benard Kanoi</div>
                                            <div class="col-6"><strong>Keynote Talk 4:</strong> Prof Takhiro Nitta</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11:10-11:25</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 11:</strong> Dr Sarah Kituyi</div>
                                            <div class="col-6"><strong>Talk 16:</strong> Dr Laud Anthony Basing</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11:25-11:40</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 12:</strong> Dr Barthlomew Ondigo</div>
                                            <div class="col-6"><strong>Talk 17:</strong> Dr Clement Shiluli</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11:40-11:55</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 13:</strong> Dr Rebecca Ayako</div>
                                            <div class="col-6"><strong>Talk 18:</strong> Dr Masashi Yamazaki</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11:55-12:10</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 14:</strong> Dr Brenda Okech (online)</div>
                                            <div class="col-6"><strong>Talk 19:</strong> Prof Matilu Mwau</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12:10-12:30</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 15:</strong> Dr Christian Nsanzabana</div>
                                            <div class="col-6"><strong>Talk 20:</strong> Dr Steven Kyalo Kanyiva</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12:10-12:30</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-12"><strong>Plenary Talk 2:</strong> Prof Susanne Rensing (Kansas University, USA, ONLINE)</div>
                                            <div class="col-6">Chair: Dr. Mercy Akiny</div>
                                            <div class="col-6">Venue: ROOM A</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table-info">
                                    <td>14:00-15:00 </td>
                                    <th>POSTER SESSION (Poster evaluation for Best Poster Award Prize)</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6 alert alert-success rounded-0 border-0">
                                                PARALLEL SESSION I <br> Empowering biomedical research in Africa <br>
                                                Chairs: Dr. Jesse Gitaka/ KIPRE <br> Venue: Room A
                                            </div>
                                            <div class="col-6 alert alert-danger rounded-0 border-0">
                                                PARALLEL SESSION II <br> Drug development and AMR mitigation strategies <br>
                                                Chairs: Dr Jael Obiero/ Atunga Nyachieo <br> Venue: Room B
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15:00-15:20</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Keynote Talk 5:</strong> Prof Charles C. Egwim</div>
                                            <div class="col-6"><strong>Keynote Talk 6:</strong> Dr. Ben Chan</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15:20-15:35</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 21:</strong> Prof Carla Rothlin (Online)</div>
                                            <div class="col-6"><strong>Talk 25:</strong> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15:35-15:50</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 22:</strong> Dr Mohammed Balogun</div>
                                            <div class="col-6"><strong>Talk 26:</strong> Dr Dishon Muloi</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15:50-16:05</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 23:</strong> Prof. Jesse Gitaka</div>
                                            <div class="col-6"><strong>Talk 27:</strong> Dr Racheal Kimani</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16:05- 16:20</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 24:</strong> Dr Evans Taracha</div>
                                            <div class="col-6"><strong>Talk 28:</strong> Dr Atunga Nyachieo</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <th>16:20-16:50</th>
                                    <th>Health Break</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6 alert alert-success rounded-0 border-0">
                                                PARALLEL SESSION V <br> NTDs, diagnostics and therapeutics <br>
                                                Chairs: Dr George Omondi/Dr Sarah Kituy <br> Venue: Room A
                                            </div>
                                            <div class="col-6 alert alert-danger rounded-0 border-0">
                                                PARALLEL SESSION VI <br> Climate change and its impact on ecosystem & health <br>
                                                Chairs: Dr Stan Kivai/ Dr Protus Omondi <br> Venue: Room B
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16:50-17:10</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Keynote Talk 7:</strong> Dr Wyckliff Omondi</div>
                                            <div class="col-6"><strong>Keynote Talk 9:</strong> Prof Geoffrey Wahungu</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17:10-17:30</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Keynote Talk 8:</strong> Prof Nicholas Casewell</div>
                                            <div class="col-6"><strong>Keynote Talk 10:</strong> Dr Stanislaus Kivai</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17:30-17:50</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 29:</strong> Prof Ymkje Stiniestra</div>
                                            <div class="col-6"><strong>Talk 31:</strong> Dr Peter Fundi</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17:50-18:10</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 30:</strong> Dr. Paul Mireji</div>
                                            <div class="col-6"><strong>Talk 32:</strong> Dr Wataru Kagaya (online)</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18:10-19:10 </td>
                                    <th class="table-info">YOUNG INVESTIGATORS SESSION 1 (selected from abstracts) <br> Chairs: KIPRE/ Dr Celestine Makobe <br> Venue: Room A </th>
                                </tr>
                                <tr>
                                    <td>18:10-18:20 </td>
                                    <td>Speaker 1 Charles Fund</td>
                                </tr>
                                <tr>
                                    <td>18:20-18:30 </td>
                                    <td>Speaker 2</td>
                                </tr>
                                <tr>
                                    <td>18:30-18:40</td>
                                    <td>Speaker 3</td>
                                </tr>
                                <tr>
                                    <td>18:40-18:50</td>
                                    <td>Speaker 4</td>
                                </tr>
                                <tr>
                                    <td>18:50-19:00</td>
                                    <td>Speaker 5</td>
                                </tr>
                                <tr>
                                    <td>19:00-19:10</td>
                                    <td>Speaker 6</td>
                                </tr>
                                <tr>
                                    <td>19:10-</td>
                                    <td>End Day</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade active1 show1" id="day3" role="tabpanel" aria-labelledby="day3-tab">

                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-info1">
                            <caption class="fw-bolder" style="caption-side: top;">Day 3 Schedule</caption>
                            <thead class="table-primary">
                                <th colspan="2">JOINT KIPRE SESSION <br> FRIDAY, OCTOBER 31, 2025</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>08:00-08:30</td>
                                    <th>Onsite registration and networking</th>
                                </tr>
                                <tr>
                                    <td>08:30-09:00</td>
                                    <td><strong>Plenary Talk 3:</strong> Prof. Tom Kariuki (Science for Africa foundation) Chair: Peter Mwethera</td>
                                </tr>
                                <tr>
                                    <td>09:00-09:30</td>
                                    <td><strong>Plenary Talk 4:</strong> Prof Kim Young (Purdue University), Chair: Prof. Collins Ouma</td>
                                </tr>
                                <tr>
                                    <th>9:30-10:00</th>
                                    <th>
                                        Health Break <br>
                                        <div class="row m-0">
                                            <div class="col-6 alert alert-success rounded-0 border-0">
                                                PARALLEL SESSION VII <br> Flow cytometry and clinical applications <br>
                                                Venue: Room A  <br> Chair: Dr Lucy Ochola/ Prof. Paul Robinson
                                            </div>
                                            <div class="col-6 alert alert-danger rounded-0 border-0">
                                                PARALLEL SESSION VIII <br> Prevention and management of NCDs <br>
                                                Venue: Room B  <br> Chair: Dr Ngalla Jillani/ Dr. Jesse Gitaka
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>10:00-10:20</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Keynote Talk 11:</strong> Prof. Paul Robinson</div>
                                            <div class="col-6"><strong>Keynote Talk 14:</strong> Prof Stewart Baker</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10:20-10:40</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Keynote Talk 12:</strong> Prof Hemant Agrawal</div>
                                            <div class="col-6"><strong>Keynote Talk 15:</strong> Prof Margaret Oluka</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10:40-11:00</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Keynote talk 13:</strong> Prof Andrea Cosarrizza (online)</div>
                                            <div class="col-6"><strong>Keynote talk 17:</strong> Dr Peter Waweru</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11:00-11:20</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 33:</strong> Dr William Telford</div>
                                            <div class="col-6"><strong>Talk 37:</strong> Dr Fakelia Guyton (online)</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11:20-11:40</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 34:</strong> Dr Daniel Muema</div>
                                            <div class="col-6"><strong>Talk 38:</strong> Liza Löf</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <td>12:00-13:00</td>
                                    <td>Lunch Break</td>
                                </tr>
                                <tr>
                                    <td>13:00-13:30</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-12"><strong>Plenary Talk 5: Dr Javier Guillen, (AAALAC International)</strong></div>
                                            <div class="col-6">Chair: Dr Daniel Chai</div>
                                            <div class="col-6">Venue: ROOM A</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table-info">
                                    <td>13:30-14:30 </td>
                                    <th>POSTER SESSION (Poster evaluation for Best Poster Award Prize)</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6 alert alert-success rounded-0 border-0">
                                                PARALLEL SESSION IX <br> Genomics and Bioinformatics meets AI in biomedical research <br>
                                                Chairs: Dr Mercy Akinyi / Dr Steven Ger Nyanjom <br> Venue: Room A
                                            </div>
                                            <div class="col-6 alert alert-danger rounded-0 border-0">
                                                PARALLEL SESSION X <br> New insights into HIV and Viral infections <br>
                                                Chairs: Dr Mercy Akinyi / Dr Steven Ger Nyanjom <br> Venue: Room B
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14:30-14:50</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Keynote Talk 16:</strong> Prof Taane Clark</div>
                                            <div class="col-6"><strong>Keynote Talk 17:</strong> Prof Cristina Mussini (online)</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14:50-15:10</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 40:</strong> Dr Ruth Nyakundi</div>
                                            <div class="col-6"><strong>Talk 43:</strong> Prof Guido Pli</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15:10-15:30</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 41:</strong> Dr Mtakai Ngara</div>
                                            <div class="col-6"><strong>Talk 44:</strong> Prof Upal Roy</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15:30-15:50</td>
                                    <td>
                                        <div class="row m-0">
                                            <div class="col-6"><strong>Talk 42:</strong> Dr Oluafemi Oluwole (online)</div>
                                            <div class="col-6"><strong>Talk 45:</strong> Prof Thomas Hope</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <th>15:50-16:10</th>
                                    <th>Health Break</th>
                                </tr>
                                <tr class="table-warning">
                                    <th>16:10-17:10</th>
                                    <th>YOUNG INVESTIGATORS SESSION 2 (selected from abstracts) Chairs: Venue: Room A</th>
                                </tr>
                                <tr>
                                    <td>16:10-16:20 </td>
                                    <td>Speaker 1: Dr Clare Njoki</td>
                                </tr>
                                <tr>
                                    <td>16:20-16:30</td>
                                    <td>Speaker 2</td>
                                </tr>
                                <tr>
                                    <td>16:30-16:40</td>
                                    <td>Speaker 3</td>
                                </tr>
                                <tr>
                                    <td>16:40-16:50</td>
                                    <td>Speaker 4</td>
                                </tr>
                                <tr>
                                    <td>16:50-17:00</td>
                                    <td>Speaker 5</td>
                                </tr>
                                <tr>
                                    <td>17:00-17:10</td>
                                    <td>Speaker 6</td>
                                </tr>
                                <tr>
                                    <th>117:10-18:15</th>
                                    <td class="table-info"><strong>JOINT SESSION XI- Advances in Precision Medicine and Frontier Therapeutics</strong> <br> <strong>Chairs:</strong> Dr. Kennedy Okeyo (Purdue Univ./Jackson Laboratory)/ HFSP sponsorship <br> <strong>Venue: Room A</strong></td>
                                </tr>
                                <tr>
                                    <td>17:10-17:15</td>
                                    <td><strong>SPONSOR TALK 16:</strong> Dr Toshiharu Miwa (Hitachi Ltd. Japan, online)</td>
                                </tr>
                                <tr>
                                    <td>17:15-17:40</td>
                                    <td><strong>Keynote Talk 17:</strong> Dr. Hiroko Hanzawa (Hitachi Ltd)</td>
                                </tr>
                                <tr>
                                    <td>17:40-17:55</td>
                                    <td><strong>Keynote Talk 18:</strong> Prof. Masood Kamali-Moghaddam (Uppsala University)—confirmed onsite</td>
                                </tr>
                                <tr>
                                    <td>17:55-18:05</td>
                                    <td><strong>Keynote Talk 19:</strong> Prof. Jakob Skou Pedersen, Aarhus University, Denmark –confirmed onsite</td>
                                </tr>
                                <tr>
                                    <td>18:05-18:20 </td>
                                    <td><strong>Keynote Talk 20:</strong> Prof Douglas J Perkins (online)</td>
                                </tr>
                                <tr>
                                    <th>18:30-19:00</th>
                                    <th>Awards and closing ceremony (ROOM A)</th>
                                </tr>
                                <tr>
                                    <th>19:10-</th>
                                    <th>COCKTAIL/DINNER</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center my-1">
            <a class="btn btn-primary btn-lg rounded-0" href="{{ asset('docs/KIPRE_JOINT_CONFERENCE_PROGRAM_30th_SEPT_2025.pdf') }}" target="_blank"><small class="fw-bold">DOWNLOAD SCHEDULES</small></a>
        </div>
    </section>

</div>

@endsection
