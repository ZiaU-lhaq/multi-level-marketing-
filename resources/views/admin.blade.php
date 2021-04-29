@extends('layouts.admin_layout')
@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row"> 
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                        <a href="../videolist">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white">
                                <i class="fas fa-video"></i></h1>
                                <h6 class="text-white">Videos</h6>
                        </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                          <a href="../applist">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="fab fa-android"></i></h1>
                                <h6 class="text-white">Apps</h6>
                            </div>
                           </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <a href="../packagelist">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                    <h6 class="text-white">Packages</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                             <a href="../adminlist">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="fas fa-users"></i></h1>
                                    <h6 class="text-white">Admins</h6>
                                </div>
                             </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <a href="../userlist">
                                <div class="box bg-secondary text-center">
                                    <h1 class="font-light text-white"><i class="fas fa-users"></i></h1>
                                    <h6 class="text-white">Users</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Column -->
                     <!-- Column -->
                     <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                                <a href="../transactionlist">
                                    <div class="box bg-cyan text-center">
                                        <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                        <h6 class="text-white">Transactions</h6>
                                    </div>
                                </a>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Site Analysis</h4>
                                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-9">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-line-chart"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="bg-dark bg-gradient p-10 text-white text-center">
                                                    <i class="fa fa-user mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">2540</h5>
                                                    <small class="font-light">Total Users</small>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bg-dark bg-gradient p-10 text-white text-center">
                                                    <i class="fa fa-plus mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">120</h5>
                                                    <small class="font-light">New Users</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-info p-10 text-white text-center">
                                                    <i class="fa fa-cart-plus mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">1656</h5>
                                                    <small class="font-light">Daily ROI</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-info p-10 text-white text-center">
                                                    <i class="fa fa-tag mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">9540</h5>
                                                    <small class="font-light">Total ROI</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-danger p-10 text-white text-center">
                                                    <i class="fa fa-table mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">100</h5>
                                                    <small class="font-light">Pending Users</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-danger p-10 text-white text-center">
                                                    <i class="fa fa-globe mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">8540</h5>
                                                    <small class="font-light">Binary Return </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection