@extends('admin.layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <div class="row">
                    <!-- Card -->
                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Users</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ DB::table('users')->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card -->
                    <!-- Card -->
                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Contact us</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-messenger"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ DB::table('contact-us')->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card -->
                    <!-- Card -->
                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Users</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ DB::table('users')->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card -->
                    <!-- Card -->
                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Users</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ DB::table('users')->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card -->
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
