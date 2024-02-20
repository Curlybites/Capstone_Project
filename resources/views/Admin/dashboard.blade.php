@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.admin_sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- Navbar End-->


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @if (session('success'))
                        @include('components.notification')
                    @endif

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-8 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">Welcome to Admin Dashboard
                                                    {{ $user->firstname }} {{ $user->lastname }} 🎉</h5>
                                            </div>
                                        </div>

                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="../assets/img/illustrations/man-with-laptop-light.png"
                                                    height="140" alt="View Badge User"
                                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                       <!-- Total Revenue -->
                                       <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                                        <div class="card">
                                            <div class="row row-bordered g-0">
                                                <div class="col-md-8">
                                                    <h5 class="card-header m-0 me-2 pb-3">Totals</h5>
        
                                                    <Style>
                                                        #myChart {
                                                            width: 600px;
                                                            /* Set your desired width */
                                                            height: 300px;
        
                                                        }
        
                                                        .chart-container {
                                                            width: 1010px;
                                                            /* Set your desired width */
                                                            height: 300px;
                                                        }
                                                    </Style>
                                                    <div class="chart-container ">
                                                        <canvas id="myChart" width="600px" height="300px"></canvas>
                                                    </div>
                                                   
                                                </div>
        
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <div class="col-lg-4 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/people-fill.svg"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt3"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt3">
                                                            <a class="dropdown-item" href="/Admin/User_List">View
                                                                More</a>
                                                            {{-- <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">{{ $totalUserString }}</span>
                                                <h3 class="card-title mb-2">{{ $totalUser }}</h3>
                                                {{-- <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Title</small> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/health-center-fill.png"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt6"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt6">
                                                            <a class="dropdown-item"
                                                                href="/Admin/Health_Center_List">View
                                                                More</a>
                                                            {{-- <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <span
                                                    class="fw-semibold d-block mb-1">{{ $totalHealthCenterString }}</span>
                                                <h3 class="card-title text-nowrap mb-1">{{ $totalHealthCenter }}</h3>
                                                {{-- <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Title</small> --}}

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/hand-fill.svg"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt6"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt6">
                                                            <a class="dropdown-item" href="/Admin/Program_List">View
                                                                More</a>
                                                            {{-- <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">{{ $totalProgramString }}</span>
                                                <h3 class="card-title text-nowrap mb-1">{{ $totalProgram }}</h3>
                                                {{-- <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Title</small> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/barangay-hall.svg"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt6"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt6">
                                                            <a class="dropdown-item" href="/Admin/Barangay_List">View
                                                                More</a>
                                                            {{-- <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <span
                                                    class="fw-semibold d-block mb-1">{{ $totalBarangayString }}</span>
                                                <h3 class="card-title text-nowrap mb-1">{{ $totalBarangay }}</h3>
                                                {{-- <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Title</small> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/role-fill.svg"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt6"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt6">
                                                            <a class="dropdown-item" href="/Admin/Role_List">View
                                                                More</a>
                                                            {{-- <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">{{ $totalRoleString }}</span>
                                                <h3 class="card-title text-nowrap mb-1">{{ $totalRole }}</h3>
                                                {{-- <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Title</small> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/city-hall.png"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt6"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt6">
                                                            <a class="dropdown-item" href="/Admin/District_List">View
                                                                More</a>
                                                            {{-- <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <span
                                                    class="fw-semibold d-block mb-1">{{ $totalDistrictString }}</span>
                                                <h3 class="card-title text-nowrap mb-1">{{ $totalDistrict }}</h3>
                                                {{-- <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Title</small> --}}
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                 
                        <!--/ Total Revenue -->
             
          
            <!--footer-->

            @include('components.footer')
            <!-- Include Chart.js library -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <!-- JavaScript for rendering the Chart.js graph -->

        </div>

        <div>

        </div>

        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Total Users', 'Total Health Centers', 'Total Barangays', 'Total Programs', 'Total Roles',
                        'Total Districts'
                    ],
                    datasets: [{
                        label: 'Admin Dashboard Data',
                        data: [
                            {{ $data['totalUser'] }},
                            {{ $data['totalHealthCenter'] }},
                            {{ $data['totalBarangay'] }},
                            {{ $data['totalProgram'] }},
                            {{ $data['totalRole'] }},
                            {{ $data['totalDistrict'] }}
                        ],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
