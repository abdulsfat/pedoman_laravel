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
        <h1 class="display-6 fw-bold mb-3">Layanan Pengaduan Online Mahasiswa <br>STT Terpadu Nurul Fikri </h1>
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
    <!-- ini tentang kita -->
    <br>
    <div class="container">
    <h1 style="text-align:center">Tentang Kita</h1>
    <p  style="text-align:center">"Selamat datang di Pedoman, aplikasi Layanan Pengaduan Online Mahasiswa STT Terpadu Nurul Fikri. Kami hadir untuk membantu mahasiswa dalam mengatasi masalah dan mengajukan pengaduan dengan mudah. Pedoman dirancang dengan antarmuka yang intuitif dan sederhana, sehingga mahasiswa dapat dengan cepat mengajukan pengaduan dan memantau perkembangannya. Kami menjaga kerahasiaan data pribadi mahasiswa dengan baik. Kami berkomitmen untuk menangani setiap pengaduan dengan cermat dan adil. Bergabunglah dengan Pedoman sekarang dan mari kita bersama-sama menciptakan lingkungan akademik yang lebih baik!"</p>
    </div>
    <!-- ini tutup tentang kita -->
    @include('user.footer')
@endsection

@section('js')
    @if (Session::has('pesan'))
    <script>
        $('#loginModal').modal('show');

    </script>
    @endif
@endsection