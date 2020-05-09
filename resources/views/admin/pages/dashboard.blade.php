@extends('admin.mainframe')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="{{ url('/') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-right fa-sm text-white-50"></i> Visit Main Website</a>
        </div>

        @include('admin.includes.messages')

        <!-- Content Row -->
        <div class="row">

            <!-- Pages Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pages</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pages }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chalkboard fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Categories</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $categories }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-database fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Boats Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Boats</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $boats }}</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-ship fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Forms Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Contact Forms</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $contacts }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Daily Visit Overview</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Contacts by Forms</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Website
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Email
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Phone
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Contact Requests</h6>
                    </div>
                    <div class="card-body">
                        <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <!-- Color System -->
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-primary text-white shadow">
                            <div class="card-body">
                                Note 1
                                <div class="text-white-50 small">#4e73df</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-success text-white shadow">
                            <div class="card-body">
                                Note 2
                                <div class="text-white-50 small">#1cc88a</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-info text-white shadow">
                            <div class="card-body">
                                Note 3
                                <div class="text-white-50 small">#36b9cc</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-warning text-white shadow">
                            <div class="card-body">
                                Note 4
                                <div class="text-white-50 small">#f6c23e</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-danger text-white shadow">
                            <div class="card-body">
                                Note 5
                                <div class="text-white-50 small">#e74a3b</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card bg-secondary text-white shadow">
                            <div class="card-body">
                                Note 6
                                <div class="text-white-50 small">#858796</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 mb-4">

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{ asset('/admin/img/undraw_posting_photo.svg') }}" alt="">
                        </div>
                        <p>Xerotic CMS (Content Management System) was delivered to Mr. Joe Ialiacci by Toki on behalf of Imaginary Technologies Corporation for personal use.</p>
                        <p>This version was fully customized for the use of Yachthampton online system.</p>
                        <p>Maintained & support by Prince</p>
                    </div>
                </div>

                <!-- Approach -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                    </div>
                    <div class="card-body">
                        <p>Author : Mahmud Abdur Rahman</p>
                        <p>System Title : Xerotic CMS (Content Management System).</p>
                        <p>Version : 0.0.1-beta</p>
                        <p class="mb-0">Technologies used for development - </p>
                        <ul>
                            <li>PHP 7.2</li>
                            <li>Laravel 5.8</li>
                            <li>Bootstrap Admin LTE 2.0</li>
                            <li>jQuery 3</li>
                            <li>Bootstrap 4</li>
                            <li>MySQL</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @endsection