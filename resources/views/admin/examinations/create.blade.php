@extends('admin')

@section('title', 'Klinik - Tambah Data Pemeriksaan Pasien')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Data Pemeriksaan Pasien</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Tambah Data Pemeriksaan Pasien</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Input Data Pemeriksaan Pasien</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" action="{{ route('examination.store') }}" method="POST">
                @csrf
                @include('admin.examinations.include.form')

                  <div class="text-end">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

              </form><!-- End Multi Columns Form -->

            </div>
          </div>
        </div>



      </div>
    </section>

  </main>

@endsection
