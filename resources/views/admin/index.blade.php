@extends('admin')
@section('title', 'PMP Care - Beranda Admin')
@section('menuDashboard', 'nav-item')

@section('content')
    <main id="main" class="main">


        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">


                        <!-- Kunjungan Harian Card -->
                        <div class="col-xxl-4 col-md-4">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ route('visitDay') }}">Kunjungan Hari Ini </a></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalExaminationByDay }}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Customers Card -->
                        <!-- Kunjungan Bulanan Card -->
                        <div class="col-xxl-4 col-md-4">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ route('visitMonth') }}">Kunjungan Bulan Ini </a></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalExaminationByMonth }}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Customers Card -->
                        <!-- Kunjungan Bulanan Card -->
                        <div class="col-xxl-4 col-md-4">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ route('allVisit') }}">Total Kunjungan</a></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalAllExamination }}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Customers Card -->
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection
