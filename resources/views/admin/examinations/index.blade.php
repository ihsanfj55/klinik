@extends('admin')

@section('title', 'PMP Care - Pemeriksaan Pasien')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endpush

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Pemeriksaan Pasien</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Pemeriksaan Pasien</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Pemeriksaan Pasien</h4>
                            <a href="{{ route('examination.create') }}" type="button" class="btn btn-success btn-md mb-2">
                                <i class="bi bi-clipboard-plus"></i> Tambah Data</a>
                            <a href="modal" type="button" class="btn btn-primary btn-md mb-2" data-bs-toggle="modal"
                                data-bs-target="#modalcetaklaporan">
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
                                        <th scope="col">Opsi</th>
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
                    {
                        data: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            });

        });
    </script>
@endpush

<div class="modal fade" id="modalcetaklaporan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cetak Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('allExamination') }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Plih tanggal awal : </label>
                                <input type="date" name="start_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Plih tanggal Akhir : </label>
                                <input type="date" name="end_date" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-print"></i>
                        Cetak</button>
                </div>
            </form>
        </div>
    </div>
</div>
