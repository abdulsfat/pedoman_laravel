@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'Beranda - PEDOMAN')

@section('content')
<!-- Hero 2 - Bootstrap Brain Component -->
<section class="bg-light py-5 py-xl-8 py-xxl-18">
  <div class="container overflow-hidden">
    <div class="row gy-5 gy-lg-0 align-items-lg-center justify-content-lg-between">
      <div class="col-12 col-lg-6 order-1 order-lg-0">
        <h1 class="display-6 fw-bold mb-3">Layanan Pengaduan Online Mahasiswa <br> STT Terpadu Nurul Fikri </h1>
        <p class="fs-4 mb-5">Sampaikan Laporan Anda di manapun kapanpun secara online melalui layanan aplikasi pedoman yang dapat terhubung secara langsung dengan petugas.</p>
        <div class="d-grid gap-2 d-sm-flex">
          <button type="button" class="btn btn-primary btn-2xl rounded-pill px-4 gap-3">Buat Pengaduan</button>
        </div>
      </div>
      <div class="col-12 col-lg-5 text-center">
        <img class="img-fluid mask-position-center-center mask-repeat-no-repeat mask-size-auto" loading="lazy" src="{{ asset('images/pose03_male 1.png') }}" alt="" style="-webkit-mask-image:">
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
    @if (Session::has('pesan'))
    <script>
        $('#loginModal').modal('show');

    </script>
    @endif
@endsection