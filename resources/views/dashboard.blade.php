<x-app-layout>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Usage <span>| Today</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-lightning-charge"></i>
                                        </div>
                                        <div class="ps-3" id="energyUsage">
                                            <h6>- kWh</h6>
                                            <span class="text-success small pt-1 fw-bold">-%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Expected Price <span>| Today</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cash"></i>
                                        </div>
                                        <div class="ps-3" id="price">
                                            <h6>Rp-</h6>
                                            <span class="text-success small pt-1 fw-bold">-%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <!-- <input type="date" id="myDate1" value="2024-01-01">
                      <a> To </a>
                      <input type="date" id="myDate2" value="2024-01-30"> -->
                                    <a class="icon" id="datepicker"><i class="bi bi-three-dots"></i></a>
                                    <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#" onclick="showToday()">Today</a></li>
                        <li><a class="dropdown-item" href="#" onclick="showMonth()">This Month</a></li>
                        <li><a class="dropdown-item" href="#" onclick="showYear()">This Year</a></li>
                      </ul> -->
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Chart Data</h5>

                                    <!-- Default Tabs -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab"
                                                aria-controls="home" aria-selected="true">Energy</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Voltage</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                                data-bs-target="#contact" type="button" role="tab"
                                                aria-controls="contact" aria-selected="false">Current</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="power-tab" data-bs-toggle="tab"
                                                data-bs-target="#power" type="button" role="tab"
                                                aria-controls="power" aria-selected="false">Power</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="power-tab" data-bs-toggle="tab"
                                                data-bs-target="#tabcosphi" type="button" role="tab"
                                                aria-controls="power" aria-selected="false">PF</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="power-tab" data-bs-toggle="tab"
                                                data-bs-target="#tabfreq" type="button" role="tab"
                                                aria-controls="power" aria-selected="false">Frequency</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-2" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <h5 class="card-title">Energy<span class="dateshow">/-</span></h5>
                                            <div id="Energy"></div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <h5 class="card-title">Voltage<span class="dateshow">/-</span></h5>
                                            <div id="Voltage"></div>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                            aria-labelledby="contact-tab">
                                            <h5 class="card-title">Current<span class="dateshow">/-</span></h5>
                                            <div id="Current"></div>
                                        </div>
                                        <div class="tab-pane fade" id="power" role="tabpanel"
                                            aria-labelledby="contact-tab">
                                            <h5 class="card-title">Power<span class="dateshow">/-</span></h5>
                                            <div id="Power"></div>
                                        </div>
                                        <div class="tab-pane fade" id="tabcosphi" role="tabpanel"
                                            aria-labelledby="contact-tab">
                                            <h5 class="card-title">Power Factor<span class="dateshow">/-</span></h5>
                                            <div id="ChartCosPhi"></div>
                                        </div>
                                        <div class="tab-pane fade" id="tabfreq" role="tabpanel"
                                            aria-labelledby="contact-tab">
                                            <h5 class="card-title">Frequency<span class="dateshow">/-</span></h5>
                                            <div id="ChartFrequency"></div>
                                        </div>
                                    </div><!-- End Default Tabs -->
                                </div>

                            </div>
                        </div><!-- End Reports -->
                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Recent Usage <span>| Today</span></h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Parameters</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Time PM</th>
                                            <td id="Time PM">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Voltage A</th>
                                            <td id="VA">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Voltage B</th>
                                            <td id="VB">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Voltage C</th>
                                            <td id="VC">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Voltage AVG</th>
                                            <td id="VAVG">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Current A</th>
                                            <td id="CA">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Current B</th>
                                            <td id="CB">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Current C</th>
                                            <td id="CC">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Current AVG</th>
                                            <td id="CAVG">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Active Power</th>
                                            <td id="WT">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Reactive Power</th>
                                            <td id="VART">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Apprarent Power</th>
                                            <td id="VAT">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Cos Phi</th>
                                            <td id="CosPhi">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Frequency</th>
                                            <td id="Freq">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Active Energy Import</th>
                                            <td id="EI">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Active Energy Export</th>
                                            <td id="EE">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Reactive Energy Import</th>
                                            <td id="REI">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                        <tr>
                                            <th>Reactive Energy Export</th>
                                            <td id="REE">-</td>
                                            <td><span class="badge bg-success">Normal</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </div><!-- End Right side columns -->
            </div>
        </section>

    </main><!-- End #main -->
</x-app-layout>
