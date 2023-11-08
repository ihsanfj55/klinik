@extends('admin')

@section('title', 'PMP Care - Kunjungan Bulanan Pasien')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endpush

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Kunjungan Bulan Ini</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Kunjungan Bulan Ini</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Data Pemeriksaan Pasien Bulan Ini</h4>
                            <a href="{{ route('reportExaminationMonth') }}" type="button"
                                class="btn btn-primary btn-md mb-2">
                                <i class="bi bi-clipboard-plus"></i> Print Laporan</a>
                            <!-- Table with stripped rows -->
                            <table class="table" id="data-table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal Pemeriksaan</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Desa</th>
                                        <th scope="col">Kecamatan</th>
                                        <th scope="col">Kunjungan Ke</th>
                                        <th scope="col">Nomor Antrian</th>
                                    </tr>
                                </thead>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('#data-table').DataTable({
                scrollX: true,
                processing: true,
                serverSide: true,
                responsive: true,
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                ajax: '{{ url()->current() }}',
                columns: [{
                        data: 'DT_RowIndex'
                    },
                    {
                        data: 'examination_date'
                    },
                    {
                        data: 'fullname'
                    },
                    {
                        data: 'age'
                    },
                    {
                        data: 'village'
                    },
                    {
                        data: 'subdistrict'
                    },
                    {
                        data: 'visit_to'
                    },
                    {
                        data: 'queue_number'
                    },
                ],
            });

        });
    </script>
@endpush
