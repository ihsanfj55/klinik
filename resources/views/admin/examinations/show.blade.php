@extends('admin')

@section('title', 'PMP Care - Pemeriksaan Pasien')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Pemeriksaan Pasien</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Detail Pemeriksaan Pasien</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('examination.index') }}" type="button" class="btn btn-warning btn-md my-2">
                                <i class="bi bi-arrow-left"></i> Kembali</a>
                            <a href="{{ route('examination.index') }}" type="button" class="btn btn-primary btn-md my-2">
                                <i class="bi bi-printer"></i> Print Hasil Pemeriksaan</a>
                            <!-- Table with stripped rows -->
                            <table class="table">
                                <tr>
                                    <td>Tanggal Pemeriksaan</td>
                                    <td>{{ $examination->examination_date }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>{{ $examination->fullname }}</td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td>{{ $examination->age }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>{{ $examination->gender }}</td>
                                </tr>
                                <tr>
                                    <td>Desa</td>
                                    <td>{{ $examination->village }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>{{ $examination->subdistrict }}</td>
                                </tr>
                                <tr>
                                    <td>Kabupaten</td>
                                    <td>{{ $examination->regency }}</td>
                                </tr>
                                <tr>
                                    <td>Anamnese</td>
                                    <td>{{ $examination->anamnese }}</td>
                                </tr>
                                <tr>
                                    <td>Hasil Pemeriksaan</td>
                                    <td>{{ $examination->checkup_result }}</td>
                                </tr>
                                <tr>
                                    <td>Terapi</td>
                                    <td>{{ $examination->therapy }}</td>
                                </tr>
                                <tr>
                                    <td>Tindakan</td>
                                    <td>{{ $examination->action }}</td>
                                </tr>
                                <tr>
                                    <td>Kunjungan Ke</td>
                                    <td>{{ $examination->visit_to }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Antri</td>
                                    <td>{{ $examination->queue_number }}</td>
                                </tr>
                                <tr>
                                    <td>Pemeriksa</td>
                                    <td>{{ $examination->examiner }}</td>
                                </tr>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

@endsection
