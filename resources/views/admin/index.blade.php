@extends('admin')
@section('title', 'Klinik - Beranda Admin')
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

    </section>

  </main>
  <!-- End #main -->
@endsection
